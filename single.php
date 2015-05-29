<?php
/**
 * The template for displaying all single posts.
 *
 * @package hospitality
 */

get_header(); ?>

<div class="flexbox container">

	<div id="primary" class="content-area">
	
		<!-- <p>This is single.php</p> -->
	
		<main id="main" class="site-main" role="main">
	
		<?php while ( have_posts() ) : the_post(); ?>
	
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
	
			<?php the_post_navigation(); ?>
	
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
	
		<?php endwhile; // end of the loop. ?>
	
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_template_part( 'template-parts/sidebar', 'news' ); ?>
	
</div>

<?php get_footer(); ?>
