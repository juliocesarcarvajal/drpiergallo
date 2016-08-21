<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>
	
		<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a> <?php bloginfo('description'); ?> &copy; <?php echo date ('Y'); ?> <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php _e("All rights reserved", CURRENT_THEME); ?>.</a>
	
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		More <a rel="nofollow" href="http://www.templatemonster.com/category/dentistry-wordpress-themes/" target="_blank">Dentistry WordPress Themes at TemplateMonster.com</a>
	<?php } ?>
</div>