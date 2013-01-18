<?php
/*
Template Name: Pet Care
*/
?>


<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="fullWidth">
              <div class="subLogo">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>">
              </div>
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <h1 class="leftCol"><?php the_title(); ?></h1>
              
              <div class="category">
                
                <p><?php the_content(); ?></p>

                    <ul><?php wp_list_categories( array(
                            'taxonomy' => 'subjects',
                            'title_li' => '',
                            'use_desc_for_title' => 1
                            ) 
                          );
                        ?>
                     </ul> 

                     <?php echo category_description(); ?>

                <?php endwhile; else: ?>
                  <p><?php _e('Sorry, this page is empty.'); ?></p>
                <?php endif; ?>

              </div>  
            </div><!--fullWidth-->
          </div><!--wrap-->
        </div>  <!--content-->


<?php get_footer(); ?>

