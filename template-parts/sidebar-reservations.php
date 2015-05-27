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

<h2>Reservations</h2>

<p>Request a reservation.  We will get back to you shortly.</p>

<select name="reservations-sidebar" id="reservations-sidebar">
	<option value="" selected="selected">Select A Room...</option>
	<option value="rooms">Rooms</option>
	<option value="suites">Suites</option>
	<option value="presidential suite">Presidential Suite</option>
</select>

<input type="text" placeholder="From">

<input type="text" placeholder="To">

<input type="submit" value="Book now">

<!-- ====================================== -->