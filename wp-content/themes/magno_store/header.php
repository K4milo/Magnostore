<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
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
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
		          <h1 class="brand-image">Lili buy</h1>
		        </a>
		      </div>
		      <div class="collapse navbar-collapse" id="navbar"> 
		        <?php
		            wp_nav_menu( array(
		                'theme_location'    => 'navbar-left',
		                'depth'             => 2,
		                'menu_class'        => 'nav navbar-nav navbar-nav--left',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?> 
		        <div class="menu-social">  
		        	<?php
		        	    wp_nav_menu( array(
		        	        'theme_location'    => 'social-menu',
		        	        'menu_class'        => 'menu-social--social')
		        	    );
		        	?> 
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

	<div id="content" class="site-content" tabindex="-1">
		<div class="container-fluid">

		<?php
		do_action( 'storefront_content_top' );