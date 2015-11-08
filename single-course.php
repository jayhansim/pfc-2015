<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section class="section section__page-header section__page-header--deco" style="background-image: url(<?php the_field('header_background'); ?>)">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<p class="lead"><?php the_field('lead_introduction'); ?></p>
			<?php the_field('extra_introduction'); ?>
			<div class="header__cta">
				<a href="#form" class="btn btn-red btn-lg">I'm interested >></a>
			</div>
		</div>

	</section>

	<section class="section section__content section__content--fitness">
		<div class="container">
			<div class="section__content--main">
				<?php the_content(); // Dynamic Content ?>
				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			</div>

			<!-- Gallery -->
			<?php if(have_rows('gallery')) : ?>

			<span class="gallery-title">Gallery</span>
			<div class="section__content--gallery">

				<?php while(have_rows('gallery')) : the_row(); ?>
					<?php
						$image = get_sub_field('image');
						$size = 'square';
						$thumb = $image['sizes'][ $size ];
					?>
					<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" class="gallery-image">
				<?php endwhile; ?>

			</div>
			<?php else : ?>
			<?php endif; ?>

		</div>
	</section>

	<section class="section section__cta" id="form">
		<div class="container">
			<div class="section__header">
				<h2 class="section-title section-title--display">Upcoming <span class="color-red">Course</span></h2>
				<?php if(have_rows('upcoming_course')): ?>
					<p>Here is the upcoming <?php the_title(); ?> Course</p>
				<?php else : ?>
					<h5>Sorry, currently we have no upcoming course available.</h5>
					<p>Do follow us on <a href="https://www.facebook.com/PFC.Malaysia/" target="_blank">Facebook</a> to get latest update on upcoming course!</p>
				<?php endif; ?>
			</div>

			<div class="section__body">
				<?php if(have_rows('upcoming_course')): ?>
				<?php while(have_rows('upcoming_course')) : the_row(); ?>
					<?php
						$c_image = get_sub_field('course_image');
						$c_title = get_sub_field('course_title');
						$c_description = get_sub_field('course_description');
						$c_date = get_sub_field('course_date');
						$c_time = get_sub_field('course_time');
						$c_language = get_sub_field('course_language');
						$c_location = get_sub_field('course_location');
						$c_fee = get_sub_field('course_fee');
						$c_shop = get_sub_field('course_shop');
					?>
					<div class="upcoming">
						<div class="upcoming__image">
							<a href="<?php echo $c_shop; ?>">
								<img src="<?php echo $c_image; ?>" alt="<?php echo $c_title; ?>">
							</a>
						</div>
						<div class="upcoming__content">
							<h3>
								<a href="<?php echo $c_shop; ?>">
									<?php echo $c_title; ?>
								</a>
							</h3>
							<?php echo $c_description; ?>
							<ul class="upcoming__details">
								<li><strong>Course date:</strong> <?php echo $c_date; ?></li>
								<li><strong>Time:</strong> <?php echo $c_time; ?></li>
								<li><strong>Language:</strong> <?php echo $c_language; ?></li>
								<li><strong>Location:</strong> <?php echo $c_location; ?></li>
							</ul>

						</div>
						<div class="upcoming__cta">
							<h4 class="upcoming__fee">RM<?php echo $c_fee; ?></h4>
							<a href="<?php echo $c_shop; ?>" class="btn btn-red">Book Now >></a>
						</div>

					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>


			<!-- <div class="section__cta__form">
				<?php the_field('register'); ?>
			</div> -->

		</div>

	</section>

	<?php endwhile; ?>
	<?php else: ?>

		<article <?php post_class(); ?>>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>
