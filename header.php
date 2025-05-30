<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="logo-wrapper">
                    <?php echo do_shortcode('[lzb-logo-theatre]'); ?>
                </div>
                <nav class="main-navigation">
                    <ul class="nav-menu">
                        <li><a href="/">Головна</a></li>
                        <li><a href="/about">Про нас</a></li>
                        <li><a href="/contact">Контакти</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>
	