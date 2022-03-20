<?php
/**
* @package wordpress
* @subpackage Cambia Information Group
*/ 
get_header();?>


<?php if ( has_post_thumbnail() ) { ?>
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
<?php /*?>			<?php if(is_page('our-company')) { ?><?php */?>
			<?php the_field('green_section_text');?>
<?php /*?>			<?php } else { ?>
			<h1><?php the_title(); ?></h1>
			<?php } ?><?php */?>
			</div>
			
		</div>
		
		
			<div class="col-md-6">
			
		</div>
		
	</div><!-- row -->
	</div><!-- container -->
	</section>
	
	<?php }?>



	








<div id="inner-content" class="inner_page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="title_full_width">
<div class="container">
<?php if (!has_post_thumbnail() ) { ?>
<h1 class="page_title"><?php the_title(); ?></h1>
<?php } ?>
</div>
</div>





<div class="main_content">
<div class="container">
<?php the_content(); ?>
 <?php endwhile; endif; ?>
</div>
</div>
</div>


<?php get_footer();?>
