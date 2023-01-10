<?php
/**
 * Template Name: Servicio Presencia Digital
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services right presencia">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section presencia" >         
                <div class="content">
                    <div class="main-title">
                        <h1>Mejora tu Presencia Digital</h1>
                    </div>
                    <div class="description">
                        <p>Por una Presencia Digital con Retorno a la Inversión</p>
                    </div>
                    <div class="metodologia-section">
                        <div class="items-metodologia">
                            <div class="item">
                                <h3>Implementación</h3>
                                <div class="description">
                                <p>La presencia digital de tu negocio también tiene retorno… ¡Sí! No todo es ventas, y más cuando lo primero que quieres es posicionamiento de marca. Ahora, cuando hablamos de presencia digital, no todo es estar presente en Medios y Redes Sociales. </p>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Metodología</h3>
                                <div class="description">
                                <p>Para nuestro equipo tu presencia digital debe estar pensada en 360, o sea, integrar los diferentes canales digitales donde tu negocio puede tener una presencia activa y que esto nos permite cumplir con objetivos y KPI que te digan si hay un retorno a tu inversión.</p>
                                </div>
                            </div>
                            <div class="item">
                                <h3>Inbound</h3>
                                <div class="description">
                                <p>Ahora, pensar en tu presencia digital no implica que debas tener una agencia contratada para que te haga todo, no. Con Belka Company puedes trabajar en equipo, incluso, si tienes una agencia contratada podemos hacerlo así, ya lo hemos vivido.</p>
                                </div>
                            </div>
                    </div>
                </div>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/big_planet_presencia.png" width="1000px"  alt="Aumentar Comunidad">
                    </figure>
                </div>
            </section>

            <section class="metodologia-section container-section">
                 <div class="how-title">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                    <h2>“Aunque vivimos del marketing digital, lo ideal para un negocio no es contratar a través de un tercero toda la operación, tener un equipo interno es un acierto, nosotros en Belka estamos para integrarnos a él”</h2> 
                </div>

            </section>

            <section class="section-select-services container-section presencia">
                <div class="title-plan-accion">
                    <h2>Ejecución <strong>Plan de Acción</strong></h2>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/rrss_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/mailing_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/pauta_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/seo_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/leads_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/ux_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/presencia_digital/ecosistema_presencia.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <?php get_template_part( 'page-templates/partials/contact' , 'presencia' );?>
            
        </main>
    </div>
</div>

<?php 

get_footer();

?>


