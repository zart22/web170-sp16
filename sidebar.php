
  <aside> <?php if (is_page()) : // if we are in "pages"... x ?>
<h2 class="sub-navigation-title">
<ul class="sub-navigation-items"><?php  if ($post->post_parent) { // if the page has a parent...
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
} else { // if the page does not have a parent...
wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
} ?></ul>
<?php endif; // end if we are in "pages" ?>
<?php if (!(is_page())) : // if we are not in "pages"... ?>
<h2 class="sub-navigation-title">Blog</h2>
<ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // ...list the categories with no title ?></ul>
<?php endif; ?>
    
<h3>Map & Direction</h3>
<p> 3326 lake Sammamish Pkwy,
Sammamish, WA 98074</p>
<div class='embed-container'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.5066983845627!2d-122.32370048433502!3d47.61628099530236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906accc351c149%3A0xdc1a5c338dd4395c!2sSeattle+Central+College!5e0!3m2!1sen!2sus!4v1447821413541"></iframe></div>
    </aside>