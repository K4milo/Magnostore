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

        <header id="masthead" class="site-header py-0" role="banner">

          <nav class="site-header__nav navbar navbar-expand-lg navbar-default px-0">
            <div class="container-fluid">
              <div class="header w-100">
                  <div class="navbar-header px-3">
                    <a class="navbar-brand show--mobile" href="<?php echo home_url('/'); ?>">
                      <h1 class="brand-image brand--mobile">Magnostore</h1>
                    </a>
                    <button class="navbar-toggler site-header__btn"
                      type="button"
                      data-toggle="collapse"
                      data-target="#navbarTogglerMain"
                      aria-controls="navbarTogglerMain"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon">
                        <span class="material-icons">menu</span>
                      </span>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse"
                      id="navbarTogglerMain">
                    <div class="main-menu">
                      <div class="main-menu-item main-menu__left">
                        <?php
                            wp_nav_menu (
                                array (
                                  'theme_location'    => 'navbar-left',
                                  'menu_class'        => 'navbar-nav--left'
                                )
                            );
                        ?>
                      </div>
                      <div class="main-menu-item main-menu__brand show--desktop">
                        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                          <h2 class="brand-image brand--desktop">Magnostore</h2>
                        </a>
                      </div>
                      <div class="main-menu-item main-menu__right">
                        <?php
                          wp_nav_menu(
                              array(
                                'theme_location'    => 'navbar-right',
                                'menu_class'        => 'navbar-nav--right'
                              )
                          );
                        ?>
                      </div>
                    </div>
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
