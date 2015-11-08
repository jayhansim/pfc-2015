<?php get_header(); ?>

	<!-- Page Title bar -->
	<section class="section__page-title section--red">
		<div class="container">
			<h1 class="page-title">PFC Trainers</h1>
		</div>
	</section>

	<!-- section -->
	<div class="content">

		<div class="container">
			<p>Here are the PFC professional trainers:</p>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div>
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="post__trainer__image">
								<img class="trainer__image" src="<?php the_field('profile_image'); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="post__body">

								<h2 class="post-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
								<?php the_content(); ?>

								<?php if(get_field('trainer_email')) : ?>
									<a href="mailto:<?php the_field('trainer_email'); ?>" class="btn btn-red">
										Contact <?php the_title(); ?>
									</a>
								<?php endif; ?>
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

				<?php get_template_part('pagination'); ?>


		</div>

	</div>

<?php get_footer(); ?>
