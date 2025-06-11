<?php

$filters = $attributes['filters'] ?? [];
?>

<div class="lazyblock-personalities--filters personalities--filters white-section" id="personalities--filters">
  <div class="filters-container container-wrapper">
    <?php if (!empty($section_title)) : ?>
      <h2 class="filters-section-title"><?php echo esc_html($section_title); ?></h2>
    <?php endif; ?>

    <?php if (!empty($filters)) : ?>
      <div class="filters-wrapper">
        <div class="filters-controls">
          <button class="filter-reset-btn" type="button">Скинути фільтр</button>
        </div>

        <div class="filters-section">
          <div class="filters-list">
            <?php foreach ($filters as $filter) : ?>
              <label class="filter-radio-label">
                <input 
                  type="radio" 
                  name="personality-filter" 
                  class="filter-radio" 
                  value="<?php echo esc_attr($filter['value']); ?>"
                >
                <span class="filter-radio-text"><?php echo esc_html($filter['label']); ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php else : ?>
      <p class="no-filters-message">Наразі фільтри не додано.</p>
    <?php endif; ?>
  </div>
</div>

<style>
.personalities--filters {
  padding: 20px 0;
}

.filters-wrapper {
  margin-top: 20px;
}

.filters-controls {
  margin-bottom: 15px;
}

.filter-reset-btn {
  padding: 8px 16px;
  background: #f0f0f0;
  border: 1px solid #ddd;
  border-radius: 4px;
  cursor: pointer;
}

.filter-reset-btn:hover {
  background: #e0e0e0;
}

.filters-list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.filter-radio-label {
  display: inline-flex;
  align-items: center;
  padding: 8px 16px;
  background: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.2s;
}

.filter-radio-label:hover {
  background: #f0f0f0;
}

.filter-radio {
  display: none;
}

.filter-radio:checked + .filter-radio-text {
  color: #007bff;
  font-weight: 500;
}

.filter-radio:checked ~ .filter-radio-label {
  background: #e3f2fd;
  border-color: #007bff;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterRadios = document.querySelectorAll('.filter-radio');
  const resetBtn = document.querySelector('.filter-reset-btn');

  // Обробка зміни фільтра
  filterRadios.forEach(radio => {
    radio.addEventListener('change', function() {
      const selectedValue = this.value;
      // Тут додайте вашу логіку фільтрації
      console.log('Selected filter:', selectedValue);
    });
  });

  // Скидання фільтра
  resetBtn.addEventListener('click', function() {
    filterRadios.forEach(radio => {
      radio.checked = false;
    });
    // Тут додайте логіку скидання фільтрації
    console.log('Filters reset');
  });
});
</script>

