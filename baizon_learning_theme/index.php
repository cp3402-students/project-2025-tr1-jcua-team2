<?php
get_header();
?>

	<!-- Hero Banner -->
	<section class="hero-banner">
		<div class="hero-container">
			<div class="hero-slide">
				<a href="<?php echo get_permalink( get_post_by_slug( 'about' ) ); ?>" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image-1.jpg" alt="Slide 1">
					<div class="hero-text">
						<h2>Welcome to Baizon Learning Center</h2>
						<p>Empowering students with excellence in education.</p>
					</div>
			</div>
		</div>
	</section>

	<main id="primary" class="site-main">
		<?php
		// Query arguments to fetch posts from the "home-page-posts" category
		$args = array(
			'category_name' => 'home-page-post', // Change this to the desired category slug
			'posts_per_page' => 9, // Number of posts to display
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			?>

			<?php if (is_home() && !is_front_page()) : ?>
			<header>
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

			<div class="post-grid"> <!-- Grid wrapper for posts -->
				<?php
				while ($query->have_posts()) :
					$query->the_post();
					?>
					<div class="post-item"> <!-- Individual post wrapper -->
						<?php get_template_part('template-parts/content', get_post_type()); ?>
					</div>
				<?php endwhile; ?>
			</div>

			<!-- Enrol Now Button -->
			<div class="enrol-now-container">
				<a href="<?php echo get_permalink( get_page_by_path( 'registration' ) ); ?>" class="enrol-now-button">Enrol Now</a>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

		<?php wp_reset_postdata(); // Reset the query ?>
	</main><!-- #main -->

<?php
// get_sidebar(); // Uncomment this line to add the sidebar
get_footer();
