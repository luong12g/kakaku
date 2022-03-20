<?php /**
* @package wordpress
*
@subpackage Cambia Information Group
*/
get_header();?>

<div id="inner-content" class="inner_page">
<div class="title_full_width">
<div class="container">
<h1><?php single_cat_title(); ?></h1>
</div>
</div>

<div class="main_content">
<div class="container">
<div class="top_category_content">
<?php echo category_description(); ?>
</div>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?><h1>Archive for
<?php the_time('F jS, Y'); ?></h1>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h1>Archive for
<?php the_time('F, Y'); ?>
</h1>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h1>Archive for<?php the_time('Y'); ?></h1>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h1>Author Archive</h1>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
  <h1>Comments</h1>
<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
<h1>Blog</h1>
<?php } ?>
<div class="row">
<?php while (have_posts()) : the_post(); ?>
 
<?php if ( has_post_thumbnail() )  { ?>
<div class="col-lg-4 col-md-4">
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-archive'); ?></a>
</div>
<?php } ?>

<?php if ( has_post_thumbnail() )  { ?>
<div class="col-lg-8 col-md-8">
<?php } else { ?>
<div class="col-md-12 col-sm-12 col-xs-12 sub-cat-box">
<?php } ?>

<div class="inner">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<div class="metainfo">Posted by <span class="author-name">
<?php the_author_posts_link(); ?>
</span> on
<?php the_time('l, F jS, Y') ?>
in
<?php the_category(', ') ?>
</div>
<p><?php echo substr(get_the_excerpt(),0,600);?></p>
</div>

 </div>
<?php endwhile; ?>
</div>
<div class="clear"></div>
<div class="nav">
<?php wp_pagenavi(); ?>
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