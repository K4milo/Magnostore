<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'storefront_before_site' ); ?>
    <div id="page" class="hfeed site">
        <?php do_action( 'storefront_before_header' ); ?>

        <header id="masthead" class="site-header" role="banner">

              <nav class="site-header__nav navbar navbar-default">
                <div class="container-fluid">
                    <div class="row-header">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed"
                              data-toggle="collapse"
                                data-target="#navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand show--mobile" href="<?php echo home_url('/'); ?>">
                                <h1 class="brand-image brand-image--mobile">Magnostore</h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar">
                          <?php
                              wp_nav_menu (
                                  array (
                                    'theme_location'    => 'navbar-left',
                                    'menu_class'        => 'navbar-nav--left'
                                  )
                              );
                          ?>
                          <div class="menu-brand show--desktop">
                            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                              <h1 class="brand-image brand--desktop">Magnostore</h1>
                            </a>
                          </div>
                          <?php
                            wp_nav_menu(
                                array(
                                  'theme_location'    => 'navbar-right',
                                  'menu_class'        => 'navbar-nav--right'
                                )
                            );
                          ?>
                      </div><!-- /.navbar-collapse -->
                  </div>
              </div><!-- /.container -->
          </nav>
      </header><!-- #masthead -->

        <?php
/**
 * Functions hooked in to storefront_before_content
 *
 * @hooked storefront_header_widget_region - 10
 * @hooked woocommerce_breadcrumb - 10
 */
  do_action( 'storefront_before_content' );
?>
