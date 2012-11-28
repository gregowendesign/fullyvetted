<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div id="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>
              <h1 class="leftCol"><?php wp_title("", true); ?></h1>
            </div><!--leftCol-->
          </div><!--wrap-->
        </div>  <!--content-->
        <footer>
          <div id="footer">
            <div id="wrap">
              <div id="vetDetails" class="vetBurghfield">
                <div class="vetLogo">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_burghfieldLogo.png">
                <div class="vetMap">
                  <a href="<?php bloginfo('url'); ?>/burghfield"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_mapBurghfield.jpg" name="Map Burghfield Vet Surgery" alt="Map Burghfield Vet Surgery"/></a>
                </div>                    
                <h1 class="vetDetails"><a href="<?php bloginfo('url'); ?>/burghfield"><?php echo get_post_meta(22, 'vet_name', true); ?></a></h1>
                  <p><?php echo get_post_meta(22, 'vet_address1', true); ?>
                  </br><?php echo get_post_meta(22, 'vet_address2', true); ?>
                  </br><?php echo get_post_meta(22, 'vet_Postcode', true); ?>                
                  <p><span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneGreen.gif"></span><?php echo get_post_meta(22, 'vet_tel', true); ?>
                </div>
              </div>
              <div id="vetDetails" class="vetGoring">
                <div class="vetLogo">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_goringLogo.png">
                <div class="vetMap">
                  <a href="<?php bloginfo('url'); ?>/goring"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_mapGoring.jpg" name="Map Goring Vet Centre" alt="Map Goring Vet Centre"/></a>
                </div>                    
                <h1 class="vetDetails"><a href="<?php bloginfo('url'); ?>/goring"><?php echo get_post_meta(24, 'vet_name', true); ?></a></h1>
                  <p><?php echo get_post_meta(24, 'vet_address1', true); ?>
                  </br><?php echo get_post_meta(24, 'vet_address2', true); ?>
                  </br><?php echo get_post_meta(24, 'vet_Postcode', true); ?> 
                  <p><span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneBlue.gif"></span></span><?php echo get_post_meta(22, 'vet_tel', true); ?>  
                </div>
              </div>

<?php get_footer(); ?>

<?php
/*
Template Name: Pet Health Club
*/
?>
