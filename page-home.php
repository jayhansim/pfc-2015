<?php
/* Template Name: Home Page */
?>

<?php get_header(); ?>

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
					<div class="home__course--featured section" style="background-image:url(<?php the_field('header_background'); ?>)">
						<div class="container">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<p>Be a certified personal trainer</p>
							<a href="<?php the_permalink(); ?>" class="btn btn-xlg">Book now >></a>
						</div>
					</div>
				<?php endif; ?>

				<!-- 4 other courses -->
				<?php if($course == 2): ?>
				<div class="home__course section section--red stripes text-center">
					<div class="container">
						<h3 class="h2">More exciting courses at <PFC!></PFC!></h3>
						<ul>
				<?php endif; ?>

				<?php if($course >= 2 ): ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" <?php post_class(); ?> style="background-image:url(<?php the_field('header_background'); ?>)">
							<div class="post__image">
								<div class="sr-only"><?php the_title(); ?></div>
							</div>
							<span>
								Book now >>
							</span>
						</a>
					</li>
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
								<div class="post__body text-center">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<i class="icon__fitness"></i>
									</a>
									<h3 class="post-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h3>
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
		<section class="section section--lg section__home__testimonial">
			<div class="container">
				<div class="section__header">
					<h2 class="section-title section-title--display">What our <span class="color-red">clients say</span></h2>
				</div>
				<ul class="testimonials">

				<?php while ( $testimonial_query->have_posts() ) {
					$testimonial_query->the_post(); ?>
					<li class="testimonial">
						<img src="<?php the_field('customer_image'); ?>" class="testimonial__portrait" alt="">
						<div class="testimonial__content">
							<?php the_content(); ?>

							<div class="testimonial__testimonee">
								<h6><?php the_field('customer_name'); ?></h6>
								<span class="testimonee__course"><?php the_field('course_involved'); ?></span>
							</div>
						</div>

					</li>
				<?php	} //end while ?>
				</ul>
			</div>
		</section>
	<?php } else { ?>
	<?php }

	// Restore original Post Data
	wp_reset_postdata(); ?>



	<!-- Why PFC -->
	<section class="section section--lg section__home__why">
		<div class="container">
			<div class="section__header">
				<h2 class="section-title section-title--display">What makes us <span class="color-red">different</span></h2>
			</div>
			<?php if (have_rows('why_pfc')): ?>
				<?php $count = 1; ?>
				<ul class="why">
					<?php while (have_rows('why_pfc')) : the_row(); ?>
					<li class="why-<?php $count ?>;">
						<i class="why__icon"></i>
						<h4 class="color-red"><?php the_sub_field('title'); ?></h4>
						<p><?php the_sub_field('description'); ?></p>
					</li>
					<?php $count++; ?>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
		</div>
	</section>

	<!-- PFC Shop -->
	<section class="section section__home__shop">
		<div class="container">
			<div class="section__header">
				<h2 class="section-title section-title--display">PFC <span class="color-red">Shop</span></h2>
				<p>Here are some of our latest products from our <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">online store!</a></p>
			</div>
			<?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>
		</div>
	</section>

	<?php endwhile; ?>
	<?php else: ?>

		<article <?php post_class('post'); ?>>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
