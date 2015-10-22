<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php wp_title('&raquo;','true','right'); ?></title>

  	<script>
		// Place Google Analytics code here - note that any <noscript> iframes
		// will break <head>, so include it after <body> if you need that snippet

		// Set up site configuration
		window.config = window.config || {};

		// The base URL for the WordPress theme
		window.config.baseUrl = "<?php echo get_bloginfo('url'); ?>";

		// Empty default Gravity Forms spinner function
		var gformInitSpinner = function() {};
	</script>

	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<?php
		// Make sure you go through this file and remove what you aren't using
		include( get_stylesheet_directory() . '/functions/site/theme-meta.php' );
	?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="container">
		<div class="header-logo">
			<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/suttonoutdoor_logo.png" alt="<?php bloginfo('description'); ?>"></a>
			<button class="nav-button"><span></span></button>
		</div>

		<?php

		$header_nav = array(
			'theme_location'  => 'header',
			'menu'            => '',
			'menu_class'      => 'header-navigation',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu( $header_nav );

		?>

		<div class="header-phone">
			<a href="tel:+8166593249">816-659-3249</a>
		</div>
	</div>
</header>