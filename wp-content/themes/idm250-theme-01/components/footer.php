<?php
  $menu = get_theme_menu('footer-menu');
  ?>
<footer>
  <div>
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