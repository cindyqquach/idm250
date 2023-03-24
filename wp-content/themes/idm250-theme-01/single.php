<?php
/**
 * The default template for displaying all new pages
 */?> 
<?php
get_header();?> 
<?php echo get_the_title(); 
?>
<div class="single-page"> 
<?php get_template_part('components/content'); ?>
</div> 
<?php get_footer(); ?>