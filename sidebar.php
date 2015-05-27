<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package hospitality
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	// return;
}
?>

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

</div><!-- #secondary -->
