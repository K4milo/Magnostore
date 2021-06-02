<?php

$hero_banner = get_field('hero_banner');


if ($hero_banner) {
  ?>

  <div class="hero-banner hero-banner--home">
    <?php
    while( have_rows('hero_banner') ) : the_row();

        $hero_mobile = get_sub_field('hero_banner__img_xs');
        $hero_desktop = get_sub_field('hero_banner__img');
        $hero_title = get_sub_field('hero_banner__title');
        $hero_sub_title = get_sub_field('hero_banner__subtitle');
        $hero_cta = get_sub_field('hero_banner__link');
    ?>
      <figure class="hero-banner__image">
        <?php
        if (wp_is_mobile()):
        ?>
          <img src="<?php echo $hero_mobile['url']; ?>" class="image-fit--cover" alt="<?php echo $hero_mobile['alt']; ?>" />
        <?php
          else:
        ?>
          <img src="<?php echo $hero_desktop['url']; ?>" class="image-fit--cover" alt="<?php echo $hero_desktop['alt']; ?>" />
        <?php
          endif;
        ?>
      </figure>
      <div class="hero-banner__caption text-align-center">
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
          <h1 class="brand-image brand--green">Magnostore</h1>
        </a>
        <h3 class="hero-banner__title">
          <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1"><?php echo $hero_title; ?></span>
          <span class="d-block headline headline--italic headline--big tipo-line--08"><?php echo $hero_sub_title; ?></span>
        </h3>
        <div class="hero-banner__buttons">
          <a href="/product-catalog.pdf"
            class="hero-banner__button button my-2 my-lg-4" target="_blank">
            <i class="fas fa-shopping-basket button__icon button__icon--s mx-2"></i>
            <span
              class="eyebrow eyebrow--2 eyebrow--uppercase button__content"
              tabindex="-1">Ver Catálogo
            </span>
          </a>
          <a
            href="https://api.whatsapp.com/send?phone=573105589410&text=Me%20interesa%20conocer%20sobre%20Magnobox"
            class="hero-banner__button button"
            target="_blank">
            <i class="fab fa-whatsapp button__icon button__icon--s mx-2"></i>
            <span
              class="eyebrow eyebrow--2 eyebrow--uppercase button__content"
              tabindex="-1">Escríbenos por WhatsApp
            </span>
          </a>
          <a href="https://www.instagram.com/magno_giftbox/" target="_blank">
            <i class="fab fa-instagram hero-banner__icon"></i>
          </a>
        </div>
      </div>
    <?php
    endwhile;
    ?>
  </div>

  <?php
}
