<?php get_header(); ?>

	<main role="main">

		<!-- Page Title bar -->
		<section class="section__page-title">
			<div class="container">
				<h1 class="page-title"><?php _e( 'Latest News', 'html5blank' ); ?></h1>
			</div>
		</section>

		<!-- section -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="content__main">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>

					<?php get_sidebar(); ?>
				</div>


			</div>

		</div>

	</main>



<?php get_footer(); ?>
