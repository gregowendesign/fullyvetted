<?php get_header(); ?>

	<div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>

              <?php if ( have_posts() ): ?>

              <h1 class="leftCol"><?php the_title(); ?></h1>

                <ul>
                  <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </br>
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
                    </li>
              
                  <?php endwhile; ?>
                </ul>

                <?php else: ?>
                Sorry, there are currently no posts to display in <?php echo single_cat_title( '', false ); ?>
                <?php endif; ?>
            </div><!--leftCol-->
            
            <div class="rightLinks">
                <h2>Pet Care</h2>
                <ul>
                  <!--<?php wp_list_pages('child_of=62&sort_column=menu_order&title_li=&depth=1') ?> -->
                  <?php wp_list_categories('orderby=ID&child_of=6&title_li=&hierarchical=0&show_count=1') ?>
                </ul> 
            </div>
          </div><!--wrap-->
        </div>  <!--content-->
	


<?php get_footer(); ?>