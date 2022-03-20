<?php
/**
*@package wordpress
* @subpackage Cambia Information Group
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php if(is_page_template( 'template-services.php' )) { ?>
<!-- Files Links for Animation on page scroll -->
<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.js"></script>
<?php } ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
<?php wp_head();?>
</head>
<body <?php body_class(); ?> id="page-top">


<div class="mobile_logo">
<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/cambia_logo.png" alt="Cambia Logo"></a>
</div>



    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
	  
	  
        <div class="navbar-header">
		
		
<div class="mobile_menu">
<div class="menu_nav">
<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'items_wrap'  => '<ul class="nav navbar-nav">%3$s</ul>' ) ); ?>
</div>
</div>


		
<?php /*?>          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><?php */?>
		  
		  
		  
          <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/cambia_logo.png" alt=""></a>
        </div>
		
		
        <div class="navbar-collapse collapse top-nav">
<?php wp_nav_menu( array( 'menu' => 'Main Menu','items_wrap'  => '<ul class="nav navbar-nav navbar-right" id="jsddm">%3$s</ul>' ) ); ?>
        </div><!--/.nav-collapse -->
		
		
      </div>
    </div>
	
	

