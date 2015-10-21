<?php get_header(); ?>

	<main role="main">

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="content__main full text-center">
						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
						</h2>
					</div>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
