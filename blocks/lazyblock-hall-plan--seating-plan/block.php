<?php

/**
 * LazyBlock: lazyblock-hall-plan--seating-plan
 * Description: Custom block for seating-plan inside hall-plan.
 */


$title = $attributes['title'] ?? '';
$plan_img = $attributes['plan-img']['url'] ?? '';

?>
<div class="lazyblock-hall-plan--seating-plan white-section" id="hall-plan--seating-plan">
<div class="seating-plan-container container-wrapper">
    <div class="seating-plan-content">
        <h2 class="section-name"><?php echo esc_html($title); ?></h2>
        <div class="seating-plan-img">
            <img src="<?php echo esc_url($plan_img); ?>" alt=" />
        </div>
    </div>
</div>
</div>
