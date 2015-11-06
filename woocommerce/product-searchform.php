<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<!-- <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label> -->
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
	<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>">
		<svg width="16" height="16" viewBox="0 0 16 16" xmls="http://www.w3.org/2000/svg">
		  <g>
		    <path d="M9.477 10.89C8.497 11.59 7.297 12 6 12c-3.314 0-6-2.686-6-6s2.686-6 6-6 6 2.686 6 6c0 1.296-.41 2.495-1.11 3.476l4.795 4.787c.39.39.39 1.024 0 1.414-.39.39-1.024.39-1.414 0L9.478 10.89zM6 10c2.21 0 4-1.79 4-4S8.21 2 6 2 2 3.79 2 6s1.79 4 4 4z"></path>
		  </g>
		</svg>
	</button>
	<input type="hidden" name="post_type" value="product" />
</form>
