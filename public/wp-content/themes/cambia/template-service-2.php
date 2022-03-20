<?php 
/**
 Template Name: Service Template 2
*/
get_header();?>






<!--Product Tab Section-->
	<section id="product-tab-section">
	<div class="container">
<div class="row">

<div class="col-md-12">

<?php wp_nav_menu( array( 'menu' => 'Service Menu','items_wrap'  => '<ul class="" id="jsddm">%3$s</ul>' ) ); ?>

		  </div>
	</div><!-- row -->
	</div><!-- container -->
	</section><!-- About Top Banner Section -->
<!--Product Tab Section-->





<div class="service mobile_top_banner" style="background: url(<?php the_field('mobile_banner_image');?>)">
<div class="top_service_content">
<div class="container">
<div class="row">
 <div class="col-md-12">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title();?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>	
</div>
</div>
<div class="clear"></div>
</div>
</div>
</div>



<?php if ( has_post_thumbnail() ) { ?>
<div class="top_service_content_with_image desktop_banner" style="background:  #F7F7F7 url(<?php echo $src = the_post_thumbnail_url( '' ); ?> )  no-repeat scroll left bottom / cover;">
 <div class="col-md-6">
<?php //the_post_thumbnail(); ?>
</div>
<div class="col-md-6">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title();?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>	
</div>
</div>
<?php } else { ?>


<div class="top_service_content without-image">
<div class="container">
<div class="row">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><?php the_title();?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>	

</div>
<div class="clear"></div>
</div>
</div>

<?php   }   ?>



<?php// if(get_field('parallax_section_content')) { ?>
<section class="module parallax_1 founder-rose-section service_parallax" id="parallax-section" style="background: url(<?php the_field('parallax_image');?>);">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
						 <?php the_field('parallax_section_content'); ?>
						</div>
					</div>
			</div>
	</section>
<?php //} ?>


<div class="bottom_service_content">
<div class="container">
<div class="row">
<?php the_field('bottom_content'); ?>
</div>
<div class="clear"></div>
</div>
</div>



	
<?php get_footer();?>