<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="icon" href="/wp-content/uploads/2015/11/favicon.ico">
    <meta property="fb:app_id" content="1478301272479830" />
    <meta property="og:site_name" content="Empire State Ride" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:image" content="http://empirestateride.com/wp-content/uploads/2015/11/facebook_og.png" />
    <meta property="og:description" content="A fully supported, seven day, 500+ mile adventure with one mission: WIN THE FIGHT AGAINST CANCER." />
    <meta name="twitter:site" content="@EmpireStateRide" />
    <meta name="twitter:url" content="https://empirestateride.com/" />
    <meta name="twitter:title" content="Empire State Ride" />
    <meta name="twitter:description" content="A fully supported, seven day, 500+ mile adventure with one mission: WIN THE FIGHT AGAINST CANCER." />

   <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    

     
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <!-- Google Analytics Tracking -->
      <?php include_once("analyticstracking.php") ?>
    
    
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '932444473472330'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=932444473472330&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


    
    <!--wordpress head - must have this as a hook for WP to be able to attach 
    certain functionality into site header and is also used by plugins-->
    <?php wp_head(); ?>
    
     
     
  </head>

  
  <body class="body-style">

      
       <!-- Facebook SDK for JavaScript-->
      <?php include_once("fb-sdk.php") ?>
      
      <div  id="navigation-desktop" class="hidden-xs" >
          
            <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="img-responsive hidden-sm" src="/wp-content/uploads/2015/11/brand_logo_desktop.png"><img class="img-responsive hidden-lg hidden-md" src="/wp-content/uploads/2015/11/brand_logo_sm.png"></a>
        </div>
          
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'nav navbar-nav', 'walker' => new Bootstrap_Walker_Nav_Menu()  ) ); ?>
           
            
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
          
      </div>
      
      
      
      
      
      <div  id="navigation-mobile" class="hidden-lg hidden-md hidden-sm" >
          
           <div class="container" > 
       
               <nav class="navbar navbar-fixed-top grad2">
      
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
            
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="img-responsive" style="display:inline-block;" height="30" src="/wp-content/uploads/2015/11/logo_mobile_tag2.png" /></a>
           
            </div>
              <div id="navbar"class="collapse navbar-collapse">
          
          <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'nav nav-justified', 'walker' => new Bootstrap_Walker_Nav_Menu()  ) ); ?>
           
            
        </div><!--/.nav-collapse -->
    
    </nav>
      </div>
          
          
          
      </div>
      
      
      
    <div id="esr" class="container-fluid">