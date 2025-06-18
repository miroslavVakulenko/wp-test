<?php
$cards = $attributes['cards']  ?? [];
$photo = $attributes['photo']['url'] ?? '';
$name = $attributes['name'] ?? '';
$role = $attributes['role'] ?? '';
?>


<div class="lazyblock-personalities-cards">
  <div class="personalities-cards-container">
    <div class="personalities-card">
      <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" />
      <h3><?php echo esc_html($name); ?></h3>
      <p><?php echo esc_html($role); ?></p>
    </div>
  </div>
</div>  