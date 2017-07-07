<?php
/**
* Category Template for Blog on Empire State Ride 
*/

get_header( 'interior' );?>

<section id="primary" class="site-content">
    
    
<div id="content" role="main">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<h2 class="archive-title"><?php single_cat_title( '', true ); ?></h2>
<hr>

<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<?php

// The Loop
while ( have_posts() ) : the_post(); ?>


<div class="entry clearfix"  style="padding-bottom:2em;">
    
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

 <div>
<div class="pull-left img-padding-right">
    <?php the_post_thumbnail( 'thumbnail', $attr ); ?> </div>
     <small><?php the_time('F jS, Y') ?>  | Category: <?php single_cat_title( '', true ); ?> </small>
     <div style="padding-top:1em;font-size:1.5em;"><?php echo excerpt(40); ?></div>
</div>
</div>
    <hr>
    

<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>


<?php endif; ?>




    <?php if (show_posts_nav()) : ?>  
<div class='navigation'>
	<span class='older'><?php next_posts_link('&laquo; Previous Entries |'); ?></span>
	<span class='newer'><?php previous_posts_link('Newer Entries &raquo;'); ?></span>
</div>
<?php endif; ?>


    
</section>




<?php get_sidebar(); ?>
<?php get_footer(); ?>