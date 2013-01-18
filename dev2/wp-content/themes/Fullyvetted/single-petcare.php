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
             <h2>Pet Care</h2>
              <ul><?php wp_list_categories( array(
                       'taxonomy' => 'subjects',
                      'title_li' => ''
                     )  
                    );
                  ?>
              </ul> 
            </div><!--rightLinks-->
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>