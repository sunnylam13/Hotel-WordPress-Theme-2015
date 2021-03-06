<?php
/**
 * The template for the front page.
 *
 *
 * @package hospitality
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <section class="masthead">
      <div class= "gallery js-flickity" 
        data-flickity-options='
          { 
            "imagesLoaded": true,
            "cellSelector": "img"
          }
        '>
        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow3.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow1.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slideshow2.jpg" alt="">
      </div>
      <div class="overlay">
        <div class="container">
          <h2>Collaboratively administrate empowered markets</h2>
          <h3>via plug-and-play</h3>
        </div>
      </div>
    </section><!--#masthead -->
    
    <div class="container">
      <section class="booking-console">
        <header>
          <h4>Reservations</h4>
          <p>Book online with us.</p>
        </header>
        <form action="" class="book">
          <div class="field">
            <label for="roomType">Type of Room:</label>
            <select name="roomType" id="roomType">
              <option value="room">Room</option>
              <option value="suite">Suite</option>
              <option value="presSuite">Presidential Suite</option>
            </select>
          </div>
          <div class="field">
            <label for="checkIn">Check In:</label>
            <input type="text" name="checkIn" id="checkIn" class="checkIn datepicker">
            <i class="fa fa-calendar"></i>
          </div>
          <div class="field">
            <label for="checkOut">Check Out:</label>
            <input type="text" name="checkOut" id="checkOut" class="checkIn datepicker">
            <i class="fa fa-calendar"></i>
          </div>
          <div class="field small">
            <label for="adults">Adults:</label>
            <select name="adults" id="adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="field small">
            <label for="children">Children:</label>
            <select name="children" id="children">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="field btn">
            <button class="submit" type="submit">Book Now</button>
          </div>
        </form>
      </section>      
    </div>

    <main id="main" class="site-main" role="main">
      <div class="container">
        
        <ul class="roomTypes">
          <?php //Arguments for query ?>
          <?php $args = array(
            'category_name' => 'room-type',
            'posts_per_page' => 3
          ); ?>
          <?php // The Query ?>
          <?php $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <li>
                <?php the_post_thumbnail('full'); ?>
                <h5><?php the_title(); ?></h5>
                <p><?php the_content(); ?></p>
              </li>

            <?php endwhile; ?>

          <?php endif; ?>
        </ul>

      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
