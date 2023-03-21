<?php
/* Template Name: Full Width */
get_header();
?>
    <div>
      <h2>
        <?php echo get_the_title(); ?>
      </h2>
    </div>
  <div>
    <?php get_template_part('components/content'); ?>
  </div>

<?php get_footer(); ?>