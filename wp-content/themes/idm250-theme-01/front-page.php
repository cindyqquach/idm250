<?php get_header(); ?>
<h1><?php echo get_the_title(); ?></h1>
<div> 
    <?php if (get_the_post_thumbnail_url()) {
      echo 
      "<div>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
</div> 

<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>

