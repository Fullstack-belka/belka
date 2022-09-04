<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Belka
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section  id="section-page-404" class="error-404 not-found">		
			<div class="container-section" >         
				<div class="content">
					<div class="main-title">
						<h1 class="heading-title"><?php esc_html_e( '¡Vaya! Parece que navegaste más alla de la galaxia', 'belka' ); ?></h1>
					</div>

					<div class="page-content">							
						<figure>
							<img width="800" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/image/404_hole.png" alt="" loading="lazy">
						</figure>
						<p class="lead"><?php esc_html_e( '¡Vuelve a Orbitar con Nosotros!', 'belka' ); ?></p>

						<?php
						get_search_form();
						?>

						<div class="active" id="planets-section">
							<?php get_template_part( 'page-templates/partials/planets-services' , 'services' );?> 						
						</div>
						
						<?php
						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
