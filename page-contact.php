<?php
/**
 * The template for the contact page
 *
 *
 * @package hospitality
 */

get_header(); ?>

  <section class="masthead">
    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

          <h3><?php the_title(); ?></h3>
          <?php the_post_thumbnail('full'); ?>

      <?php endwhile; ?>

    <?php endif; ?>
  </section>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        
        <section class="map">
          <h5>Our Location</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9943928927514!2d-79.39789899999998!3d43.648284999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34dc87fa67bd%3A0xe172d8fcbe1c5997!2sHackerYou!5e0!3m2!1sen!2sca!4v1432845402581" width="960" height="310" frameborder="0" style="border:0"></iframe>
        </section>

        <form action="" class="contactUs">
          <h5>Contact Us</h5>
          <div class="field third">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="field third">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="field third">
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
              <option value="0">Select a subject</option>
              <option value="1">Reservations</option>
              <option value="2">Concierge</option>
              <option value="3">General Inquiry</option>
            </select>
          </div>
          <div class="field full">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
          </div>
          <div class="field btn">
            <button type="submit">Send Message</button>
          </div>
        </form>

      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
