# Scratch Log

## 021021 1603

Current `gulp` setup concats the `component` scripts.

Unfortunately, Dallas put a lot of scripts outside of components.

Then he used WordPress to register them.

I can keep the `components` folder and use only `main_shard.js`.

Most of the scripts (excluding `plugins.js` and `scripts.js`) outside of `/js/components/` were already placed into `plugins.js`.

> functions.php

```
/**
 * Enqueue scripts and styles.
 */
function hospitality_scripts() {
	wp_enqueue_style( 'hospitality-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');

	wp_enqueue_script(
		'jquery',
		// "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js",
		"https://code.jquery.com/jquery-1.12.4.min.js",
		false, //dependencies
		null, //version number
		true //load in footer
	);

	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'hospitality-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hospitality-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script(
	  'scripts', //handle
	  get_template_directory_uri() . '/js/scripts.js', //source
	  array( 'jquery', 'plugins' ), //dependencies
	  null, // version number
	  true //load in footer
	);
}
add_action( 'wp_enqueue_scripts', 'hospitality_scripts' );
```

## 021021 1530 force https for gravatar images

usually applies to authors

added to:

`functions.php`

```
/* Force Gravatar https START */
/* force gravatars for users to use https;
useful if site has SSL enabled */
add_filter('get_avatar_url', 'set_https', 10, 3);

function set_https($url, $id_or_email, $args){
	return set_url_scheme( $url, 'https' );
}

/* Force Gravatar https END */
```

## **Saturday, May 30, 2015 12:48 PM**

When doing responsive coding, there's a thin white line that appears at the very top of the window when using the Chrome emulator.

Only when you click the `<label for="toggle">` does it vanish.


# For the Sidebar

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

