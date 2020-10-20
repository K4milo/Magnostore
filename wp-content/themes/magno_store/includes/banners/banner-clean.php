<?php

$clean_banner = get_field('clean_banner');

if ($clean_banner ) :
?>
<div class="banner-clean py-5">
  <div class="container">
  <?php
    while( have_rows('clean_banner') ) : the_row();

        $clean_image = get_sub_field('clean_banner__image');
        $clean_text = get_sub_field('clean_banner__text');
    ?>
    <div class="row">
      <div class="col-md-6">
        <figure class="clean-banner__image">
          <img src="<?php echo $clean_image['url']; ?>" class="image-fit--cover" alt="<?php echo $clean_image['alt']; ?>" />
        </figure>
      </div>
      <div class="col-md-6">
        <div class="clean-banner__text body body--m body--bd"><?php echo $clean_text; ?></div>
      </div>
    </div>
    <?php
    endwhile;
    ?>
  </div>
</div>

<?php
endif;
