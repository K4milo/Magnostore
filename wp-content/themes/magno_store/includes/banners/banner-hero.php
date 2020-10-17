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
      <div class="hero-banner__caption">
        <h3 class="hero-banner__title">
          <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1"><?php echo $hero_title; ?></span>
          <span class="d-block headline headline--italic headline--big tipo-line--08"><?php echo $hero_sub_title; ?></span>
        </h3>
      </div>
    <?php
    endwhile;
    ?>
  </div>

  <?php
}
