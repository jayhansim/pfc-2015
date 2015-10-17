<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<section class="section__page-title section__page-title--page">
			<div class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<div class="post-meta">
					<span>
						<i class="icon icon-date"></i><?php the_time('F j, Y'); ?>
					</span>
				</div>
			</div>
		</section>

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="content__main">
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
							<div class="post__body">
								<?php the_content(); ?>
								<?php edit_post_link(); ?>
							</div>

						</article>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		<?php else: ?>

			<article <?php post_class('post'); ?>>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
