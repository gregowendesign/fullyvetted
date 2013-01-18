<?php get_header(); ?>

	<div id="content">
		<div id="wrap">
			<div class="headerTagline">
              <h1>...caring for you and your pet</h1>
            </div><!--headerTagline-->
			<div class="fullWidth">
	            <div class="subLogo">
	            	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"/>
	            </div>
				<h1 class="leftCol">Oops! Something went wrong</h1>

				<div class="sitemap">
					<ul>
						<?php wp_list_categories('&title='); ?>
					</ul>
				</div>

				<div class="sitemap">
					<ul>
						<?php wp_list_categories( array(
                          'taxonomy' => 'subjects',
                          'title_li' => ''
                         ) );
                        ?>
					</ul>
				</div>

				<div class="sitemap">
					<ul>
						<?php
                      $args = array( 'numberposts' => 10 );
                      $lastposts = get_posts( $args );
                      foreach($lastposts as $post) : setup_postdata($post); ?>
                      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                      <?php endforeach; ?>
					</ul>
				</div>


								
			</div><!-- leftCol -->
		</div><!-- #wrap -->
	</div><!-- #content -->

<?php get_footer(); ?>