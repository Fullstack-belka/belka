<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Belka
 */

get_header();
?>
	<main id="primary" class="site-main main-content index">

		<section id="section-featured-blog" class="">
			<div class="container-section">
				<div class="entry-featured">
					<h1><a href="<?php the_permalink()?>"><?=the_title()?></a></h1>

					<div class="the-content">
						<?php 
						$the_post = get_post();
						$resumen = $the_post->post_excerpt; ?>
						<?php echo limit_string($resumen, '...', 150)  ?>
					</div>
				</div>
				<?php
				$the_query = new WP_Query( 'tag=destacado' );
				if ( $the_query->have_posts() ) { ?>
					<div class="entry-more-featured">
						<div class="container">
							<?php								
								while ( $the_query->have_posts() ) {
									$the_query->the_post(); ?>
									<div class="post-title">						
										<h2 class="post-heading">
										<a href="<?php the_permalink()?>"><?= get_the_title()  ?></a>
										</h2>						
									</div>
								<?php
								}	
							?>		
						</div>
					</div>
				<?php
				} wp_reset_postdata();
				?>

				
			
				
			</div>
		</section>

		<section id="section-blog" >
			<div class="container-section">
				<div class="container-post">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>		
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
