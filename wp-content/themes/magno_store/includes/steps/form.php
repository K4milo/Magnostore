<?php get_template_part('includes/steps/menu'); ?>
<form id="multiStep" class="multistep js-multistep">
  <?php

  /**
   * Implement steps form
   *
   **/

  get_template_part('includes/steps/step', '1');
  get_template_part('includes/steps/step', '2');
  get_template_part('includes/steps/step', '3'); ?>
  <div class="multistep__bottom container">
    <div class="row">
      <div class="multistep__b-box col-md-2 js-box-bar"></div>
      <div class="multistep__b-products col-md-8 js-products"></div>
      <div class="multistep__b-cards col-md-2 js-card-bar"></div>
    </div>
    <div class="multistep__bar js-progress-bar"></div>
  </div>
</form>
