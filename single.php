<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- Page Title bar -->
		<section class="section__page-title section__page-title--single">
			<div class="container">

				<a href="/" class="btn btn-red btn--latest-news">Latest News</a>

				<h1 class="page-title"><?php the_title(); ?></h1>
				<!-- post details -->
				<div class="post-meta">
					<span>
						<i class="icon icon-date"></i><?php the_time('F j, Y'); ?>
					</span>
					<span>
						<i class="icon icon-category"></i><?php the_category(', '); ?>
					</span>
				</div>
			</div>
		</section>

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="content__main">

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="post__body">
								<?php the_content(); // Dynamic Content ?>

								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
							</div>

						</article>

						<?php comments_template(); ?>

					</div>

					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>

		<?php endwhile; ?>
		<?php else: ?>

			<article <?php post_class(); ?>>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
