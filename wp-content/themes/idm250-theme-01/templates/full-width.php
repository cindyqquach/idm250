<?php
/* Template Name: Full Width */
get_header();
?>
  <div class="custom-content">
  <?php echo get_the_title(); ?> 
    <?php if (get_the_post_thumbnail_url()) {
      echo 
      "<div>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
  <?php get_template_part('components/content'); ?>
  </div>

<?php get_footer(); ?>