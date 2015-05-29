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
		<select name="roomType" id="roomType">
			<option value="0">Select a room type...</option>
      <option value="room">Room</option>
      <option value="suite">Suite</option>
      <option value="presSuite">Presidential Suite</option>
    </select>
	</div>

	<div class="fromToDate">
		<div class="field">
			<input type="text" class="datepicker" placeholder="From">
			<i class="fa fa-calendar"></i>
		</div>
		<div class="field">
			<input type="text" class="datepicker" placeholder="To">
			<i class="fa fa-calendar"></i>
		</div>
	</div>

	<input type="submit" value="Book now">

</section>


<!-- ====================================== -->