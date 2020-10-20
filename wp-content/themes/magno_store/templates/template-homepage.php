<?php
/**
 * Template name: Homepage Magno
 */

  get_header();
  get_template_part('includes/banners/banner', 'hero');
  get_template_part('includes/loops/category', 'menu');
  get_template_part('includes/banners/banner', 'callout');
  get_template_part('includes/images/image', 'full');
  get_template_part('includes/banners/banner', 'clean');
  get_footer();
