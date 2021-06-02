<?php
/**
 * Template name: Homepage Magno
 */

  get_header();?>
  <header class="multistep__heading">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <h3 class="multistep__title">
        <span class="d-block headline headline--med headline--italic tipo-line--08"><?php woocommerce_page_title(); ?></span>
      </h3>
    <?php endif; ?>
  </header>
  <div class="container">

  </div>
  <?php
  get_footer();
