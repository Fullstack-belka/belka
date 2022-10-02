<?php
/**
 * Template Name: Servicio Comercial
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services comercial">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section comercial" >         
                <div class="content">
                    <div class="main-title">
                        <h1>Consolida tu Área Comercial</h1>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing urna morbi netus luctus blandit mollis integer</p>
                    </div>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/big_planet_comercial.png" width="1000px"  alt="Aumentar Comunidad">
                    </figure>
                </div>
            </section>

            <section class="metodologia-section container-section">
                 <div class="how-title">
                    <h2>Así lo haces con Belka</h2> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                </div>

                <div class="items-metodologia">
                    <div class="item">
                        <h3>Implementación</h3>
                        <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, similique fugit iste explicabo in nobis exercitationem, vel praesentium error, dicta quidem! Minus sint exercitationem est repellendus a error mollitia. Sequi eius, dolorum neque pariatur aliquam commodi consequatur saepe rerum suscipit.</p>
                        </div>
                    </div>
                    <div class="item">
                        <h3>Metodología</h3>
                        <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, similique fugit iste explicabo in nobis exercitationem, vel praesentium error, dicta quidem! Minus sint exercitationem est repellendus a error mollitia. Sequi eius, dolorum neque pariatur aliquam commodi consequatur saepe rerum suscipit.</p>
                        </div>
                    </div>
                    <div class="item">
                        <h3>Inbound</h3>
                        <div class="description">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, similique fugit iste explicabo in nobis exercitationem, vel praesentium error, dicta quidem! Minus sint exercitationem est repellendus a error mollitia. Sequi eius, dolorum neque pariatur aliquam commodi consequatur saepe rerum suscipit.</p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="section-select-services container-section comunidad">
                <div class="title-plan-accion">
                    <h2>Ejecución <strong>Plan de Acción</strong></h2>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/monitorizacion_comercial.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/consultoria_comercial.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/servicio_comercial.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/capacitacion_comercial.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <?php get_template_part( 'page-templates/partials/contact' , 'comercial' );?>


        </main>
    </div>
</div>

<?php 

get_footer();

?>


