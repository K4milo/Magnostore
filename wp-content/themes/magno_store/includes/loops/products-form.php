<?php
  /**
   * Loop Woocommerce categories
   *
  */

$args = [
  'taxonomy'   => 'product_cat',
  'hide_empty' => true,
  'parent'     => 0,
  'exclude'    => [15,27,28,35,40,41]
];

$categories = get_categories($args);
$nav_i = 0;
$tab_i = 0;

?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <?php
    foreach($categories as $prod_cat): ?>
  <li class="nav-item">
    <a
      class="nav-link <?php echo ($nav_i == 0) ? 'active' : ''; ?>"
      id="pills-<?php echo $prod_cat->slug; ?>-tab"
      data-toggle="pill"
      href="#pills-<?php echo $prod_cat->slug; ?>"
      role="tab"
      aria-controls="pills-<?php echo $prod_cat->slug; ?>"
      aria-selected="<?php echo ($nav_i == 0) ? 'true' : 'false'; ?>"><?php echo $prod_cat->name; ?></a>
  </li>
        <?php
        $nav_i++;
    endforeach; ?>
</ul>
<div class="tab-content" id="pills-tabContent">
<?php
foreach($categories as $prod_cat):?>
  <div
    class="tab-pane fade<?php echo ($tab_i == 0) ? ' show active ' : '';?>"
    id="pills-<?php echo $prod_cat->slug; ?>"
    role="tabpanel"
    aria-labelledby="pills-<?php echo $prod_cat->slug; ?>-tab">

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

      <div class="col-6 col-md-3">
        <div class="multistep__box js-wizard-input" data-id="<?php the_ID(); ?>">
          <input type="checkbox" id="product-<?php the_ID(); ?>"
                name="product" value="<?php the_ID(); ?>">
          <figure class="js-prod-thumb multistep__thumb image__ar image__ar--11 image__ar--contain" data-id="<?php the_ID(); ?>">
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
  </div>

    <?php
    $tab_i++;
endforeach; ?>
</div>
