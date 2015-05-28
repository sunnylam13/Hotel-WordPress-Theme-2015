<?php
/**
 * The template for the front page.
 *
 *
 * @package hospitality
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <section class="masthead gallery js-flickity" 
      data-flickity-options='
        { 
          "imagesLoaded": true,
          "cellSelector": "img"
        }
      '>
      <img src="https://placeimg.com/1430/590/arch" alt="">
      <img src="https://placeimg.com/1430/590/arch" alt="">
      <img src="https://placeimg.com/1430/590/arch" alt="">
      <div class="overlay">
        <div class="container">
          <h2>Collaboratively administrate empowered markets</h2>
          <h3>via plug-and-play</h3>
        </div>
      </div>
    </section><!--#masthead -->
    
    <div class="container">
      <section class="booking-console">
        <h4>Book a Room Online</h4>
        <form action="" class="book">
          <div class="field">
            <label for="roomType">Type of Room</label>
            <select name="roomType" id="roomType">
              <option value="room">Room</option>
              <option value="suite">Suite</option>
              <option value="presSuite">Presidential Suite</option>
            </select>
          </div>
          <div class="field">
            <label for="checkIn">Check In</label>
            <input type="text" name="checkIn" id="checkIn" class="checkIn">
          </div>
          <div class="field">
            <label for="checkOut">Check Out</label>
            <input type="text" name="checkOut" id="checkOut" class="checkIn">
          </div>
          <div class="field">
            <label for="adults">Adults</label>
            <select name="adults" id="adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="field">
            <label for="children">Children</label>
            <select name="children" id="children">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="field">
            <button class="submit" type="submit">Book Now</button>
          </div>
        </form>
      </section>      
    </div>

    <main id="main" class="site-main" role="main">
      <div class="container">
        
        <ul class="roomTypes">
          <li>
            <img src="https://placeimg.com/300/150/arch" alt="">
            <h5>Single Room <span class="price">$110</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam ullam quam quas corporis! Voluptas mollitia molestias necessitatibus dolores, temporibus minus earum magnam, dicta, commodi veritatis non odit repudiandae cum dolore.</p>
          </li>
          <li>
            <img src="https://placeimg.com/300/150/arch" alt="">
            <h5>Double Room <span class="price">$180</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum distinctio nemo odio temporibus delectus, ex asperiores? Velit voluptate, repudiandae aut, aperiam incidunt autem obcaecati doloremque magnam impedit sint id animi.</p>
          </li>
          <li>
            <img src="https://placeimg.com/300/150/arch" alt="">
            <h5>Executive Suite <span class="price">$210</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam rerum adipisci atque, molestias nemo totam optio dolores blanditiis eaque vero tenetur, modi sequi doloremque nisi! Atque nam, quia recusandae temporibus.</p>
          </li>
        </ul>

      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
