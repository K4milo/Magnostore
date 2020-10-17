<div class="menu--cat">
  <nav role="subnav" class="container">
    <ul class="menu--cat__wrapper">
      <?php

      /**
       * Loop Woocommerce categories
       *
      */

      $args = [
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => true,
        'exclude' => [15,31,38,33,37,36,28,27]
      ];

      $categories = get_categories($args);

      foreach($categories as $prod_cat):
      ?>
        <li class="menu--cat__item">
          <a
            href="/categoria-producto/<?php echo $prod_cat->slug; ?>"
            class="body body--bd body--uppercase">
            <?php echo $prod_cat->name; ?>
          </a>
        </li>
      <?php
      endforeach;
      ?>
    </ul>
  </nav>
</div>
