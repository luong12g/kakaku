<?php 
/**
 * @package wordpress
 * @subpackage Cambia Information Group
 */
 
get_header();?>
  

<div id="inner-content" class="inner_page">
  <?php if (have_posts()) : ?>

<div class="title_full_width">
<div class="container">
<h1>Search Results</h1>
</div>
</div>

<div class="main_content">
<div class="container">
		<?php while (have_posts()) : the_post(); ?>

			<div class="post-block">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
                 <?php the_content('Read the rest of this entry &raquo;'); ?>
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="nav">
			<?php wp_pagenavi(); ?>
		</div>

	<?php else : ?>
<div class="main_content">
<div class="container">
		<h2 class="center">No posts found. Try a different search?</h2>
</div>
</div>
	<?php endif; ?>
</div>
</div>
</div>





<?php get_footer();?>
