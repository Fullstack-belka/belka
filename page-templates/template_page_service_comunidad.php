<?php
/**
 * Template Name: Servicio Comunidad
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services comunidad right">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section comunidad" >         
                <div class="content">
                    <div class="main-title">
                        <h1>Aumentar Comunidad</h1>
                    </div>
                    <div class="description">
                        <p>¿Tienes el equipo pero sientes que le falta algo?</p>
                        <p>Llegó la hora de descubrir qué es lo que necesita. Con nosotros puedes lograr que tu equipo se cree o eduque para prestar un servicio eficiente y vendedor.</p>
                    </div>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comunidad/big_planet_comunidad.png" width="1000px"  alt="Aumentar Comunidad">
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
                        <div class="description">
                        <p>¿Sabes lo que son los Acuerdos de Niveles de Servicio o SLA? Con nosotros lo sabrás y además lo implementarán. En Belka hemos tenido la oportunidad de consolidar equipos ecommerce y lograr aumentos en ventas hasta de un 3.000%, sí, un 3000% y eso lo logramos con Deportes Regol.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="description">
                        <p>También hemos tenido la oportunidad de capacitar a empresas como Wonder Group, Eskultura en Puerto Rico, Fajitex Colombia, Elévate en Centro América, Smart All en México, la empresa de Vivienda de la Gobernación de Antioquia y así hemos crecido, de la mano de nuestros clientes.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="description">
                        <p>Cuando capacitas a tu equipo y trabajas con personas felices, logras que tus metas se cumplan… ¿Cómo lo hacemos?</p>
                        </div>
                    </div>
                </div>
                

            </section>


            <section class="informative-section container-section">
                <div class="how-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                    <h2>Con nuestra compañía te darás cuenta de que “una sola golondrina no hace milagros”, debes formar un equipo y, de nuevo, no solo en cantidad si no en calidad. ¿Todavía no crees que es momento de tener un equipo de servicio al cliente?</h2> 
                </div>
            </section>

            <section class="section-select-services container-section comunidad">
                <div class="title-plan-accion">
                    <h2>Ejecución <strong>Plan de Acción</strong></h2>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comunidad/rrss_comunidad.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comunidad/pauta_comunidad.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comunidad/analitica_comunidad.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comunidad/marketing_comunidad.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <?php get_template_part( 'page-templates/partials/contact' , 'comunidad' );?>

        </main>
    </div>
</div>

<?php 

get_footer();

?>


