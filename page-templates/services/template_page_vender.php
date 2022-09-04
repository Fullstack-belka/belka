<?php
/**
 * Template Name: Vender
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">


            <section id="planets-section" class="container-section">
                <div class="container-rocket">
                    <div class="container-title">
                        <h2 class="main-title" >¿Cuál es tu <br> <strong> objetivo?</strong></h2>
                    </div>
                    <div class="container-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/rocket_1.svg" width="250px" alt="">
                    </div>
                </div>     
                <?php get_template_part( 'page-templates/partials/planets-services' , 'services' );?>
            </section>

            <section id="section-select-services" class="container-section">
                <div class="container-title">
                    <h2 class="main-title" >Explora un universo lleno de <strong> servicios</strong></h2>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/consultoria_digital.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/analitica.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/contenido.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/desarrollo.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/seo.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/pauta.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/marketing_influencers.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/atencion_al_cliente.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/main/video_blogging.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>

<?php 

get_footer();

?>


