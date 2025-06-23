<?php
$cards = $attributes['cards'] ?? [];
?>

<div class="lazyblock-personalities-card">
  <div class="personalities-card-container">
    <?php if (!empty($cards) && is_array($cards)) : ?>
      <?php foreach ($cards as $card) : ?>
        <?php
        $photo = $card['photo']['url'] ?? '';
        $name = $card['name'] ?? '';
        $role = $card['role'] ?? '';
        ?>
        <div class="personalities-card">
          <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" />
          <h3><?php echo esc_html($name); ?></h3>
          <p><?php echo esc_html($role); ?></p>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>  