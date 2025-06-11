

<?php

$filters = $attributes['filters'] ?? [];
$section_title = $attributes['section_title'] ?? '';

$type_filters = [];
$day_filters = [];

if (!empty($filters) && is_array($filters)) {
  foreach ($filters as $filter) {
    $group = $filter['filter-group'] ?? ''; //becouse we have two groups of filters in one time
    $label = $filter['filter-label'] ?? '';
    $value = $filter['filter-value'] ?? '';

    if ($group === 'type') {
      $type_filters[] = ['label' => $label, 'value' => $value];
    } elseif ($group === 'day') {
      $day_filters[] = ['label' => $label, 'value' => $value];
    }
  }
}
?>

<div class="lazyblock-home--filters home--filters white-section" id="home--filters">  
  <div class="filters-container container-wrapper">

    <?php if (!empty($section_title)) : ?>
      <h2 class="filters-section-title"><?php echo esc_html($section_title); ?></h2>
    <?php endif; ?>

    <?php if (!empty($type_filters) || !empty($day_filters)) : ?>
      <div class="filters-wrapper">
        <div class="filters-controls">
          <button class="filter-reset-btn" type="button">Скинути фільтри</button>
          <div class="active-filters">
            <span class="active-filters-label">Активні фільтри:</span>
            <div class="active-filters-list"></div>
          </div>
        </div>

        <?php if (!empty($type_filters)) : ?>
          <div class="filters-section">

            <div class="filters-list type-filters" data-filter-group="type">
              <?php foreach ($type_filters as $filter) : ?>
                <button class="filter-btn" data-filter-type="<?php echo esc_attr($filter['value']); ?>">
                  <?php echo esc_html($filter['label']); ?>
                </button>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php if (!empty($day_filters)) : ?>
          <div class="filters-section">

            <div class="filters-list day-filters" data-filter-group="day">
              <?php foreach ($day_filters as $filter) : ?>
                <button class="filter-btn" data-filter-day="<?php echo esc_attr($filter['value']); ?>">
                  <?php echo esc_html($filter['label']); ?>
                </button>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

      </div>
    <?php else : ?>
      <p class="no-filters-message">Наразі фільтри не додано.</p>
    <?php endif; ?>

  </div>
</div>
