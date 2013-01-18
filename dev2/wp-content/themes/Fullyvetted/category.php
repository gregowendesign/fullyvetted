<?php get_header(); ?>


	<div id="content">
          <div id="wrap">
            <div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
            <div id="leftCol">
              <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>

				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<h1 class="leftCol"><?php wp_title("", true); ?></h1>

				<?php endwhile; ?>

				<?php else : ?>

				<h1 class="leftCol"> <?php _e( 'Whoops! '); ?></h1>
				<p>We didn't find any content related to the link you clicked. Try something else instead!</p>

				<?php endif; ?>

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
        </ul>

                <?php else: ?>
                Sorry, there are currently no posts to display in <?php echo single_cat_title( '', false ); ?>
                <?php endif; ?>
            </div><!--leftCol-->
            
            <div class="rightLinks">
                <h2>Pet Care</h2>
                <ul>
                  <?php wp_list_categories('orderby=ID&title_li=&hierarchical=0&show_count=1') ?>
                </ul> 
            </div>
          </div><!--wrap-->
        </div>  <!--content-->
	



<?php get_footer(); ?>
