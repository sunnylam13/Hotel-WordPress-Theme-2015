<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hospitality
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">

  		<div class="site-info">
        <!-- changes to be made within here -->

  			<aside class="copyright">
          <p>&copy; 2005 - <?php echo date('Y'); ?> Paradise Hotel.  All Rights Reserved</p>   
        </aside>

        <aside class="socialIcons">
          <a href="#"><span class="fa fa-twitter"></span></a>
          <a href="#"><span class="fa fa-facebook"></span></a>
          <a href="#"><span class="fa fa-youtube"></span></a>
          <a href="#"><span class="fa fa-wordpress"></span></a>
          <a href="#"><span class="fa fa-pinterest"></span></a>
        </aside>

        <nav>
          <!-- if you try to enter links manually they won't work, use WordPress built in function to call the menu if it exists/is in use -->
          <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Room &amp; Suites</a></li>
            <li><a href="#">Reservation</a></li>
            <li><a href="#">Contact</a></li>
          </ul> -->

          <?php 
            if ( has_nav_menu( 'footer_menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
                  wp_nav_menu( array( 'theme_location' => 'footer_menu') ); 
            }
          ?>
        </nav>

  		</div><!-- .site-info -->

    </div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
