<?php
/* Template Name: Page One Column */
?>

<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if(is_cart() || is_checkout() || is_account_page()) : ?>
			<section class="section__page-title section__page-title--woocommerce section--red" >
		<?php else: ?>
			<section class="section__page-title section__page-title--page">
		<?php endif; ?>
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<!-- <div class="post-meta">
				<span>
					<i class="icon icon-date"></i><?php the_time('F j, Y'); ?>
				</span>
			</div> -->
		</div>
	</section>

	<?php if( is_woocommerce() || is_cart() || is_checkout() || is_account_page()) : ?>
		<div class="woo__breadcrumb">
			<div class="container">
				<?php do_action('woo_custom_breadcrumb'); ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="content__main full">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
						<div class="post__body">
							<?php the_content(); ?>
							<?php edit_post_link(); ?>
						</div>

					</article>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
	<?php else: ?>

		<article <?php post_class('post'); ?>>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
