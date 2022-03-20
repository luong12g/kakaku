<?php 
/**
 Template Name: Why Cambia
*/
get_header();?>

<style>
#about-top-banner{margin: 100px 0 0 0; background:#273252 url(img/about-banner-image.jpg) no-repeat center top;  min-height:460px; background-size: cover;}
</style>


<!-- Mobile About Top Banner Section -->
<section class="about mobile_top_banner" style="background: url('<?php the_field('mobile_banner_image');?>')"> 

	<div class="container">
       <div class="row">
		<div class="col-md-6">
			<div class="about-banner-block">
			<?php the_field('green_section_text');?>
			</div>
			
		</div>
		
		
			<div class="col-md-6">
			
		</div>
		
	</div><!-- row -->
	</div><!-- container -->
	</section>  <!-- About Top Banner Section -->





<!-- About Top Banner Section -->

<section id="about-top-banner" 
	<?php
    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="background-image: url(%s);"', $image_src[0] );     
    }
?>> 

	<div class="container">
       <div class="row">
		<div class="col-md-6">
			<div class="about-banner-block">
			<?php the_field('green_section_text');?>
			</div>
			
		</div>
		
		
			<div class="col-md-6">
			
		</div>
		
	</div><!-- row -->
	</div><!-- container -->
	</section>  <!-- About Top Banner Section -->



	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="about-us-text-top">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>		
				
				
			</div><!-- About Us Text -->
			</div>
	</div><!-- row -->
	</div><!-- container -->
	
	
	<!-- Proud Partners -->
	<?php /*?><section id="about-proud-partners">
		<div id="proud-partners-section">
		<div class="container">
			<div class="row centered">
			<div class="col-lg-3">
			<div class="proud-partner-heading">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_content') ) ?>	
			</div>
			</div>	
			
			<div class="col-lg-9">
					<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_logos') ) ?>	
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>
	</section><?php */?><!-- Proud Partners -->
	

	



<section id="about-service-section">
	<div class="container-fluid">
		<div class="row centered">
			<div class="col-md-12">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box_content') ) ?>	
			</div>
		</div><!-- row -->
		
<div class="row centered">
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box') ) ?>	
</div>		<!-- row -->

	</div><!-- container -->
	</section>
	

	
	
<div class="main_content">
<div class="container">
<?php the_field('bottom_content');?>
 </div>
</div>
	
<?php get_footer();?>