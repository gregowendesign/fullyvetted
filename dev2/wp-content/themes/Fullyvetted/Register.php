<?php
/*
Template Name: Register
*/
?>

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
                  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div><!--leftCol-->


            <div class="instructions">
                <h2>Easy Registration!</h2>
                <h3>Register Online</h3>
                <p>If you'd prefer you can fill out this form opposite to register with us. All we need are a few of you and your pets details. Once received we will contact you about what to do next. It's that simple.</p>
                <h3>Or, just call us</h3>
                <p>If you'd prefer to talk to someone in person, just pick up the phone and call.</p>
                <p><span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneGreen.gif"></span>Burghfield &nbsp;<?php echo get_post_meta(22, 'vet_tel', true); ?></p>
                <p><span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneBlue.gif"></span>Goring &nbsp;<?php echo get_post_meta(24, 'vet_tel', true); ?></p>
            </div> 
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>