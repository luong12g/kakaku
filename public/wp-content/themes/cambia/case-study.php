<?php
   /* 
   * Template Name: Case Study Template
   */
get_header(); ?>

<div id="inner-content" class="inner_page">
<div class="title_full_width">
<div class="container">
<h1><?php the_title();?></h1>
</div>
</div>

<div class="main_content">
<div class="container">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
 'category_name' => 'case-studies',
 'orderby'=> 'date',
 'order'=> 'DESC',
 'paged' => $paged ,'posts_per_page' => 10
);
query_posts($args); 
    if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
 <div class="post-block">
 
<?php if ( has_post_thumbnail() )  { ?>
<div class="col-lg-4 col-md-4">
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-archive'); ?></a>
</div>
<?php } ?>

<?php if ( has_post_thumbnail() )  { ?>
<div class="col-lg-8 col-md-8">
<?php } else { ?>
<div class="col-lg-12 col-md-12">
<?php } ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<!-- <div class="metainfo">Posted by <span class="author-name">
<?php // the_author_posts_link(); ?>
</span> on
<?php // the_time('l, F jS, Y') ?>
in
<?php // the_category(', ') ?>
</div>  -->
<p><?php echo substr(get_the_excerpt(),0,100);?>...</p>
<a class="view-more green-btn" href="<?php the_permalink() ?>">View More</a>
</div>
 </div>
<?php endwhile; ?>
</div>
<div class="clear"></div>
<div class="nav">
<?php  wp_pagenavi(); ?>
</div>
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php get_footer();?>