<?php
/* Template Name: Purple */
get_header();
?>
  <div>
    <?php if (get_the_post_thumbnail_url()) {
      echo 
      "<div>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
  <div class="content"> 
  <?php get_template_part('components/content'); ?>
  </div>
  </div>

<?php get_footer(); ?>