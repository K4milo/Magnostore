<fieldset class="multistep__item hidden js-step" aria-hidden="true" data-step="2">
  <div class="container">
    <h3 class="multistep__title">
      <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1">Elige</span>
      <span class="d-block headline headline--med headline--italic tipo-line--08">Los productos</span>
    </h3>
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
      <button class="multistep__prev button js-prev" type="button">
        <span class="button__content" tabindex="-1">Cambiar tu caja</span>
      </button>
      <button class="multistep__next button js-next" type="button">
        <span class="button__content" tabindex="-1">Personaliza tu Tarjeta</span>
      </button>
    </div>
  </div>
</fieldset>
