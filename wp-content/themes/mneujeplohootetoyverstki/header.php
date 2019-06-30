<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mneujeplohootetoyverstki
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
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<span class="logo_text">
				<span><?php the_custom_logo();?></span>
				<span class="site-title"><?php bloginfo( 'name' ); ?></span>
			</span>
			<span class="contacts">
				<a class="contacts-item" href="https://github.com/zer0b2"><img src="wp-content/themes/mneujeplohootetoyverstki/img/github-logo-icon.png" class="headIcon"  alt="github"></a>
				<a class="contacts-item" href="https://vk.com/zer0b2"><img src="wp-content/themes/mneujeplohootetoyverstki/img/vk-logo.png" class="headIcon" alt="vk"></a> 
			</span>				
		</div>
		<!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		
