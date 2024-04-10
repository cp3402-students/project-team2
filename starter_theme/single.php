<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starter__Theme
 */

get_header();
?>

	<div id="primary" class = "content-area">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();

			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	</div><!--#primary -->

<?php

get_footer();
