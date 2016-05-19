<?php get_header(); ?>

<!-- Slider Ends Here -->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?> 
    
</div>
    
<!--test-->
 
<!-- Start FlexSlider Code, place just before closing body tag --> 
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script> -->




<!-- Initialize the slider on the div we named "flexslider" --> 
<script type="text/javascript">
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    });
});
</script> 

<!-- Optional FlexSlider Additions --> 
<!--<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>-->
<!-- End FlexSlider Code -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
