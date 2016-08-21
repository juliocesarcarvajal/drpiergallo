<?php /* Wrapper Name: Header */ ?>

<div class="header_block_1">

	<div class="left_side">
		<div class="header_widget_1" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-1">
			<?php dynamic_sidebar("header-sidebar-1"); ?>
		</div>
	</div>
	
	<div class="right_side">
		<!-- Social Links -->
		<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
			<?php get_template_part("static/static-social-networks"); ?>
		</div>
		<!-- /Social Links -->
		
		<div class="header_widget_2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-2">
			<?php dynamic_sidebar("header-sidebar-2"); ?>
		</div>
	</div>
	
	<div class="clear"></div>
</div>

<div class="header_block_2">

	<?php get_template_part("static/static-logo"); ?>
	<div class="top_search hidden-phone" data-motopress-type="static" data-motopress-static-file="static/static-search.php">
		<?php get_template_part("static/static-search"); ?>
	</div>
	<?php get_template_part("static/static-nav"); ?>

	<div class="clear"></div>
</div>