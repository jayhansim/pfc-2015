<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post__header">
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- post details -->
			<div class="post-meta">
				<span>
					<i class="icon icon-date"></i><?php the_time('F j, Y'); ?>
				</span>
				<span>
					<i class="icon icon-category"></i><?php the_category(', '); ?>
				</span>
			</div>

			<!-- /post details -->
		</div>
		<div class="post__body">
			<?php the_content('Continue reading >>'); // Build your custom callback length in functions.php ?>
			<?php edit_post_link(); ?>
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
