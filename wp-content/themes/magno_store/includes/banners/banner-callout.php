<?php

$callout_banner = get_field('callout_banner');


if ($callout_banner):
  ?>

  <div class="callout-banner callout-banner--home">
    <div class="container">
      <?php
      while( have_rows('callout_banner') ) : the_row();

          $callout_align = get_sub_field('callout_banner__align');
          $callout_image = get_sub_field('callout_banner__image');
          $callout_title = get_sub_field('callout_banner__title');
          $callout_text = get_sub_field('callout_banner__text');
          $callout_subtitle = get_sub_field('callout_banner__subtitle');
          $callout_cta = get_sub_field('callout_banner__link');
      ?>
        <div class="row <?php echo ($callout_align == 'left') ? 'flex-row-reverse' : ''; ?> align-items-center">
          <div class="col-md-5 col-md-offset-1">
            <figure class="callout-banner__image">
              <div class="image--outlined">
                <img src="<?php echo $callout_image['url']; ?>" class="image-fit--cover" alt="<?php echo $callout_image['alt']; ?>" />
              </div>
            </figure>
          </div>
          <div class="col-md-6">
            <div class="callout-banner__caption">
              <h3 class="callout-banner__title">
                <span class="d-block eyebrow eyebrow--uppercase eyebrow--bd tipo-line--1"><?php echo $callout_title; ?></span>
                <span class="d-block headline headline--italic headline--big tipo-line--08"><?php echo $callout_subtitle; ?></span>
              </h3>
              <div class="callout-banner__text body"><?php echo $callout_text; ?></div>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </div>
  </div>
  <?php
endif;
