<?php
  /**
   * Loop Woocommerce cards
   *
  */
?>

<?php

$term_childs = get_term_children(41, 'product_cat');
$nav_i = 0;
$tab_i = 0;
?>
<ul class="nav nav-pills mb-3 multistep__nav" id="pills-tab" role="tablist">
  <?php
    foreach($term_childs as $prod_cat):
        $term = get_term_by('id', $prod_cat, 'product_cat'); ?>
  <li class="nav-item multistep__nav-item">
    <a
      class="nav-link <?php echo ($nav_i == 0) ? 'active' : ''; ?> button button--negative
      eyebrow eyebrow--2 eyebrow--uppercase button__content multistep__nav-link"
      id="pills-<?php echo $term->slug; ?>-tab"
      data-toggle="pill"
      href="#pills-<?php echo $term->slug; ?>"
      role="tab"
      aria-controls="pills-<?php echo $term->slug; ?>"
      aria-selected="<?php echo ($nav_i == 0) ? 'true' : 'false'; ?>"><?php echo $term->name; ?></a>
  </li>
        <?php
        $nav_i++;
    endforeach; ?>
</ul>
<div class="tab-content" id="pills-tabContent">
<?php
foreach($term_childs as $prod_cat):
    $term = get_term_by('id', $prod_cat, 'product_cat'); ?>
  <div
    class="tab-pane fade<?php echo ($tab_i == 0) ? ' show active ' : '';?>"
    id="pills-<?php echo $term->slug; ?>"
    role="tabpanel"
    aria-labelledby="pills-<?php echo $term->slug; ?>-tab">

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
          <div class="multistep__box js-wizard-input" data-type="card" data-id="<?php the_ID(); ?>">
            <input
                  type="radio"
                  id="product-<?php the_ID(); ?>"
                  name="card"
                  value="<?php the_ID(); ?>">
            <figure class="js-prod-thumb multistep__thumb" data-name="radio" data-id="<?php the_ID(); ?>">
                <?php the_post_thumbnail('full'); ?>
            </figure>
          </div>
        </div>
            <?php
        endwhile; ?>
      </div>
  </div>
        <?php
        $tab_i++;
endforeach; ?>
</div>

