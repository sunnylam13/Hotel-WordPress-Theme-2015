<?php
/*
Template Name: Suites Page
*/ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hospitality
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>



<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<!-- ====================================
	Room Attributes 
	==================================== -->

	<h2>Room Attributes</h2>

	<ul class="roomAttributes">
		<li>Free WiFi Connection</li>
		<li>Free Entry to the Rooftop Spa &amp; Health Club</li>
		<li>Mineral water in the room upon arrival</li>
		<li>24-hour room service</li>
		<li>Multimedia TV, Minibar, In-room Safe, Individually Controlled A/C</li>
		<li>24-Hour In Room Dining Service</li>
	</ul>

	<!-- ====================================== -->

	<!-- ====================================
	Reservations 
	==================================== -->

	<h2>Reservations</h2>

	<p>Request a reservation.  We will get back to you shortly.</p>

	<select name="reservations-sidebar" id="reservations-sidebar">
		<option value="" selected="selected">Select A Room...</option>
		<option value="rooms">Rooms</option>
		<option value="suites">Suites</option>
		<option value="presidential suite">Presidential Suite</option>
	</select>

	<input type="date">

	<input type="date">

	<!-- ====================================== -->

</div><!-- #secondary -->

<?php get_footer(); ?>