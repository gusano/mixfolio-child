<?php global $mixfolio_options;
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Mixfolio
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--<link href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>-->
<!--<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body lang="en" <?php body_class(); ?>>
	<div id="page" class="hfeed">
		<header id="branding" role="banner" data-dropdown="dropdown">
			<div id="branding-inner">
				<div class="container">
					<hgroup id="header-group">
						<div class="row">
							<div class="col-md-3">
								<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo" />
								</a>
							<!--<h1 id="site-title">
								<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<?php if ( isset( $mixfolio_options[ 'mixfolio_logo' ] ) && '' != $mixfolio_options[ 'mixfolio_logo' ] ) { ?>
										<img class="sitetitle" id="logo-image-home" src="<?php echo $mixfolio_options[ 'mixfolio_logo' ]; ?>" alt="<?php bloginfo( 'name' ); ?>" />
									<?php } else {
										bloginfo( 'name' );
									} ?>
								</a>
							</h1>-->
							</div>
							<div class="col-md-3">
								<ul class="categories">
									<li>&nbsp;</li>
									<?php
									/*
									$currentCat = get_category(get_query_var('cat'))->slug;

									$categories = get_categories(array('hide_empty' => 0));
									foreach ($categories as $category) {
										$niceName = $category->category_nicename;
										$class = ($niceName === $currentCat) ? 'active' : '';
										printf('<li class="%s"><a href="%s/category/%s">%s</a></li>', $class, site_url(), $niceName, $category->name);
									}
									*/
										$currentPage = get_query_var('pagename');
										$class = ($currentPage === 'portfolio') ? 'active' : '';
										$link = sprintf('/%/angela/portfolio', $_SERVER['HTTP_HOST']);
										printf('<li class="%s"><a href="%s">Portfolio</a></li>', $class, $link);
									?>
								</ul>
							</div>
							<div class="col-md-2">
								<ul class="categories">
									<li>&nbsp;</li>
									<?php
									/*
									$pages = get_pages();
									$currentPage = get_query_var('pagename');
									foreach ($pages as $page) {
										$link = get_page_link($page->ID);
										$title = $page->post_title;
										$class = ($currentPage === strtolower($title)) ? 'active' : '';
										printf('<li class="%s"><a href="%s">%s</a></li>', $class, $link, $title);
									}
									*/
										$currentPage = get_query_var('pagename');
										$class = ($currentPage === 'reel') ? 'active' : '';
										$link = sprintf('/%/angela/reel', $_SERVER['HTTP_HOST']);
										printf('<li class="%s"><a href="%s">Reel</a></li>', $class, $link);
									?>
								</ul>
							</div>
							<div class="col-md-3 col-md-offset-1">
								<ul class="contact">
									<li>Angela Bravo</li>
									<li><a href="mailto:arte@angelabravo.net">arte@angelabravo.net</a></li>
									<li>+49 157 5067 5079</li>
								</ul>
							</div>
						</div>
					</hgroup>

					<!--<nav role="navigation" class="nav site-navigation main-navigation">
						<h1 class="assistive-text"><?php _e( 'Menu', 'mixfolio' ); ?></h1>
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_s' ); ?>"><?php _e( 'Skip to content', 'mixfolio' ); ?></a></div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>-->

					<!--<div class="hide-on-phones">
						<?php get_search_form(); ?>
					</div>-->
				</div>
			</div>
		</header>

		<div class="main-outer">
			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
					</a>
				</div>
			<?php endif; ?>