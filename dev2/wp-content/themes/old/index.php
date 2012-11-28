<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
          <div id="wrap">
            <ul class="tabs">
              <li class="burghfield"><a href="burghfield.html">Burghfield</a></li>
              <li class="goring"><a href="goring.html">Goring</a></li>
            </ul> 
          </div>
          <div class="header">
            <div id="wrap">
              <div class="logo">
                <a href="index.html"><img src="images/img_logoMain.gif"><span class="title">fullyvetted.co.uk</span></a>
              </div><!--logo-->
              <div id="nav">
                <ul class="nav">
                  <li><a href="#">Shop <img src="images/img_basket.gif"></a></li>
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Blog <img src="images/img_navArrow.gif"></a>
                    <ul class="nav">
                      <li><a href="surgery.html">Article one</a></li>
                      <li><a href="surgery.html">Article two</a></li>
                      <li><a href="surgery.html">Article with a really quite long heading</a></li>
                    </ul> 
                  </li>
                  <li><a href="#">Pet Care <img src="images/img_navArrow.gif"></a>
                    <ul class="nav">
                      <li><a href="surgery.html">How to videos</a></li>
                      <li><a href="surgery.html">Inscructions</a></li>
                      <li><a href="surgery.html">Post-operative care</a></li>
                    </ul> 
                  </li>
                </ul>
              </div><!--nav-->
            </div> <!--wrap-->
          </div><!--header-->
        </header>    
        <div id="content">
          <div id="wrap">
            <div id="intro">
              <h1>We’re a <span class="italic">friendly, caring, </span>&amp; <span class="italic">experienced</span> Veterinary practice based in <span class="green"><a href="#">Burghfield</a></span> &amp; <span class="blue"><a href="#">Goring</a></span>. </h1>
              <p>Your team of vets, nurses and receptionists consists 100% of animal lovers.  It goes without saying that our top priority is to care for your pets and make sure they receive first class healthcare.
              <p>We also know how worrying it is to have a sick pet so we promise to look after you too.
            </div>
            <div class="tagline">
              <h2><span class="line1">Burghfield and Goring Vets</span>
              </br><span class="line2">...caring for you and your pet</h2></span>
            </div>
          </div>
        </div>  <!--content -->
        <footer>
          <div id="footer">
            <div id="wrap">
              <div id="vetDetails" class="vetBurghfield">
                <div class="vetLogo">
                  <img src="images/img_burghfieldLogo.png">
                <div class="vetMap">
                  <img src="images/img_mapBurghfield.jpg" name="Map Burghfield Vet Surgery" alt="Map Burghfield Vet Surgery"/>
                </div>                    
                <h1 class="vetDetails">Burghfield Veterinary Surgery</h1>
                  <p>1 Tarragon Way
                  </br>Burghfield Common
                  </br>RG7 3YU                
                  <p><span class="smallIcon"><img src="images/img_phoneGreen.gif"></span>0118 983 2465
                </div>
              </div>
              <div id="vetDetails" class="vetGoring">
                <div class="vetLogo">
                  <img src="images/img_goringLogo.png">
                <div class="vetMap">
                  <img src="images/img_mapGoring.jpg" name="Map Goring Vet Centre" alt="Map Goring Vet Centre"/>
                </div>                    
                <h1 class="vetDetails">Goring Veterinary Centre</h1>
                  <p>17C High Street
                  </br>Goring-On-Thames
                  </br>RG8 9AR
                  <p><span class="smallIcon"><img src="images/img_phoneBlue.gif"></span>
                  01491 873638
                </div>
              </div>
<?php get_footer(); ?>