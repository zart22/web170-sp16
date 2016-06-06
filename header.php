<!Doctype html>
<html>
<head>
    <title><?php get_my_title_tag(); ?> </title>
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <meta charset="utf-8"/>
   
    
  
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>

 <!--"flexslider" --> 
<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    });
});
</script>    
    
    
<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->
</head>
    
<body <?php body_class();?>>   
    
    
    
<!-- Body Starts Here -->    

<div id="header"></div>
     <div id="logo">
    <a href="<?php echo esc_url( home_url('/')); ?>"><img class="header-img" width="200" height="50" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
        </div> 
    
        
    
<!-- Begin Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!-- End Navigation -->
    
    
    
<!--Menu Starts here -->    
 <!-- <div id='cssmenu'>
<ul>
   <li><a href="about.html">About</a></li>
   <li class='active'><a href="about.html">Classes</a>
      <ul>
         <li><a href="about.html">Pre School Classes</a>
            <ul>
               <li><a href="about.html">Register</a></li>
               
            </ul>
         </li>
         <li><a href="about.html">After School Classes</a>
            <ul>
               <li><a href="about.html">Register</a></li>
               
            </ul>
         </li>
      </ul>
   </li>
   <li><a href="about.html">Blog</a></li>
   <li><a href="about.html">Contact Us</a></li>
</ul>
</div>-->
<!-- Menue Ends Here -->    


    
    
