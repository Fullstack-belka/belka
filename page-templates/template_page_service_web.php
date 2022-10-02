<?php
/**
 * Template Name: Servicio Web
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services web right">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section web " >         
                <div class="content">
                    <div class="main-title">
                        <h1>Una nueva Web</h1>
                    </div>
                    <div class="description">
                        <p>Pero más que un sitio web bonito hacemos que <strong>venda y cumpla tus objetivos</strong></p>
                    </div>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/big_planet_web.png" width="1000px"  alt="">
                    </figure>
                </div>
            </section>
            
   
            <section class="section-select-services container-section web">
                <div class="how-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                    <h2 class="light">¿Cómo? <br> <strong>Así lo hacemos</strong></h2> 
                </div>
                <div class="container-msg">
                    <h3>Ten presente</h3>
                    <p>Nuestros servicios siempre dependen de tus objetivos y del punto en el que se encuentra tu empresa digital</p>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/taller_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/ecosistema_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/desarrollo_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/market_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/conversion_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/dpa_web.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
                <div class="container-services full">             
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/analytics_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/tag_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/sc_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/pixel_web.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/web/shopping_web.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>
            
            <?php get_template_part( 'page-templates/partials/contact' , 'web' );?>

        </main>
    </div>
</div>

<?php 

get_footer();

?>


