<!doctype html>
<html class="no-js" id="yogurteria-theme" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogurteria | <?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/slick-1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/slick-1.8.1/slick/slick-theme.css" />
	
	
</head>
  <?php wp_head(); ?> 

  <body <?php body_class( 'my-class' ); ?>>

  <header class="desktop-header show-for-large">
		<div class="grid-container">
			<nav>
				<div class="grid-x align-center text-center align-middle">
					<div class="cell shrink">
						<div class="logo">
							<a href="<?php echo site_url() ?>">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-yogurteria.png" alt="">
							</a>
						</div>	
					</div>
					<div class="cell shrink">
						<menu>	
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</menu>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<header class="mobile-header hide-for-large">
		<div class="grid-container">
			<div class="mini-header">
				<div class="logo">
					<a href="<?php echo site_url() ?>">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-yogurteria.png" alt="">
					</a>
				</div>	
				<div id="burger-menu" class="burger-menu">
					<div class="line line1"></div>
					<div class="line line2"></div>
					<div class="line line3"></div>
				</div>
			</div>
			<nav id="mobile-menu">
				<menu>
					<div class="logo">
						<a href="<?php echo site_url() ?>">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-yogurteria.png" alt="">
						</a>
					</div>	
					<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
				</menu>
			</nav>
		</div>
	</header>
