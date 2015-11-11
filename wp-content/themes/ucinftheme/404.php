<?php get_header()?>
<?php $bgd = wp_get_attachment_image_src( get_field('default_background' , 'options') , 'full')?>

<div class="areas">
	<div class="title">
    	El sentido de <strong>descubrir</strong>
    </div>
    <div class="clear hidden-md hidden-lg"></div>
	<div class="rombo" id="area-<?php echo $area->ID?>">
		<span class="text">404</span>
	</div>
</div>
<?php get_footer()?>