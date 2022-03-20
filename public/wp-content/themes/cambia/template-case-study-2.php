<?php
   /* 
   * Template Name: Case Study Template 2
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

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>



<?php
        // get all the categories from the database
        $args1 = array(
          'orderby' => 'date',
          'order' => 'ASC',
          'hierarchical' => false,
		  
          );
        $cats = get_categories( $args1 ); 

            // loop through the categries

            foreach ($cats as $cat) {
			
			 if( 0 != $cat->parent ) {
			 
			 array_push( $cat_ID, $cat->cat_ID );
                // setup the cateogory ID
                $cat_id= $cat->term_id;
				?>
				<div class="col-md-12 col-sm-12 col-xs-12 sub-cat-box">
				<div class="inner">
				<?php 
                // Make a header for the cateogry
                echo "<h2>".$cat->name."</h2>";
                // create a custom wordpress query
                $args2 = 'cat=' . $cat_id . '&orderby=date&order=DESC&post_per_page=-1';
                query_posts( $args2 );
				?>
				<ul>
				<?php 
                // start the wordpress loop!
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php // create our link now that the post is setup ?>
                    <li>
					<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
					<p><?php echo substr(get_the_excerpt(),0,600);?></p>
					</li>

                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
				</ul>
				</div>
				</div>		
            <?php } }  // done the foreach statement ?>



</div>
</div>
</div>
</div>
<?php get_footer();?>