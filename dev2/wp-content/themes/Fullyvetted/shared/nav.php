         <header>        
          <div id="wrap">
            <ul class="tabsLeft">
              <li class="burghfield"><a href="<?php bloginfo('url'); ?>/?page_id=2">Burghfield</a></li>
              <li class="goring"><a href="<?php bloginfo('url'); ?>/?page_id=5">Goring</a></li>
            </ul>
            <ul class="tabsRight">
              <li class="pethealth"><a href="<?php bloginfo('url'); ?>/?page_id=106"><!--<span class="pethealth_icon"></span>-->Pet Health Club</a></li>
            </ul> 
          </div>
          <div class="header">
            <div id="wrap">
              <div class="logo">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_logoMain.gif"><span class="title">fullyvetted.co.uk</span></a>
              </div><!--logo-->
              <div id="nav">
                <ul class="nav">
                  <li><a href="<?php bloginfo('url'); ?>/?page_id=15 ">Shop<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_basket.gif"></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/?page_id=11">Blog <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif"></a>
                    <ul>
                      <?php
                      $args = array( 'numberposts' => 3 );
                      $lastposts = get_posts( $args );
                      foreach($lastposts as $post) : setup_postdata($post); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php endforeach; ?>
                    </ul> 
                  </li>
                  <li><a href="<?php bloginfo('url'); ?>/?page_id=9">Pet Care<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif"></a>
                    <ul><?php wp_list_categories( array(
                          'taxonomy' => 'subjects',
                          'title_li' => ''
                         ) );
                        ?>
                    </ul> 
                  </li>
                  <li class="menu1">Our Practices<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_navArrow.gif">
                    <ul>
                      <?php wp_list_pages('child_of=62&sort_column=menu_order&title_li=&depth=1') ?>
                    </ul> 
                  </li>                  
                </ul>
              </div>
            </div> 
          </div>
        </header>   