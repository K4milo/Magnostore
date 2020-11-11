<?php
  /**
   * Loop Woocommerce categories
   *
  */

$args = [
  'taxonomy' => 'product_cat',
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty' => true,
  'exclude' => [15,27,28,35,40,41]
];

$categories = get_categories($args);

foreach($categories as $prod_cat):?>
  <div class="multistep__category text-center" id="<?php echo $prod_cat->slug; ?>">
    <h4 class="headline headline--secondary"><?php echo $prod_cat->name; ?></h4>
  </div>
  <div class="row">

    <?php
      $args = [
      'post_type' => 'product',
      'posts_per_page' => -1,
      'tax_query' => [
        'relation' => 'AND',
          [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => ['producto-unitario'],
          ],
          [
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => [$prod_cat->slug],
          ],
        ],
      ];

      $query = new WP_Query($args);
      while($query->have_posts()) : $query->the_post();
          $price = get_post_meta(get_the_ID(), '_price', true); ?>

    <div class="col-2 col-md-3">
      <div class="multistep__product">
        <input type="checkbox" id="product-<?php the_ID(); ?>"
               name="product" value="<?php the_ID(); ?>">
        <figure class="multistep__thumb">
          <?php the_post_thumbnail('full'); ?>
        </figure>
        <h3 class="headline heaadline--secondary multistep__label" for="product-<?php the_ID(); ?>">
          <?php the_title(); ?>
        </h3>
        <h4 class="headline headline--tertiary"><?php echo wc_price($price);?></h4>
      </div>
    </div>

      <?php endwhile; ?>
  </div>

    <?php
endforeach; ?>
