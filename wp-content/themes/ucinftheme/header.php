<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<script>
    jQuery(document).ready(function(){                        
       
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

</head>

<body <?php body_class()?>>

<!-- Navegación del sitio -->
<header class="navbar navbar-default navbar-fixed-top bg-transparent" role="navigation">
      <div class="container">
      	<div class="row">
      	
            <div class="navbar-header">
            	<a class="navbar-brand logo" href="<?php bloginfo('url')?>" title="Circulo de Egresados IPCHILE" rel="nofollow">
                <img src="<?php bloginfo('template_directory')?>/images/logo-home.jpg" alt="" width="150" />
              </a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              
              <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav' , 'theme_location' => 'primary' ) ); ?>

              <div class="socials col-lg-2 col-md-2 col-xs-12 ">
                  <div>
                      <ul>
                          <li><a href="#"><span class="fa fa-facebook fa-fw"></span></a></li>
                          <li><a href="#"><span class="fa fa-twitter fa-fw"></span></a></li>
                          <li><a href="#"><span class="fa fa-youtube fa-fw"></span></a></li>
                      </ul>
                  </div>
              </div>

              <!-- Single button -->
              <div class="btn-group secondary">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="glyphicon glyphicon-align-justify"></span>
                </button>
                <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav dropdown-menu' , 'theme_location' => 'secondary' ) ); ?>
              </div>
              
            </div><!--/.nav-collapse -->
                        
      	</div>
      </div>
</header>