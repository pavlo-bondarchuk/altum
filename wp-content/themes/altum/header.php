<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package altum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="layout">
    <header class="header">
        <div class="inner">
            <div class="left">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<?php
											$custom_logo_id = get_theme_mod( 'custom_logo' );
											$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

											if ( has_custom_logo() ) {
												echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
											} else {
												echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
											}
											?>
                    </a>
                </div>
							<?php
							wp_nav_menu(
									array(
											'menu'         => 'Header',
											'container'       => 'nav',
											'container_class' => 'links',
											'container_id'    => '',
											'menu_class'      => '',
											'menu_id'         => false,
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '%3$s',
											'depth'           => 1,
											'walker'          => new Custom_Walker_Nav_Menu()
									)
							);
							?>
            </div>
            <div class="right">
                <a href="#" class="btn btn_light">Register</a>
                <ul class="lang_switcher">
                  <?php
                  if ( function_exists('pll_the_languages') ) {
						pll_the_languages();
                  }
                  ?>
                </ul>
            </div>
            <button class="menu-toggle hamburger hamburger--slider" type="button" aria-controls="primary-menu"
                    aria-expanded="false">
					<span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					</span>
            </button>
        </div>
    </header>
