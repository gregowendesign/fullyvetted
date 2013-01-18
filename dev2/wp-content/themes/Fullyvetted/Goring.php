<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_goringLogo.png" name="Burghfield Veterinary Surgery" alt="Burghfield Veterinary Surgery"></div>
              <h1 class="leftCol"><?php echo get_post_meta(24, 'vet_name', true); ?></h1>
                <div class="vetOverview">
                  <span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneBlue.gif"></span><?php echo get_post_meta(24, 'vet_tel', true); ?>
                  </br><span class="blueBold">Opening hours</span>
                  </br><?php echo get_post_meta(24, 'vet_hours', true); ?>
                  </br><span class="blueBold">Facilities</span>
                  </br><?php echo get_post_meta(24, 'vet_facilities', true); ?>
                </div><!--vetOverview-->
                <p><?php echo get_post_meta(24, 'vet_desc', true); ?>
                <div class="btn register">
                  <a href="<?php bloginfo('url'); ?>/?page_id=13"><span class="btnText">Register Your Pet</span></a>
                </div><!--btn-->
                <h1 class="goringTeam">Meet the Goring team</h1>

<!--********************************************************************************************************-->


                <!--Insert loop to get all staff for Goring-->
                
                 <?php
                    $args = array( 'post_type' => 'staff', 'location' => 'goring', 'order' => 'ASC', 'posts_per_page' => '-1' );
                    $loop = new WP_Query( $args );

                    
                      while ( $loop->have_posts() ) : $loop->the_post(); 
                      $creds = get_post_meta(get_the_ID(), 'staff_creds', true);
                      $title = get_post_meta(get_the_ID(), 'staff_title', true);
                      $pets = get_post_meta(get_the_ID(), 'staff_pets', true);
                      ?>

                        <div class="memberItemGoring">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php echo $creds ?>
                        <br>
                        <?php echo $title ?>
                        <br><span class="blueText"><?php echo $pets ?></span>
                        </div>
                       
                      <?php endwhile; ?>

<!--********************************************************************************************************-->

            </div><!--leftCol-->
            <div class="rightCol">
              <div class="btnRight burghfieldBtn">
                  <a href="<?php bloginfo('url'); ?>/?page_id=2"><span class="btnTextBurghfield">Burghfield Veterinary Surgery</span></a>
              </div><!--btn-->              
              <div class="mapStyle">
<iframe width="390" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?q=rg8+9ar&amp;hl=en&amp;sll=52.8382,-2.327815&amp;sspn=9.362701,26.784668&amp;t=m&amp;hnear=Goring+RG8+9AR,+United+Kingdom&amp;ie=UTF8&amp;hq=&amp;ll=51.522737,-1.13657&amp;spn=0.019226,0.033388&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
              </div><!--MAPSTYLE-->
              <div class="directions">
                <h1 class="rightColBlue"><?php echo get_post_meta(24, 'vet_name', true); ?></h1>
                <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneBlueDirections.gif"></span><?php echo get_post_meta(24, 'vet_tel', true); ?></h2>
                <p><?php echo get_post_meta(24, 'vet_address1', true); ?>
                  </br><?php echo get_post_meta(24, 'vet_address2', true); ?>
                  </br><?php echo get_post_meta(24, 'vet_Postcode', true); ?>
                  <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_directionsBlue.gif"></span>How to find us</h2>
                  <p><?php echo get_post_meta(24, 'vet_find', true); ?>
                  <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_parkingBlue.gif"></span>Parking</h2>
                  <p><?php echo get_post_meta(24, 'vet_parking', true); ?>
              </div><!--directions-->
            </div>
          </div><!--wrap-->
        </div>  <!--content-->

            	
<?php get_footer(); ?>

<?php
/*
Template Name: Goring
*/
?>