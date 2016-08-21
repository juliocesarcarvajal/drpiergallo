<?php /* Wrapper Name: Footer */ ?>

<div class="copyright">

	<div class="row">
		<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
			<?php get_template_part("static/static-footer-text"); ?>
		</div>
	</div>
		
	<div class="row">
		<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
			<?php get_template_part("static/static-footer-nav"); ?>
		</div>
	</div>
	
</div>

<?php if( is_front_page() ) { ?>
	<div data-motopress-type="static" data-motopress-static-file="static/static-map.php">
		<?php get_template_part("static/static-map"); ?>
	</div>
<?php } ?>