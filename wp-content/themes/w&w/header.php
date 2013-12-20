<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php bloginfo( 'template_directory' ); ?>/js/respond.min.js"></script>
	<![endif]-->
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
	<?php include_once("analyticstracking.php") ?>
</head>
<body <?php body_class(); ?>>
	<div class="header-tab">
	</div>
	<div class="wrapper clearfix">
		<header>
			<div class="header-container">
				<?php
	                $header_logo=array(
	                        'post_type' => 'header_logo',
	                        'posts_per_page' => 1
	                    );
	                    if ( have_posts() ) {
	                        query_posts($header_logo);
	                            // The Loop
	                            while (have_posts()){
	                                the_post();
	                                	echo "<div class='header-social'><a class='facebook' href='";
	                                    the_field('facebook_url');
										echo"'><p>F</p></a><p>/</p><a class='twitter' href='";
										the_field('twitter_url');
										echo"'><p>T</p></a></div><div class='header-logo'><a class='logo clearfix' href='";home_url();echo"/'>";
	                                    the_content();
	                                    echo"</a></div>";
	                            }// end while
	                    } // end if
	                    wp_reset_postdata();
	                wp_reset_query();
	          	?>
			</div>
			<nav role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</header>
