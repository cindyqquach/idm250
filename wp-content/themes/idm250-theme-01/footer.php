<div class="footer"> 
<?php get_template_part('components/footer'); ?>
</main>
<?php wp_footer(); ?>
    <nav class="footer-menu"> 
      <?php 
      wp_nav_menu(['theme_location' => 'footer-menu']); 
      ?> 
    </nav>
<footer>
  <p class="copyright">&copy; <?php echo date('Y'); ?> PAWS</p>
</footer>
</div> 
</body <?php body_class(); ?>>
</html>

