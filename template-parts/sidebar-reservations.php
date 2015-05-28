<?php
/**
 * The template used for displaying the reservations widget for page-suites.php
 *
 * @package hospitality
 */
?>

<!-- ====================================
Reservations 
==================================== -->

<section class="reservationBooking">

	<h5>Reservations</h5>

	<p>Request a reservation.  We will get back to you shortly.</p>

	<!-- we will use Javascript to create a more functional form... this is a stand in -->

	<!-- <select name="reservations-sidebar" id="reservations-sidebar">
		<option value="" selected="selected">Select A Room...</option>
		<option value="rooms">Rooms</option>
		<option value="suites">Suites</option>
		<option value="presidential suite">Presidential Suite</option>
	</select> -->

	<!-- where PH = placeholder -->
	<div class="selectMenuPH">
		<input type="text" placeholder="Select A Room..." class="selectMenuPH">
	</div>

	<div class="fromToDate">
		<div>
			<input type="text" placeholder="From">
		</div>
		<div>
			<input type="text" placeholder="To">
		</div>
	</div>

	<input type="submit" value="Book now">

</section>


<!-- ====================================== -->