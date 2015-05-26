<?php
/**
 * The template for the contact page
 *
 *
 * @package hospitality
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        
        <section class="map">
          <h4>Our Location</h4>
        </section>

        <form action="" class="contactUs">
          <h4>Contact Us</h4>
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
          <div class="field">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
          </div>
        </form>

      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
