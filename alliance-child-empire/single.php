<?php get_header( 'interior' ); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div id="content" >
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

                    <h2 class="page-header"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?></a></h2>

                    <div class="pull-right img-padding"> <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?></div>
                    
                    
			<div class="entry">

				<?php the_content(); ?>
                            <hr>
                                <div class="row well ">
                                <h3>About the Author</h3>
                             
                                    
                                
                                        
                                <div id="author-description">
                                    <div id="author-thumb" class="pull-left"><?php echo get_avatar( get_the_author_email(), '100' ); ?></div>

                                    <div ><?php the_author_meta('description'); ?></div>
                                      
                                </div>  
                                       
                                 
                          </div>
		</div>
 <?php _e('Post Category:'); ?> <?php the_category(', ') ?><br />
	<?php endwhile; ?>

		<div class="navigation">
			<?php _e('Previous Post:'); ?> <?php previous_post_link('%link') ?> <br />
                            <?php _e('Next Post:'); ?> <?php next_post_link(' %link') ?>
		</div>

	<?php endif; ?>

<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="500" data-numposts="10"></div>
<div class="fb-share-button" data-href="<?php post_permalink(); ?>" data-layout="button"></div>

</div>

<?php get_footer(); ?>