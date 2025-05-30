<?php
/**
 * Main header template part
 */
?>

<header class="main-header">
    <div class="container">
        <div class="header-content">
            <div class="logo-wrapper">
                <?php echo do_shortcode('[lzb-logo-theatre]'); ?>
            </div>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu',
                    'container' => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</header> 