<?php
?>

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
<body>
	    <div class="headerImage">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_header6.jpg" />
    </div><!--headerImage -->
    <div id="wrapper">
      <div id="container">
        <header>        
          <div id="wrap">
            <ul class="tabsLeft">
              <li class="burghfield"><a href=" <?php bloginfo('url'); ?>/burghfield">Burghfield</a></li>
              <li class="goring"><a href="<?php bloginfo('url'); ?>/goring">Goring</a></li>
            </ul>
            <ul class="tabsRight">
              <li class="pethealth"><a href="<?php bloginfo('url'); ?>/pet-health-club">Pet Health Club</a></li>
            </ul> 
          </div>
          <div class="header">
            <div id="wrap">
              <div class="logo">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_logoMain.gif"><span class="title">fullyvetted.co.uk</span></a>
              </div><!--logo-->
              <div id="nav">
                <ul class="nav">
                  <li><a href="<?php bloginfo('url'); ?>/shop">Shop<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_basket.gif"></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/blog">Blog <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif"></a>
                    <ul>
                      <?php
                      $args = array( 'numberposts' => 3 );
                      $lastposts = get_posts( $args );
                      foreach($lastposts as $post) : setup_postdata($post); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php endforeach; ?>
                    </ul> 
                  </li>
                  <li><a href="<?php bloginfo('url'); ?>/pet-care">Pet Care<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif"></a>
                    <ul>
                      <?php wp_list_categories('orderby=ID&child_of=6&title_li=&hierarchical=0&number=5') ?>

                    </ul> 
                  </li>
                  <li class="menu1"><a href="<?php bloginfo('url'); ?>/our-practices">Our Practices<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif"></a>
                    <ul>
                      <?php wp_list_pages('child_of=62&sort_column=menu_order&title_li=&depth=1') ?>
                    </ul> 
                  </li>                  
                </ul>
              </div>
            </div> 
          </div>
        </header>   
<!-- end of header  -->