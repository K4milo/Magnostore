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
    <div class="multistep__products js-products row"></div>
    <div class="multistep__bar js-progress-bar"></div>
  </div>
</form>
