<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/340a8b86-346f-4376-a291-e1328c379340.css"/>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <div class="headerImage">
        <img src="images/img_surgeryHeader.jpg" />
    </div><!--headerImage -->
    <div id="wrapper">
      <div id="container">
        <header>        
          <div id="wrap">
            <ul class="tabs">
              <li class="burghfield"><a href="burghfield.html">Burghfield</a></li>
              <li class="goring"><a href="goring.html">Goring</a></li>
            </ul> 
          </div>
          <div class="header">
            <div id="wrap">
              <div class="logo">
                <a href="index.html"><img src="images/img_logoMain.gif"><span class="title">fullyvetted.co.uk</span></a>
              </div><!--logo-->
              <div id="nav">
                <ul class="nav">
                  <li><a href="#">Shop <img src="images/img_basket.gif"></a></li>
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Blog <img src="images/img_navArrow.gif"></a>
                    <ul class="nav">
                      <li><a href="#">Article one</a></li>
                      <li><a href="#">Article two</a></li>
                      <li><a href="#">Article with a really quite long heading</a></li>
                    </ul> 
                  </li>
                  <li><a href="#">Pet Care <img src="images/img_navArrow.gif"></a>
                    <ul class="nav">
                      <li><a href="#">How to videos</a></li>
                      <li><a href="#">Inscructions</a></li>
                      <li><a href="#">Post-operative care</a></li>
                    </ul> 
                  </li>
                </ul>
              </div><!--nav-->
            </div> <!--wrap-->
          </div><!--header-->
        </header>    

<!-- end of header  -->