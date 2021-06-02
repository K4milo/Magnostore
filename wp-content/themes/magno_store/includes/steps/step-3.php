<fieldset class="multistep__item hidden js-step" aria-hidden="true" data-step="3">
  <div class="container">
    <header class="multistep__heading text-center">
      <h3 class="multistep__title">
        <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1">Elige</span>
        <span class="d-block headline headline--med headline--italic tipo-line--08">Una tarjeta</span>
      </h3>
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
