<?php
/*
Template Name: Pet Health Club
*/
?>


<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="fullWidth">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_save.png" name="Save 20% or more" alt="Save 20% or more"></div>
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="PetClubTitle" "cf:before" "cf:after">

                <div class="PetHealthLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_PetHealthClubLogo.png" name="<?php the_title(); ?>" alt="<?php the_title(); ?>"></div>
                <h1 class="petClub"><?php the_title(); ?></h1>
                
              
              </div>  
                            
              <?php the_content(); ?>

              <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page is empty.'); ?></p>
              <?php endif; ?>

            </div><!--leftCol-->
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>

