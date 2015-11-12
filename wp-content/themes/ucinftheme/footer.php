<footer class="bg-highemerald ">
	<div class="container">
    	<div class="row">

			
    		<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav col-lg-4 col-md-4 col-sm-6 row service ' , 'theme_location' => 'third' ) ); ?>
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav col-lg-4 col-md-4 col-sm-6 row service white-brd' , 'theme_location' => 'fourth' ) ); ?>

			<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 logo-footer">
    			<a href="<?php bloginfo('url')?>" title="Ir a UCINF" rel="nofollow">
    				<img src="<?php bloginfo('template_directory')?>/images/logo-footer.png" alt="logo-footer">
    			</a>
    			<address>
    				Pedro de Valdivia 450 | <a href="mailto:contacto@ucinf.cl ">contacto@ucinf.cl </a><br>
					Admisión teléfono <a href="tel:800 7421 00 ">800 7421 00 </a><br>
					Campus Central <a href="tel:(56) (2)2722 4200">(56) (2)2722 4200</a> | <a href="tel:2722 4300">2722 4300</a>
    			</address>
    		</div>
    		

        </div>
    </div>
</footer>
<div class="bg-lowemerald credits">
<div class="container">
	<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12 sponsor col-esp">
				<img src="<?php bloginfo('template_directory');?>/images/logos-1.png" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 sponsor">
					<img src="<?php bloginfo('template_directory');?>/images/logos-2.png" alt="">
				</div>

		       <ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12 websoc">
		            	<div class="box-soc">
		            		<h4>Contáctanos:</h4>
		            		
		                    <li><a href="<?php echo get_field('facebook','options')?>"><span class="fa fa-fw fa-facebook"></span></a></li>
		                    <li><a href="<?php echo get_field('youtube','options')?>"><span class="fa fa-fw fa-youtube-play"></span></a></li>
		            	</div>
		       </ul>
		       <div class="separator"></div>
	</div>
</div>
</div>

</body>
<?php wp_footer()?>



<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){                        
       
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
          e.preventDefault();
          $('body').toggleClass('nav-expanded');
        });
        $('#nav-close').on('click',function(e){
          e.preventDefault();
          $('body').removeClass('nav-expanded');
        });
        
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });
        
      });
</script>


<script>
$('#carousel-1 ul').bxSlider({
  minSlides: 2,
  maxSlides: 4,
  slideWidth: 290,
  slideMargin: 15,
  moveSlides: 1,
  pager:false,
  nextText:'<span class="fa fa-angle-right fa-fw"></span>',
  prevText:'<span class="fa fa-angle-left fa-fw"></span>',
});

$('#carousel-2 ul').bxSlider({
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 585,
  slideMargin: 15,
  moveSlides: 1,
  controls:false,
  nextText:'<span class="fa fa-angle-right fa-fw"></span>',
  prevText:'<span class="fa fa-angle-left fa-fw"></span>',
});

</script>

<script>
   $(document).ready(function($) {
        $('#facultades').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 2,
            auto:false,
            prev: '#anteb',
            next: '#sgteb',
            height: 320,
            pagination: "#pager",
             items: {
                width: 230,
                //height: '50%',  //  optionally resize item-height
                visible: {
                    min: 2,
                    max: 4,
                }
            } 
        });
    });
</script>

<script>
jQuery(window).load(function() {
	jQuery("#loader-wrapper").fadeOut("slow");
})
</script>

<?php if(is_home() || is_404()){ //supersized?>

<script>
    jQuery(document).ready(function($) {
    jQuery('#myModal .close').on('click', function() {
                        //$('#popup-youtube-player').stopVideo();
    jQuery('#myModal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
                    });
    jQuery('#myModal').on('click', function() {
                        //$('#popup-youtube-player').stopVideo();
    jQuery('#myModal .player')[0].contentWindow.postMessage('{"event":"command","func":"' +'stopVideo' + '","args":""}', '*');    
        });
    });
</script> 


<?php $bgd = wp_get_attachment_image_src( get_field('default_background' , 'options') , 'full')?>
<script type="text/javascript">

jQuery(document).ready(function() {
	jQuery('body').append('<div id="supersized-loader"></div><div id="supersized"></div>');
});

			jQuery(function($){
				$.supersized({
					slideshow               :   1,		//Slideshow on/off
					autoplay				:	1,		//Slideshow starts playing automatically
					start_slide             :   1,		//Start slide (0 is random)
					random					: 	0,		//Randomize slide order (Ignores start slide)
					slide_interval          :   8000,	//Length between transitions
					transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	300,	//Speed of transition
					new_window				:	1,		//Image links open in new window/tab
					pause_hover             :   0,		//Pause slideshow on hover
					keyboard_nav            :   0,		//Keyboard navigation on/off
					performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,		//Disables image dragging and right click with Javascript
					image_path				:	'img/', //Default image path
					min_width		        :   0,		//Min width allowed (in pixels)
					min_height		        :   0,		//Min height allowed (in pixels)
					vertical_center         :   0,		//Vertically center background
					horizontal_center       :   1,		//Horizontally center background
					fit_portrait         	:   1,		//Portrait images will not exceed browser height
					fit_landscape			:   0,		//Landscape images will not exceed browser width
					navigation              :   1,		//Slideshow controls on/off
					thumbnail_navigation    :   0,		//Thumbnail navigation
					slide_counter           :   0,		//Display slide numbers
					slide_captions          :   0,		//Slide caption (Pull from "title" in slides array)
					slides 					:  	[		//Slideshow Images
														{image : '<?php echo $bgd[0] ?>', title : '',},  
														 
												]
				}); 
		    });
</script>
<?php }?>

</html>