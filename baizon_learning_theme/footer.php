<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baizon_learning_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
			<div class="footer-section">
				<h2>Academic Partners</h2>
				<ul>
					<li>NATIONAL INSTRUMENTS</li>
				</ul>
			</div>

			<div class="footer-section">
				<h2>Contact Information</h2>
				<p>Email: <a href="mailto:BaizonnLearning@gmail.com">BaizonnLearning@gmail.com</a></p>
				<p>Phone: <a href="tel:+6562811816">(+65) 62811816</a></p>
				<p>1007A Upper Serangoon Road</p>
				<p>Singapore, 534745</p>
			</div>

			<div class="footer-section">
				<h2>Quick Links</h2>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container'      => 'nav',
					'menu_class'     => 'footer-menu',
				));
				?>
			</div>
		</div>


	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
