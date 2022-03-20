<?php
/**
* @package wordpress
* @subpackage Cambia Information Group
*/
get_header();?>

<div id="inner-content" class="inner_page">

<div class="title_full_width">
<div class="container">
<h1><?php the_title(); ?></h1>
</div>
</div>

<div class="main_content">
<div class="container">

      <?php 
if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>


<div class="col-lg-12 col-md-12 featured_image">
<?php if ( has_post_thumbnail() )  { ?>
<?php the_post_thumbnail('blog-archive'); ?> 
<?php } ?>
</div>

<div  id="post-<?php the_ID(); ?>" class="graybox">

  

    <div class="entry">

      <?php the_content('Read the rest of this entry &raquo;'); ?>

    </div>

  </div>

  <?php endwhile;?>

<?php endif; ?>

<div class="bottom_links">
<?php next_post_link('&laquo; &laquo; %link  ', 'Previous Post', 'yes'); ?> |
<?php previous_post_link('%link &raquo; &raquo;', 'Next Post', 'yes'); ?>
</div>

</div>
</div>
</div>


<?php get_footer(); ?>