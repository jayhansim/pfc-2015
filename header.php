<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header" role="banner">

				<div class="container">

					<!-- logo -->
					<div class="header__logo">
						<a href="<?php echo home_url(); ?>"></a>
					</div>

					<nav class="nav__mobile">
						<?php global $woocommerce; ?>
						<?php $cart_url = $woocommerce->cart->get_cart_url(); ?>
						<ul>
							<li>
								<a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="nav__mobile__shop"><i></i>Shop</a>
							</li>
							<li>
								<a href="<?php echo $cart_url; ?>" class="nav__mobile__cart"><i></i>Cart</a>
							</li>
							<li>
								<a href="#" id="nav-toggler" class="nav__mobile__menu">
									<i>
										<b></b>
										<b></b>
										<b></b>
									</i>

									Menu
								</a>
							</li>
						</ul>
					</nav>

					<a href="#" id="nav__mobile" class="nav__mobile">
						<i class="nav__mobile__1"></i>
						<i class="nav__mobile__2"></i>
						<i class="nav__mobile__3"></i>
					</a>

					<nav id="nav" class="nav" role="navigation">

						<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
					</nav>
				</div>



			</header>
			<!-- /header -->

			<main role="main">

				<?php if(is_woocommerce()) : ?>
					<!-- Page Title bar -->
					<section class="section__page-title section__page-title--woocommerce section--red">
						<div class="container">
							<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
								<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
							<?php endif; ?>
							<!-- <h1 class="page-title">PFC Shop</h1> -->
							<div class="woo__header__search">
								<?php dynamic_sidebar('woocommerce-header'); ?>
							</div>
						</div>
					</section>

					<div class="woo__breadcrumb">
						<div class="container">
							<?php do_action('woo_custom_breadcrumb'); ?>
						</div>
					</div>
				<?php endif; ?>


