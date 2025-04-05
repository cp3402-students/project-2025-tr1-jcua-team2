<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baizon_learning_theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="single-post-container">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

//				the_post_navigation(
//					array(
//						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'baizon_learning_theme' ) . '</span> <span class="nav-title">%title</span>',
//						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'baizon_learning_theme' ) . '</span> <span class="nav-title">%title</span>',
//					)
//				);

			endwhile; // End of the loop.
			?>

			<!-- Enrol Now Button -->
			<div class="enrol-now-container">
				<a href="<?php echo get_permalink( get_page_by_path( 'registration' ) ); ?>" class="enrol-now-button">Enrol Now</a>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
