<?php

/*
 * Template Name: Photo Gallery
 */

get_header( 'gallery' );

?>

<div class="container margin-top-25 pad-bottom" >
  
<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <h2 class="page-header"><?php the_title(); ?></h2>  


<?php the_content(); ?>
    
    <div class="hidden-lg hidden-md hidden-sm"><?php get_sidebar('sidebar'); ?></div>
    
    
<?php endwhile; endif; ?>
   </div>

<?php get_footer(); ?>