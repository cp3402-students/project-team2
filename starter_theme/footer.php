<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter__Theme
 */

?>

<footer id="colophon" class="site-footer">
		
		<div class="site-info">
			<div class="copyright">
				&copy; U3A
			</div>
			<?php
			// Get footer text from Customizer
			$footer_text = get_theme_mod('footer_text', '');
			if (!empty($footer_text)) {
				echo '<div class="custom-footer-text">' . esc_html($footer_text) . '</div>';
			}
			?>
			<div class="footer-social">
				<a href="https://www.facebook.com/people/U3A-Online/100057154791844/"><i class="fab fa-facebook"></i></a> 
			</div>
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Logo"> 
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
	