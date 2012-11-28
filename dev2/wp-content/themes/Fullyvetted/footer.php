<?php
?>
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
              <div id="footerLinks">
                <div class="column">
                  <h1>Our Practices</h1>
                    <ul>
                      <?php wp_list_pages('child_of=62&sort_column=menu_order&title_li=&depth=1') ?>
                    </ul>
                </div>
                <div class="column">
                  <h1>Pet Care</h1>
                    <ul>
                      <?php wp_list_categories('orderby=ID&child_of=6&title_li=&hierarchical=0') ?>
                    </ul>
                </div>
                <div class="column">
                  <h1>Pet Health Club</h1>
                    <ul>
                      <!--<?php wp_list_pages('child_of=67&sort_column=menu_order&title_li=&depth=1') ?>-->
                    </ul>
                </div>

                <div class="column">
                  <h1>Follow us</h1>
                    <ul class="social">
                      <li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_facebook.gif" name="facebook" alt="facebook"></a></li>
                      <li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_twitter.gif" name="twitter" alt="twitter"></a></li>
                      <li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_youtube.gif" name="youtube" alt="youtube"></a></li>
                    </ul>
                </div>
              </div>
            </div><!--wrap-->
          </div><!--footer-->  
        </footer>
        <div id="credits">
          <div id="wrap">
            <span class="legal">Copyright &copy; 2012 fullyvetted.co.uk All rights reserved
            </br> Website by <a href="http://www.gregowendesign.co.uk" title="gregowendesign">gregowendesign</a></span>
          </div>  
        </div>  
      </div><!--container-->
    </div><!--wrapper-->  
  </body>
</html>