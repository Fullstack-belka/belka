<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Belka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<p>
				<?php
					if ( is_singular() ) :
						belka_posted_by();
					endif;
				?>
			</p>
			<div class="entry-meta">
				<?php
	
				belka_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php
		if ( is_singular() ) :
			belka_post_thumbnail();
		else :
			
		endif;
	?>

	<div class="entry-content">
		
		<?php

		if ( is_singular() ) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'belka' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		else :
			$the_post = get_post();
			echo limit_string($the_post->post_excerpt, '...', 150);
		endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'belka' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php belka_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
