<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package apT
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel="stylesheet" id="apt-style-css" href="http://127.0.0.1:8080/wordpress/wp-content/themes/OranjeStrap/libs/bootstrap/css/bootstrap.css?ver=3.0" type="text/css" media="all">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!-- Navigation bar -->
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	        </div>
	        <div class="navbar-collapse collapse">
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'primary',
						'container' => false,
						'menu_class' => 'nav navbar-nav'

						) 
					); 
				?>
	        </div><!--/.nav-collapse -->
      	</div>
    </div>
    <!-- End Navigation -->

	<?php do_action( 'before' ); ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
