<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div id="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>
              <h1 class="leftCol"><?php wp_title("", true); ?></h1>

              
             	<div class="submenu">
             	<!-- Left nav listing sub menu -->
          		</div>


            </div><!--leftCol-->
            <div id="rightCol">
                <h1 class="rightColBlue">More articles in category</h1>
            </div>
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>ting sub menu -->
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