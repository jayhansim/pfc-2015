<?php get_header(); ?>

	<!-- Page Title bar -->
	<section class="section__page-title">
		<div class="container">

			<h1 class="page-title">
				<?php $page = get_query_var('paged'); ?>
				<?php if(is_category()) : ?>
					<?php single_cat_title(); ?>
				<?php elseif(is_tag()) : ?>
					Tag archives: <?php single_tag_title(); ?>
				<?php elseif(is_month()) : ?>
					Archives for <?php single_month_title(' '); ?>
				<?php endif; ?>
				<?php if($page != 0): ?>
					<span class="page-number">Page <?php echo $page; ?></span>
				<?php endif; ?>
			</h1>

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


<?php get_footer(); ?>
