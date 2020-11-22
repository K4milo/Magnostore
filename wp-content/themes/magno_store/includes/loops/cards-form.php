<?php
  /**
   * Loop Woocommerce cards
   *
  */
?>

<?php

$term_childs = get_term_children(41, 'product_cat');

foreach($term_childs as $prod_cat):

    $term = get_term_by('id', $prod_cat, 'product_cat'); ?>

      <div class="multistep__category text-center"
           id="<?php echo $term->slug; ?>">
        <h4 class="headline headline--secondary"><?php echo $term->name; ?></h4>
      </div>
      <div class="row justify-content-center">
        <?php
        $args = [
          'post_type' => 'product',
          'posts_per_page' => -1,
          'tax_query' => [
              [
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => [$term->slug],
              ],
            ],
          ];

        $query = new WP_Query($args);
        while($query->have_posts()) : $query->the_post();
            $slug = get_post_field('post_name', get_the_ID()); ?>

        <div class="col-2 col-md-3">
          <div class="multistep__card js-wizard-input" data-id="<?php the_ID(); ?>">
            <input
                  type="radio"
                  id="product-<?php the_ID(); ?>"
                  name="card"
                  value="<?php the_ID(); ?>">
            <figure class="js-prod-thumb multistep__thumb" data-id="<?php the_ID(); ?>">
                <?php the_post_thumbnail('full'); ?>
            </figure>
          </div>
        </div>
            <?php
        endwhile; ?>
      </div>
        <?php
endforeach; ?>
