<fieldset class="multistep__item" data-step="2">
  <div class="container">
    <header class="multistep__heading text-center">
      <h3 class="header">Elige los productos</h3>
    </header>
    <div class="multistep__boxes js-boxes">
        <?php
        /**
         * Call input products loop
         *
         */
        get_template_part('includes/loops/products', 'form'); ?>
    </div>
    <div class="multistep__collection js-collection"></div>
    <div class="multistep__actions">
      <button class="multistep__prev button">
        <span class="button__content" tabindex="-1">Cambiar tu caja</span>
      </button>
      <button class="multistep__next button">
        <span class="button__content" tabindex="-1">Personaliza tu Tarjeta</span>
      </button>
    </div>
  </div>
</fieldset>
