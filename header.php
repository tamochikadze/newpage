<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

		<header id="masthead" class="site-header portfolio-header">
								<div class="container">
									<div class="header-content">
									<div class="site-branding">
								<nav id="site-navigation" class="main-navigation portfolio-navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'portfolio' ); ?></button>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class'     => 'header_menu'
										)
									);
									?>
								</div>							
							</nav><!-- #site-navigation -->
							<div class="hamburger-menu">
								<input type="checkbox" id="menu">
								<label for="menu">
								<span class="hambureg-menu-icon">&#9776;</span>	
								</label>
								<div class="sidebar-nav">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu-mobile',
											'menu_class'     => 'header_menu'
										)
									);
									?>
									
								</div>
								
							</div>

									</div>
	
	</header><!-- #masthead -->
