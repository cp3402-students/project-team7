<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package u3a-team7-theme
 */

?>

	<footer id="colophon" class="site-footer">
	<footer id="colophon" class="site-footer">
		<nav id="site-navigation" class="footer-navigation">
			<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'u3a-team7-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'Footer Menu',
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
    </nav>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
