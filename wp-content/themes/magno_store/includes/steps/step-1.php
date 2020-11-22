<fieldset class="multistep__item show js-step" data-step="1">
  <div class="container">
    <header class="multistep__heading">
      <h3 class="multistep__title">
        <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1">Elige</span>
        <span class="d-block headline headline--med headline--italic tipo-line--08">El color de tu caja</span>
      </h3>
    </header>
    <div class="multistep__boxes">
      <?php
        /**
         * Call input products loop
         *
         */
        get_template_part('includes/loops/boxes', 'form'); ?>
    </div>
    <div class="multistep__actions multistep__actions--center">
      <button class="multistep__next button button--icon js-next" type="button">
        <span class="eyebrow eyebrow--1 eyebrow--uppercase button__content" tabindex="-1">Añadir Productos</span>
        <span class="button__icon material-icons">keyboard_arrow_right</span>
      </button>
    </div>
  </div>
</fieldset>
