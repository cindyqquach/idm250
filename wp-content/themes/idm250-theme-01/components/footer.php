<?php
  $menu = get_theme_menu('footer-menu');
  ?>
<div class="footer-heading"> 
  <h2>Find your paw-fect match at PAWS Adoption Center! </h2> 
</div> 
<footer>
  <div>
    <h6>GET CONNECTED </h6> 
    <nav>
      <?php foreach ($menu as $item) {
          echo "<div class='pb-6'>
          <a href='{$item->url}'>{$item->title}</a>
        </div>";
      }  ?>
    <p>&copy;
      <?php echo date('Y'); ?>
      PAWS.
      All rights reserved.
    </p>
  </div>
</footer>