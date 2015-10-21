<?php
/* Template Name: About PFC */
?>

<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section class="section section__page-header section__page-header--about">
			<div class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php edit_post_link(); ?>
			</div>
		</section>

		<section class="section section__about__courses">
			<div class="container">
				<div class="about__courses">

					<!-- PFC Courses -->
					<?php the_field('our_courses'); ?>
					<ul>
						<?php // WP_Query arguments
						$args = array (
							'post_type'          => 'course',
							'posts_per_page'         => '-1',
						);

						// The Query
						$course_query = new WP_Query( $args );

						// The Loop
						if ( $course_query->have_posts() ) {
							while ( $course_query->have_posts() ) {
								$course_query->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php	}
						} else { ?>
							// no posts found
						<?php }

						// Restore original Post Data
						wp_reset_postdata(); ?>
					</ul>

					<!-- PFC Fitness Trainings -->
					<?php the_field('our_fitness_trainings'); ?>
					<ul>
						<?php // WP_Query arguments
						$args = array (
							'post_type'          => 'fitness',
							'posts_per_page'         => '-1',
						);

						// The Query
						$course_query = new WP_Query( $args );

						// The Loop
						if ( $course_query->have_posts() ) {
							while ( $course_query->have_posts() ) {
								$course_query->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php	}
						} else { ?>
							// no posts found
						<?php }

						// Restore original Post Data
						wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</section>

		<section class="section section__about__trainers section--red stripes">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">PFC Trainers</h2>
					<?php the_field('our_trainers'); ?>
				</div>
				<ul class="trainers">
					<?php // WP_Query arguments
					$args = array (
						'post_type'          => 'trainer',
						'posts_per_page'         => '3',
					);

					// The Query
					$trainer_query = new WP_Query( $args );

					// The Loop
					if ( $trainer_query->have_posts() ) {
						while ( $trainer_query->have_posts() ) {
							$trainer_query->the_post(); ?>
							<li class="trainer">
								<img src="<?php the_field('profile_image'); ?>" alt="<?php the_title(); ?>" class="trainer__image">
								<div class="trainer__profile">
									<h5 class="trainer__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<?php the_field('profile_summary'); ?>
								</div>
							</li>
					<?php	}
					} else { ?>
						// no posts found
					<?php }

					// Restore original Post Data
					wp_reset_postdata(); ?>
				</ul>
				<a class="btn btn-white" href="/trainer">View all</a>

			</div>
		</section>

		<section class="section section__about__studio">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">Our <span class="color-red">Studio</span></h2>
					<?php the_field('our_studio'); ?>
				</div>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.735577424339!2d101.65545475092507!3d3.164215053929505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc48f6e2a01c41%3A0xcdcec5e90f0e45f8!2sPFC+Studio!5e0!3m2!1sen!2smy!4v1445149386169" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
			</div>
		</section>

		<?php endwhile; ?>
		<?php else: ?>

			<article <?php post_class('post'); ?>>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
