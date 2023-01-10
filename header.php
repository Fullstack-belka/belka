<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?= $post->post_title ?>">

<div class="stars"></div>
<div class="twinkling"></div>


<?php wp_body_open(); ?>
<div id="site" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'belka' ); ?></a>

	<header id="main-header" class="<?= $post->ID != 2 ? 'active' : '' ?>">
		<div class="main-menu">
			<ul class="link-list">
				<li><a class="<?= $post->ID == 52 ? 'active' : '' ?>" href="<?= get_permalink(52); ?>">Nosotros</a></li>
				<li><a class="<?= $post->ID == 58 ? 'active' : '' ?>" href="<?= get_permalink(58); ?>">Éxito</a></li>
				<li class="logo"><a href="/"><img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" width="75px" alt=""></a></li>
				<li><a class="<?= $post->ID == 130 ? 'active' : '' ?>" href="<?= get_permalink(130); ?>">Servicios</a></li>
				<li><a class="<?= $post->ID == 64 ? 'active' : '' ?>" href="<?= get_permalink(64); ?>">Contacto</a></li>
			</ul>

			<div class="social_links">
				<ul>
                    <li><a href="https://www.linkedin.com/company/belka-company" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_linkedin.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/belka.company/" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_instagram.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com/belkacompany" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_facebook.png" alt=""></a></li>
                </ul>
			</div>
			<div class="container_image_mobile">
				<figure class="belka_moon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/menu_mobile_belka.png" width="300px" alt="">
				</figure>
			</div>


		</div>

		<div class="container-toggle">
            <a href="javascript:void();">
            <span class="menu_toggle"><span></span></span>
            </a>
        </div>
	</header>
