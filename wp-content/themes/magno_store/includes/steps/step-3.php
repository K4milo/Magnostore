<fieldset class="multistep__item hidden js-step" data-step="3">
  <div class="container">
    <header class="multistep__heading text-center">
      <h3 class="header">Elige una tarjeta</h3>
    </header>
    <div class="multistep__cards">
    <?php
        /**
         * Call input products loop
         *
         */
        get_template_part('includes/loops/cards', 'form'); ?>
    </div>
    <div class="multistep__actions">
      <button class="multistep__prev button js-prev" type="button">
        <span class="button__content" tabindex="-1">Regresar a Productos</span>
      </button>
      <button class="multistep__next button js-next" type="button">
        <span class="button__content" tabindex="-1">Finalizar Compra</span>
      </button>
    </div>
  </div>
</fieldset>
