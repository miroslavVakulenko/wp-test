<?php

/**
 * LazyBlock: lazyblock-hall-plan--seating-plan
 * Description: Custom block for seating-plan inside hall-plan.
 */


$button_text = $attributes['button-text'] ?? '';
$button_link = $attributes['button-link'] ?? '';

?>
<div class="lazyblock-hall-plan--seating-plan white-section" id="hall-plan--seating-plan">
<div class="seating-plan-container container-wrapper">  
    <a href="<?php echo esc_url($button_link); ?>" class="btn"><?php echo esc_html($button_text); ?></a>
</div>
</div>
