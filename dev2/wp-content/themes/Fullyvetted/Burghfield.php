<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div class="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_burghfieldLogo.png" name="Burghfield Veterinary Surgery" alt="Burghfield Veterinary Surgery"></div>
              <h1 class="leftCol"><?php echo get_post_meta(22, 'vet_name', true); ?></h1>
                <div class="vetOverview">
                  <span class="smallIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneGreen.gif"></span><?php echo get_post_meta(22, 'vet_tel', true); ?>
                  </br><span class="greenBold">Opening hours</span>
                  </br><?php echo get_post_meta(22, 'vet_hours', true); ?>
                  </br><span class="greenBold">Facilities</span>
                  </br><?php echo get_post_meta(22, 'vet_facilities', true); ?>
                </div><!--vetOverview-->
                <p><?php echo get_post_meta(22, 'vet_desc', true); ?>
                <div class="btn register">
                  <!--ADD link to contact page-->
                  <a href="<?php bloginfo('url'); ?>/?page_id=13"><span class="btnText">Register Your Pet</span></a>
                </div><!--btn-->
                <h1 class="burghfieldTeam">Meet the Burghfield team</h1>

                

<!--********************************************************************************************************-->

                <!--Insert loop to get all staff for Burghfield-->
                
                 <?php
                    $args = array( 'post_type' => 'staff', 'location' => 'burghfield', 'order' => 'ASC', 'posts_per_page' => '-1');
                    $loop = new WP_Query( $args );

                    
                      while ( $loop->have_posts() ) : $loop->the_post(); 
                      $creds = get_post_meta(get_the_ID(), 'staff_creds', true);
                      $title = get_post_meta(get_the_ID(), 'staff_title', true);
                      $pets = get_post_meta(get_the_ID(), 'staff_pets', true);
                      ?>

                        <div class="memberItemBurgh">
                        <?php the_post_thumbnail(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php echo $creds ?>
                        <br>
                        <?php echo $title ?>
                        <br><span class="greenText"><?php echo $pets ?></span>
                        </div>
                       
                      <?php endwhile; ?>

<!--********************************************************************************************************-->

            </div><!--leftCol-->
            <div class="rightCol">
              <div class="btnRight goringBtn">
                  <a href="<?php bloginfo('url'); ?>/?page_id=5"><span class="btnTextGoring">Goring Veterinary Centre</span></a>
              </div><!--btn-->              
              <div class="mapStyle">
                <iframe width="390" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?ie=UTF8&amp;q=burghfield+vets+map&amp;fb=1&amp;gl=uk&amp;hq=vets&amp;hnear=0x48769c03c7a15215:0x4bdbdbb4ebc3aaae,Burghfield,+West+Berkshire&amp;cid=0,0,4520204691774221330&amp;t=m&amp;ll=51.398456,-1.052585&amp;spn=0.004819,0.008368&amp;z=16&amp;output=embed"></iframe></div><!--MAPSTYLE-->
              <div class="directions">
                <h1 class="rightColGreen"><?php echo get_post_meta(22, 'vet_name', true); ?></h1>
                <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_phoneGreenDirections.gif"></span><?php echo get_post_meta(22, 'vet_tel', true); ?></h2>
                <p><?php echo get_post_meta(22, 'vet_address1', true); ?>
                  </br><?php echo get_post_meta(22, 'vet_address2', true); ?>
                  </br><?php echo get_post_meta(22, 'vet_Postcode', true); ?>
                  <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_directionsGreen.gif"></span>How to find us</h2>
                  <p><?php echo get_post_meta(22, 'vet_find', true); ?>
                  <h2><span class="rightColIcon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_parkingGreen.gif"></span>Parking</h2>
                  <p><?php echo get_post_meta(22, 'vet_parking', true); ?>
              </div><!--directions-->
            </div>
          </div><!--wrap-->
        </div>  <!--content-->

<?php get_footer(); ?>

<?php
/*
Template Name: Burghfield
*/
?>