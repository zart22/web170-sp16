<?php get_header(); ?>

    <!-- Begin Flex Slider -->
    <article class="slider">
    	<div class="flexslider">
	  <ul class="slides">
          
          
        <li data-thumb="<?php bloginfo('template_directory'); ?>/images/kid2.png">
			<img src="<?php bloginfo('template_directory'); ?>/images/kid2.png" />
			</li>
          
          
        <li data-thumb="<?php bloginfo('template_directory'); ?>/images/kid1.png">
			<img src="<?php bloginfo('template_directory'); ?>/images/kid1.png" />
			</li>
          
        <li data-thumb="<?php bloginfo('template_directory'); ?>/images/kid3.png">
			<img src="<?php bloginfo('template_directory'); ?>/images/kid3.png" /> 
			</li>
	  </ul>
	</div>
   <!-- <a href=""><button class="home">Register</button></a>-->
       </article>
     
<!-- End Flex Slider -->
    
 <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
        <h2>About Company</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
        </section>
        <section class="widget-item">
        <h2>Latest Postings:</h2>
        <ul>
		<?php rewind_posts();  ?>
        <?php query_posts('showposts=4'); ?>
        <?php while (have_posts()) : the_post();?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        </ul>
        </section>
</div>
 <!-- End Widgets -->

<?php get_footer(); ?>