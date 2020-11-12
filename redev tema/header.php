<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package reDev
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'reDev' ); ?></a>
	<div class="header-filler">

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header-inner">
					<?php
					if (has_custom_logo()):
						'<a href="'.esc_url( home_url( "/" ) ).'" class="header-logo">'.the_custom_logo().'</a>';
					else:
						echo '<a href="'.esc_url( home_url( "/" ) ).'" class="header-logo"><h1>'.get_bloginfo( 'name' ).'</h1></a>';
					endif;
					$developr_description = get_bloginfo( 'description', 'display' );?>
				<div class="header-menu">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					<ul class="header-socials">
						<li> <a href="http://<?php echo get_theme_mod('reDev-facebook')?>"><i class="fab fa-facebook-f"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-twitter')?>"><i class="fab fa-twitter"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-instagram')?>"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="mobile-menu-ham" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
			</div>
			<div class="mobile-menu-shell">
				<nav id="site-navigation" class="mobile-navigation">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
				<ul class="header-socials" id="header-socials-mobile">
						<li> <a href="http://<?php echo get_theme_mod('reDev-facebook')?>"><i class="fab fa-facebook-f"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-twitter')?>"><i class="fab fa-twitter"></i></a></li>
						<li> <a href="http://<?php echo get_theme_mod('reDev-instagram')?>"><i class="fab fa-instagram"></i></a></li>
				</ul>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div>
	</header><!-- #masthead -->
