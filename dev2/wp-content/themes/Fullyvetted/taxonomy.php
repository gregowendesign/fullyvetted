<?php get_header(); ?>


	<div id="content">
    <div id="wrap">
      <div class="headerTagline">
        <h1>...caring for you and your pet</h1>
      </div><!--headerTagline-->
      <div class="leftCol">
        <div class="subLogo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/img_fullyvettedLogo.png" name="Fullyvetted.co.uk" alt="<?php the_title(); ?>"></div>

        <h1 class="leftCol"><?php echo single_tag_title( '', false ); ?></h1>

        <?php if ( have_posts() ): ?>

          <?php while ( have_posts() ) : the_post(); ?>
            <ul>
              <li>
                <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></br>
                <?php the_excerpt(); ?>
              </li>
            </ul>
          <?php endwhile; ?>

          <?php else: ?>
            Sorry, there are currently no posts to display in <?php echo single_cat_title( '', false ); ?>
          <?php endif; ?>

      </div><!--leftCol-->
            
      <div class="rightLinks">
          <h2>Pet Care</h2>
          <ul><?php wp_list_categories( array(
                   'taxonomy' => 'subjects',
                  'title_li' => ''
                 ) 
                );
              ?>
          </ul> 
        </div>
    </div><!--wrap-->
  </div>  <!--content-->
	



<?php get_footer(); ?>
