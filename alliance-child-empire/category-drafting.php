<?php
/**
* Category Template for Drafting Blog on Empire State Ride only
*/

get_header( 'interior' );?>

<section id="primary" class="site-content">
    
    
<div id="content" role="main">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<h2 class="archive-title"><?php single_cat_title( '', true ); ?></h2>
<p>Drafting is a cooperative cycling tactic used to help riders reduce resistance by using a lead rider to disperse air making it easier for trailing riders.  We named our blog “Drafting” because we like to think of ourselves as the lead rider, making it easier for you to be successful.  You’ll find all the tips, tricks, and info you’ll need to help you train, fundraise and prepare for the ESR right here.</p>
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