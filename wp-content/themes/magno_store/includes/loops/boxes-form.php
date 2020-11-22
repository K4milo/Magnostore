<?php
  /**
   * Loop Woocommerce boxes
   *
  */
?>
  <div class="row">
  <?php
    $args = [
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => [
        [
          'taxonomy' => 'product_cat',
          'field'    => 'slug',
          'terms'    => 'cajas',
        ]
      ],
    ];

    $query = new WP_Query($args);

    while($query->have_posts()) : $query->the_post();
        $slug = get_post_field('post_name', get_the_ID()); ?>

    <div class="col-6 col-md-3">
      <div class="multistep__box js-wizard-input" data-id="<?php the_ID(); ?>">
        <input
              type="radio"
              id="product-<?php the_ID(); ?>"
              name="box"
              value="<?php the_ID(); ?>">

        <figure class="js-prod-thumb multistep__thumb image__ar image__ar--11" data-id="<?php the_ID(); ?>">
            <?php the_post_thumbnail('full'); ?>
        </figure>

        <label for="box" class="headline headline--tertiary multistep__label"><?php the_title(); ?></label>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
