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
	
	<!-- <p>This is page.php</p> -->

	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>


<?php get_footer(); ?>