<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>
 
             <h1 class="leftCol">Blog</h1>

                    <ul>
                      <?php
                    $args = array( 'post_type' => 'post' );
                    $loop = new WP_Query( $args );

                    
                      while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li>
                        <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </br>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
                        <?php the_excerpt(); ?>
                    </li>
                        
                      <?php endwhile; ?>

                    </ul> 

            </div><!--leftCol-->
            <div class="rightLinks">
                <h2>Categories</h2>
                <ul>
                  <?php wp_list_categories('orderby=ID&title_li=&hierarchical=0'); ?>
                </ul> 
            </div>
          </div><!--wrap-->
        </div>  <!--content-->
              
            	
<?php get_footer(); ?>

<?php
/*
Template Name: Blog
*/
?>