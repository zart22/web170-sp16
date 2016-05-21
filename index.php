<?php get_header(); ?>

<!-- Slider Ends Here -->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<small>page.php</small>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
