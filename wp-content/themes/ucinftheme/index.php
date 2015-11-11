<?php get_header()?>

<!-- Slider Noticias -->

<section id="slider">
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">


            <?php $sliders = get_posts(array('post_type' => 'post' , 'numberposts' => 1, 'category_name' => 'slider-home')) ?>
            <?php $scount = 0?>
            <?php foreach($sliders as $slider):?>
            <?php $scount++ ?>
            <?php if($scount <= 1) ?>
            <?php $bgs = wp_get_attachment_image_src(get_post_thumbnail_id($slider->ID), 'slider')?> 
                <div class="item <?php if($scount == 1){?>active<?php }?>" style="background-image:url(<?php echo $bgs[0]?>);">
                    <div class="etiquet">
                            <img src="<?php echo get_field('imagen_etiqueta')?>">
                            <span><strong><?php echo get_field('titulo')?></strong></span><br>
                            <span><?php echo get_field('bajada')?></span>
                    </div>
                    <div class="col-md-8 col-md-offset-2 base">
                        <h2><?php echo $slider->post_title?></h2>
                        <a href="<?php echo get_permalink($slider->ID)?>">Matricúlate Hoy</a>
                    </div>
                    <div class="col-md-1 skk desktop"></div>
                    <div class="clear"></div>
                </div>
            <?php endforeach ?>

        </div>
     
    </div>
    
</section>

<!-- Facultades -->
<section class="bg-egray faculties" id="facultades">
    <div class="container">
        <div class="row">
            <h2>Facultades</h2>
            <div class="clear separator brd"></div>
                <div class="carousel" id="carousel-2">
                    <ul>
                        <?php $facultades = get_posts(array('post_type' => 'facultades' , 'numberposts' => -1 ))?> 
                        <?php foreach($facultades as $facultad):?>
                           
                        <li class="col-md-3 col-lg-3 col-sm-6 col-xs-12 area <?php echo get_field('clase_facultad',$facultad->ID); ?>">
                            <figure class="col-xs-12 col-esp">
                                <?php echo get_the_post_thumbnail($facultad->ID , 'full' , array('class' => 'img-responsive'))?>
                            
                                <figcaption class="col-xs-12 col-esp">
                                    <h3>
                                        <strong><?php echo $facultad->post_title?></strong>
                                    </h3>
                                    <p><?php echo substr($facultad->post_content , 0, 60)?>...</p>
                                    
                                </figcaption>
                                <a href="<?php echo get_permalink($facultad->ID)?>" rel="nofollow" title="Ir a <?php echo $facultad->post_title?>" class="">
                                        <span class="fa fa-long-arrow-right"></span>
                                    </a>
                            </figure>
                            
                        </li>
                                
                        <?php endforeach;?>
                    </ul>
                </div>
                        
        </div>
    </div>
</section>


<script>
jQuery(document).ready(function($) {
    jQuery('#facultades').carouFredSel({
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
                max: 6
            }
        } 
    });
});
</script>

<div id="store">
    <div class="container">
        <div class="row carrusel">
        <h3>Facultades</h3>
            <ul id="facultades">
                <?php $facultades = get_posts(array('post_type' => 'facultades' , 'numberposts' => 4 ))?>
                <?php $tp = count($facultades);?>
                <?php foreach($facultades as $facultad):?>
                    <li class="col-md-3 col-lg-3 col-sm-4 col-xs-2 producto">
                        <?php echo get_the_post_thumbnail($facultad->ID , 'full' , array('class' => 'img-responsive aligncenter'))?>
                        <h4><?php echo $facultad->post_title?></h4>

                        
                       
                    </li>
                <?php endforeach;?>
                
            </ul>
            <div class="clear"></div>
            <div class="controls">
                <div id="anteb" class="control"><span class="fa fa-chevron-left"></span></div>
                <div id="sgteb" class="control"><span class="fa fa-chevron-right"></span></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!-- Acerca de -->
<section id="acerca" class="about">
    <div class="container-fluid">
        <div class="row">
            <?php $universidades = get_posts(array('post_type' => 'universidades' , 'numberposts' => 2 , 'post__not_in'))?> 
            <?php foreach($universidades as $universidad):?>
            <figure class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-esp ">
                <?php echo get_the_post_thumbnail($universidad->ID , 'siderimg' , array('class' => 'img-responsive'))?>
                <figcaption class="col-sm-6 col-xs-12 col-esp ">
                    <a href="<?php echo get_permalink($universidad->ID)?>" class="universidad-<?php echo get_field('clase_universidad',$universidad->ID); ?>" title="<?php echo $universidad->post_title?>" rel="nofollow"><?php echo $universidad->post_title?>
                        <span class="fa fa-long-arrow-right"></span>
                    </a>
                </figcaption>
            </figure>
        <?php endforeach ?>
        </div>
    </div>
</section>


<!-- Noticias -->
<section id="noticias" class="news">
    <div class="container">
        <div class="row">

            <h3>Noticias</h3>
            <div class="clear separator brd"></div>
            <div class="col-md-12">
                <div class="row">
                    
                    <?php $posts = get_posts(array('category' => 'noticias' , 'numberposts' => 5 , 'post__not_in'))?>
                    <?php $count = 0?>
                    <?php foreach($posts as $post):?>
                    <?php $count++?>
                    
                    <?php if($count == 1){?>
                        <figure class="principal col-md-4 col-sm-12">
                            <a class="heading" href="<?php echo get_permalink($post->ID)?>"><?php echo get_the_post_thumbnail($post->ID , 'news_big' , array('class' => 'img-responsive'))?></a>
                            <figcaption class="col-xs-12">
                                <h4>
                                    <a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a>
                                </h4>
                                <p><?php echo substr($post->post_content , 0, 76)?>...</p>
                                <a href="<?php echo get_permalink($post->ID)?>" >Ver Más</a>
                                <div class="clear"></div>
                            </figcaption>
                        </figure>
                        
                        <?php }else{?>
                        
                        <article class="col-md-4 col-sm-6 secundario noticias">
                            <h4><a href="<?php echo get_permalink($post->ID)?>"><?php echo $post->post_title?></a></h4>
                            <div class="col-xs-3 col-esp">
                                <?php echo get_the_post_thumbnail($post->ID , 'news_small' , array('class' => 'img-responsive'))?>
                            </div>
                            <div class="col-xs-9">
                                <p><?php echo substr($post->post_content , 0, 76)?>...</p>
                                <div class="clear"></div>
                            </div>
                            <a href="<?php echo get_permalink($post->ID)?>" class="morelink">Ver Más</a>
                            <div class="clear separator"></div>
                        </article>
                        
                        <?php }?>
                      
                    <?php endforeach;?>                

                </div>
            </div>

        </div>
    </div>
</section>



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


<?php get_footer()?>







