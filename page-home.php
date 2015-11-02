<?php
/* Template Name: Home Page */
?>

<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- Top - 5 courses -->
		<section class="section no-padding section__home__courses">
			<?php // WP_Query arguments
			$args = array (
				'post_type'          => 'course',
				'posts_per_page'         => '5',
			);

			// The Query
			$course_query = new WP_Query( $args ); ?>

			<?php if ( $course_query->have_posts() ) { ?>
			<?php $course = 1; ?>
				<?php while ( $course_query->have_posts() ) { ?>
					<?php $course_query->the_post(); ?>

					<!-- FEATURED course -->
					<?php if($course == 1): ?>
						<div class="courses--featured">
							<div class="container">
								<?php the_title(); ?>
							</div>
						</div>
					<?php endif; ?>

					<!-- 4 other courses -->
					<?php if($course == 2): ?>
					<div class="courses section--red stripes">
						<div class="container">
							<ul>
					<?php endif; ?>

					<?php if($course >= 2 ): ?>
						<li><?php the_title(); ?></li>
					<?php endif; ?>

					<?php if($course == 5 ): ?>
							</ul>
						</div>
					</div>
					<?php endif; ?>
				<?php $course++; ?>
				<?php	}
			} else { ?>
				// no posts found
			<?php }

			// Restore original Post Data
			wp_reset_postdata(); ?>
			<div class="container">

			</div>


		</section>

		<!-- Fitness Training -->
		<section class="section section__home__fitness">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display color-red">Sweat it out!</h2>
					<p>Dreaming of that body shape? Achieve your fitness goal by joining our Fitness Training!</p>
				</div>

				<div class="row row-flex">
					<?php // WP_Query arguments
					$args = array (
						'post_type'          => 'fitness',
						'posts_per_page'         => '2',
					);

					// The Query
					$fitness_query = new WP_Query( $args );

					// The Loop
					if ( $fitness_query->have_posts() ) {
						while ( $fitness_query->have_posts() ) {
							$fitness_query->the_post(); ?>
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
					<?php	}
					} else { ?>
						// no posts found
					<?php }

					// Restore original Post Data
					wp_reset_postdata(); ?>
				</div>

			</div>
		</section>


		<!-- Testimonial -->
		<?php // WP_Query arguments
		$args = array (
			'post_type'          => 'testimonial',
			'posts_per_page'         => '3',
		);

		// The Query
		$testimonial_query = new WP_Query( $args );

		// The Loop
		if ( $testimonial_query->have_posts() ) { ?>
			<section class="section section__home__testimonial">
				<div class="container">
					<div class="section__header">
						<h2 class="section-title section-title--display">Clients <span class="color-red">say:</span></h2>
					</div>
					<ul class="testimonial">

					<?php while ( $testimonial_query->have_posts() ) {
						$testimonial_query->the_post(); ?>
						<li><?php the_content(); ?></li>
					<?php	} //end while ?>
					</ul>
				</div>
			</section>
		<?php } else { ?>
		<?php }

		// Restore original Post Data
		wp_reset_postdata(); ?>


		<!-- Why PFC -->
		<section class="section section__home__why">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">What makes us <span class="color-red">different</span></h2>
					<?php if (have_rows('why_pfc')): ?>
					<?php $count = 1; ?>
					<ul class="why">
						<?php while (have_rows('why_pfc')) : the_row(); ?>
						<li class="why-<?php $count ?>;">
							<i class="why__icon"></i>
							<h5><?php the_sub_field('title'); ?></h5>
							<p><?php the_sub_field('description'); ?></p>
						</li>
						<?php $count++; ?>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<!-- PFC Shop -->
		<section class="section section__home__shop">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">PFC <span class="color-red">Shop</span></h2>
					<p>Here are some of our latest products from our online store!</p>
				</div>
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
