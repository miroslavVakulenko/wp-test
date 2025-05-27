<?php

/**
 * LazyBlock: lazyblock-home--project-overview
 * Description: Custom block for project-overview inside home.
 */


$section_name = $attributes['section-name'] ?? '';
$projects = $attributes['projects'] ?? [];

if ($projects && is_array($projects)) {
  foreach ($projects as $key => $project) {
    $project['title'] = $project['title'] ?? '';
    $project['description'] = $project['description'] ?? '';
    $project['cargo-description'] = $project['cargo-description'] ?? '';
    $project['shipment-route'] = $project['shipment-route'] ?? '';
    $project['image-1'] = $project['image-1'] ?? '';
    $project['image-2'] = $project['image-2'] ?? '';
    $project['image-3'] = $project['image-3'] ?? '';
    $projects[$key] = $project;
  }
} else {
  $projects = [];
}
?>

<div class="lazyblock-home--project-overview home--project-overview white-section" id="home--project-overview">
  <div class="project-overview-container container-wrapper">
    <?php if ($section_name): ?>
      <h2 class="section-name"><?php echo esc_html($section_name); ?></h2>
    <?php endif; ?>

    <?php if (!empty($projects)): ?>
      <div class="projects">
        <?php foreach ($projects as $project): ?>
          <div class="project">
            <div class="content">
              <?php if (!empty($project['title'])): ?>
                <h3 class="title"><?php echo wp_kses_post($project['title']); ?></h3>
              <?php endif; ?>

              <div class="details">
                <?php if (!empty($project['description'])): ?>
                  <div class="description">
                    <?php echo wp_kses_post($project['description']); ?>
                  </div>
                <?php endif; ?>

                <?php if (!empty($project['cargo-description']) || !empty($project['shipment-route'])): ?>
                  <div class="project-meta">
                    <?php if (!empty($project['cargo-description'])): ?>
                      <div class="cargo-description">
                        <h4>home--project_overview--cargo_description:</h4>
                        <span><?php echo wp_kses_post($project['cargo-description']); ?></span>
                      </div>
                    <?php endif; ?>

                    <?php if (!empty($project['shipment-route'])): ?>
                      <div class="shipment-route">
                        <h4>home--project_overview--shipment-route:</h4>
                        <span><?php echo wp_kses_post($project['shipment-route']); ?></span>
                      </div>
                    <?php endif; ?>

                    <img class="arrow-outward" alt="">
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="slider-wrapper">
              <div class="images home--project-overview--images--slider">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                  <?php $img = $project['image-' . $i] ?? null; ?>
                  <?php if (!empty($img['url'])): ?>
                    <div class="image">
                      <img src="<?php echo esc_url($img['url']); ?>" alt="" loading="lazy">
                    </div>
                  <?php endif; ?>
                <?php endfor; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>


<!-- Slick Slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  jQuery(document).ready(function ($) {
    function initOrDestroySlider() {
      $('.home--project-overview--images--slider').each(function () {
        const $slider = $(this);
        const isMobile = window.innerWidth <= 768;

        if (isMobile) {
          if (!$slider.hasClass('slick-initialized')) {
            $slider.slick({
              arrows: false,
              slidesToScroll: 1,
              slidesToShow: 1.05,
              infinite: false,
            });
          }
        } else {
          if ($slider.hasClass('slick-initialized')) {
            $slider.slick('unslick');
          }
        }
      });
    }

    initOrDestroySlider();

    let resizeTimeout;
    $(window).on('resize', function () {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(initOrDestroySlider, 150);
    });

    function bindSliderToggle() {
      if (window.innerWidth > 768) {
        $('.home--project-overview .project').each(function () {
          const $project = $(this);
          const $content = $project.find('.content');

          $content.off('click.sliderToggle');

          $content.on('click.sliderToggle', function () {
            $project.toggleClass('active');
          });
        });
      } else {
        $('.home--project-overview .project').removeClass('active');
        $('.home--project-overview .content').off('click.sliderToggle');
      }
    }

    bindSliderToggle();

    let resizeTimeout2;
    $(window).on('resize', function () {
      clearTimeout(resizeTimeout2);
      resizeTimeout2 = setTimeout(bindSliderToggle, 150);
    });
  });
</script>