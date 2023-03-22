<header>
  <div>
    <h1>
      <?php echo get_the_title(); ?>
    </h1>
    <div><span><?php echo get_the_date(); ?></span>
      <?php get_template_part('components/blog-categories-list'); ?>
    </div>
  </div>
  <div
    style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
  </div>

</header>