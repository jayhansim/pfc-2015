<?php get_header(); ?>

	<!-- Page Title bar -->
	<section class="section__page-title section--red">
		<div class="container">
			<h1 class="page-title">PFC Courses</h1>
		</div>
	</section>

	<!-- section -->
	<div class="content">

		<div class="container">
			<p>Below are the available professional courses in PFC:</p>

				<div class="row row-flex">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="flex-6-12 flex-mobile">
							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>" class="post__image" style="background-image: url(<?php the_field('header_background') ?>);">
								</a>
								<div class="post__body text-center">
									<h2 class="post-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h2>
									<p><?php the_field('lead_introduction'); ?></p>
									<div class="post__cta">
										<a href="<?php the_permalink(); ?>" class="btn btn-white btn-white--hover-red">More Info >></a>
									</div>
								</div>

							</article>
							<!-- /article -->
						</div>



					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>



					<?php get_template_part('pagination'); ?>


		</div>

	</div>



<?php get_footer(); ?>
