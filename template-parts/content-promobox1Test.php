<?php
/**
 * The template used for displaying a custom promobox that draws information from a specific "page" not "post".  It is not as useful as filtering for categories or tags of actual posts.
 *
 * @package hospitality
 */
?>

<!-- ====================================
THE ORIGINAL STATIC BASE 
==================================== -->
<!-- <div class="promobox box1">
	<div class="imgFrame">
		<img src="http://lorempixel.com/396/300" alt="">
		<a href="#" class="playFrame"><span></span></a>
	</div>
	<h5>Room</h5>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam molestiae et architecto aperiam, nisi, perferendis.</p>
</div> -->
<!-- ====================================== -->

<div class="promobox box1">
	<div class="imgFrame">
		<!-- <img src="http://lorempixel.com/198/150" alt=""> -->
		<!-- <img src="http://lorempixel.com/396/300" alt=""> -->
		<!-- the WP method of get_the_post_thumbnail already returns an <img> so we don't have to put this in src=""  -->
		<?php echo get_the_post_thumbnail( '51', 'full' ); ?>
		<a href="#" class="playFrame"><span></span></a>
	</div>
	<!-- <h5>Rooms</h5> -->

	<a href="<?php echo get_permalink( 51 ); ?>">
	<!-- <a href="<?php grab_specific_page_info(51,'post_link','the_permalink'); ?>"> -->
		<h5><?php grab_specific_page_info(51,'post_title','the_title'); ?></h5>
		<!-- <h5>
			<?php
			$my_id = 51;
			$post_id_51 = get_post($my_id);
			$content = $post_id_51->post_title;
			$content = apply_filters('the_title', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>
		</h5> -->
	</a>
	
	<p>
		<?php grab_specific_page_info(51,'post_content','the_content'); ?>
	</p>

	<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam molestiae et architecto aperiam, nisi, perferendis.</p> -->
	
	<!-- <p>
		<?php
		$my_id = 51;
		$post_id_51 = get_post($my_id);
		$content = $post_id_51->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
		?>
	</p> -->
	
</div>