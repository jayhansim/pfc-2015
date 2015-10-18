<?php
/* Template Name: About PFC */
?>

<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section class="section__page-header section__page-header--about">
			<div class="container">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php edit_post_link(); ?>
			</div>
		</section>

		<section class="section__about__courses">
			<div class="container">
				<div class="about__courses">

					<!-- PFC Courses -->
					<h3 class="h2">PFC Courses</h3>
					<p>We provide professional courses as below:</p>
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
					<h3 class="h2">Fitness Training</h3>
					<p>Join the fun and achieve your fitness goal by individual or group training: </p>
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

		<section class="section__about__trainers section--red stripes">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">PFC Trainers</h2>
					<p>We have a group of professional trainers that are passionate and friendly.</p>
				</div>
				<ul class="trainers">
					<?php // WP_Query arguments
					$args = array (
						'post_type'          => 'trainer',
						'posts_per_page'         => '-1',
					);

					// The Query
					$trainer_query = new WP_Query( $args );

					// The Loop
					if ( $trainer_query->have_posts() ) {
						while ( $trainer_query->have_posts() ) {
							$trainer_query->the_post(); ?>
							<li class="trainer">
								<img src="<?php the_field('profile_image'); ?>" alt="<?php the_title(); ?>" class="trainer__image">
								<h5 class="trainer__name"><?php the_title(); ?></h5>
								<?php the_field('profile_summary'); ?>
							</li>
					<?php	}
					} else { ?>
						// no posts found
					<?php }

					// Restore original Post Data
					wp_reset_postdata(); ?>
				</ul>

			</div>
		</section>

		<section class="section__about__studio">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">Our <span class="color-red">Studio</span></h2>
					<p>Our studio in Plaza Damas is at the vibrant location, just next to Hartamas Shopping Centre and is equipped with state of the art facilities. Come and visit us to have a look yourself.</p>
					<p>
						<b>Full Address:</b><br>
						G-3-8 Plaza Damas, Jalan Sri Hartamas 1, Sri Hartamas, 50480 KL
					</p>
				</div>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.735577424339!2d101.65545475092507!3d3.164215053929505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc48f6e2a01c41%3A0xcdcec5e90f0e45f8!2sPFC+Studio!5e0!3m2!1sen!2smy!4v1445149386169" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
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
