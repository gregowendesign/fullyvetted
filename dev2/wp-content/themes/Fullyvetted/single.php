<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <h1 class="leftCol"><?php the_title(); ?></h1>

                <?php the_content(); ?>

                <?php endwhile; else: ?>
                  <p><?php _e('Sorry, this page is empty.'); ?></p>
                <?php endif; ?>

              
             	<div class="submenu">
             	<!-- Left nav listing sub menu -->
          		</div>


            </div><!--leftCol-->
            <div class="rightLinks">
                <h2>Recent blog articles...</h2>
                <ul>
                  <?php
                      $args = array( 'numberposts' => 10 );
                      $lastposts = get_posts( $args );
                      foreach($lastposts as $post) : setup_postdata($post); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php endforeach; ?>
                </ul>               
            </div>
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>