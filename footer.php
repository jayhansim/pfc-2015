				<section id="partner" class="partner">
					<div class="container">
						<div class="row">
							<div class="grid">

								<?php // WP_Query arguments
								$args = array (

									'post_type'          => 'partner',
									'posts_per_page'         => '-1',
								);

								// The Query
								$wp_query = new WP_Query( $args );

								// The Loop
								if ( $wp_query->have_posts() ) {
									while ( $wp_query->have_posts() ) {
										$wp_query->the_post(); ?>
										<div class="partner__logo">
											<?php if(the_field('link')): ?>
												<a href="<?php the_field('link'); ?>">
													<img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" width="<?php the_field('width'); ?>">
												</a>
											<?php else: ?>
												<img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" width="<?php the_field('width'); ?>">
											<?php endif; ?>
										</div>
								<?php	}
								} else { ?>
									// no posts found
								<?php }

								// Restore original Post Data
								wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</section>

			</main>

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="grid-footer-top">
								<?php dynamic_sidebar('footer-widget-1'); ?>
							</div>
							<div class="grid-footer-top">
								<?php dynamic_sidebar('footer-widget-2'); ?>
							</div>
							<div class="grid-footer-top">
								<?php dynamic_sidebar('footer-widget-3'); ?>
							</div>
							<div class="grid-footer-top">
								<?php dynamic_sidebar('footer-widget-4'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="grid-footer-bottom grid-footer-bottom--logo">
								<a href="/" class="footer__logo">
									<img src="<?php echo get_template_directory_uri() . '/img/footer-pfc-logo.png' ?>" alt="PFC" width="150">
								</a>
							</div>
							<div class="grid-footer-bottom grid-footer-bottom--copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
							</div>

						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
