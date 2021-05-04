<?php
/**
 * The template for displaying all single posts.
 *
 * This template includes an intrinsic Bootstrap container to make the process of
 * content creation easier for the post author. To escape from the original container
 * and layout other parts of the page, consider inserting a custom HTML block to deliver the closing <div>'s.
 *
 * @package uds-wordpress-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="skip-to-content">

	<?php

	while ( have_posts() ) {

		the_post();
		get_template_part( 'templates-global/story-hero' );
		//echo '<div class="uds-hero uds-hero-md uds-news-hero">' . get_the_post_thumbnail( $post->ID, 'large' ) . '</div>';
		// Remove support for the global hero template part. Intended for pages, primarily.
		// get_template_part( 'templates-global/hero' ); .

		get_template_part( 'templates-global/global-banner' );
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="row" id="social-media">
			<nav class="nav flaot-left" aria-label="Social Media">
				<a class="nav-link text-maroon" href="#"><span title="Facebook" class="fab fa-facebook-square"></span></a>
				<a class="nav-link text-maroon" href="#"><span title="Twitter" class="fab fa-twitter-square"></span></a>
				<a class="nav-link text-maroon" href="#"><span title="LinkedIn" class="fab fa-linkedin"></span></a>
			</ul>
		</div>



		<div class="entry-meta">

			<p><?php echo get_the_date( 'F d, Y' ); ?></p>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

			<?php

			the_content();

			$author_name = get_field( 'name' );
			$author_title = get_field( 'title' );
			$author_email = get_field( 'email' );
			$author_phone = get_field( 'phone' );
			if ( $author_name || $author_title || $author_email || $author_phone ) {
				echo '<div class="author_info">';
				if ( $author_name ) {
					echo '<h4><span class="highlight-gold">' . $author_name . '</span></h4>';
				}
				if ( $author_title ) {
					echo '<p>' . $author_title . '</p>';
				}
				if ( $author_email || $author_phone ) {
					echo '<p>';
					if ( $author_email ) {
						echo '<a href="mailto:' . $author_email . '"><i class="fas fa-envelope-square"></i>' . $author_email . '</a>';
					}
					echo '</br>';
					if ( $author_phone ) {
						echo '<a href="tel:' . $author_phone . '"><i class="fas fa-phone-square"></i>' . $author_phone . '</a>';
					}
					echo '</p>';
				}
				echo '</div>';
			}

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'uds-wordpress-theme' ),
					'after'  => '</div>',
				)
			);

			?>

			<footer class="entry-footer">

				<?php uds_wp_entry_footer(); ?>

			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->
<?php
	}
	?>

</main><!-- #main -->

<?php
get_footer();
