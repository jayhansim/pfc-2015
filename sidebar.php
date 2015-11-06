<!-- sidebar -->
<aside class="content__side" role="complementary">

	<?php //get_template_part('searchform'); ?>

	<?php if(!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) : ?>
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	<?php else: ?>
		<?php dynamic_sidebar('woocommerce-sidebar'); ?>
	<?php endif ?>

</aside>
<!-- /sidebar -->
