<?php
/**
 * The template used for displaying the sidebar for page-suites.php
 *
 * @package hospitality
 */
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php get_template_part( 'template-parts/sidebar', 'roomAttributes' ); ?>

	<?php get_template_part( 'template-parts/sidebar', 'reservations' ); ?>

</div><!-- #secondary -->