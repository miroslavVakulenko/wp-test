<?php

/**
 * LazyBlock: lazyblock-home-page-hero-section
 * Description: Custom block for hero-section inside home-page.
 */

$title = $attributes['title'] ?? '';
$img = $attributes['img']['url'] ?? '';
$text = $attributes['text'] ?? '';

?>

<div class="lazyblock-home-page-hero-section">
  <div class="seating-plan-container container-wrapper">
    <div class="">
      <h2 class="section-name"><?php echo esc_html($title); ?></h2>
      <div class="theater-hystory-img">
        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($title); ?>" />
      </div>
      <p>
        <?php echo wp_kses_post($text); ?>
      </p>
    </div>
  </div>
</div>