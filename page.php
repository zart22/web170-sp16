<?php get_header(); ?>

<div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <h2><?php the_title(); ?></h2> 
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
    <small>page.php</small>
    </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>