<?php get_header(); ?>
This is the page.php
<main> 
<h1> <?php echo get_the_title(); ?> </h1> 
<div> <?php echo get_the_excerpt(); ?> </div> 
</main> 
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>