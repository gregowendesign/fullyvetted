<?php get_header(); ?>

        <div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div id="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>
              <h1 class="leftCol"><?php wp_title("", true); ?></h1>
              <div class="leftNav">
                <ul>
                  <?php wp_list_categories('orderby=ID&child_of=6&title_li=&hierarchical=0') ?>
                </ul> 
              </div>  

              <?php the_content(); ?>

            </div><!--leftCol-->


            <div class="rightLinks">
                <h2>Our Practices</h2>
                <ul>
                  <?php wp_list_pages('child_of=62&sort_column=menu_order&title_li=&depth=1') ?>
                </ul> 
            </div>
          </div><!--wrap-->
        </div>  <!--content-->


<?php get_footer(); ?>

<?php
/*
Template Name: Pet Care
*/
?>
