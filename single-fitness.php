<?php get_header(); ?>

	<main role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<section class="section section__page-header section__page-header--deco" style="background: url(<?php the_field('header_background'); ?>)">
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
					<h2 class="section-title section-title--display">Register Your <span class="color-red">Interest</span></h2>
					<p><?php the_field('register_text'); ?></p>
				</div>
				<div class="section__cta__form">
					<?php the_field('register'); ?>
				</div>

			</div>

		</section>

		<?php endwhile; ?>
		<?php else: ?>

			<article <?php post_class(); ?>>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
