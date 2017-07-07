<?php

/*
 * Template Name: Contact
 */

get_header( 'interior' );

?>


<?php
if($_POST["message"]) {
    mail("meredith.litz@roswellpark.org", "Form to email message", $_POST["message"], "From: empirestateride@roswellpark.org");
}
?>

<div class="container pad-bottom" >
  
<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <h2 class="page-header"><?php the_title(); ?></h2>  


<?php the_content(); ?>Would you like more info on the Empire State Ride?  Have a question or comment? Leave us your contact info or send us a note.  We’d love to hear from you!  You can also reach us by calling 716-845-8788.
<div class="container">
<div class="col-md-6 col-md-offset-3">
<div class="form-area ">
<form action="contact.php">&nbsp;
<h3 style="margin-bottom: 25px; text-align: center;">RIDE TEAM CONTACT US</h3>
<div class="form-group"><input id="name" class="form-control" name="name" required="" type="text" placeholder="Name" /></div>
<div class="form-group"><input id="email" class="form-control" name="email" required="" type="text" placeholder="Email" /></div>
<div class="form-group"><input id="name" class="form-control" name="phone" required="" type="tel" placeholder="Phone" /></div>
<div class="form-group"> <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea></div>
<button id="submit" class="btn btn-primary pull-right" name="submit" type="button">Submit </button>
 
</form></div>
</div>
</div>
<?php endwhile; endif; ?>
   </div>

<?php get_footer(); ?>