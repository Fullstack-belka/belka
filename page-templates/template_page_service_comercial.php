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
                        <p>¿Tienes el equipo pero sientes que le falta algo?</p>
                        <p>Llegó la hora de descubrir qué es lo que necesita. Con nosotros puedes lograr que tu equipo se cree o eduque para prestar un servicio eficiente y vendedor.</p>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/comercial/big_planet_comercial.png" width="1000px"  alt="Aumentar Comunidad">
                    </figure>
                </div>
            </section>
            

            <section class="metodologia-section container-section">

                 <div class="how-title">
                    <h2>¿Sabes lo que son los Acuerdos de Niveles de Servicio o SLA?</h2> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                </div>
                <div class="description">
                    <p>Con nosotros lo sabrás y además lo implementarán. En Belka hemos tenido la oportunidad de consolidar equipos ecommerce y lograr aumentos en ventas hasta de un 3.000%, sí, un 3000% y eso lo logramos con Deportes Regol.</p>
                    <p>También hemos tenido la oportunidad de capacitar a empresas como Wonder Group, Eskultura en Puerto Rico, Fajitex Colombia, Elévate en Centro América, Smart All en México, la empresa de Vivienda de la Gobernación de Antioquia y así hemos crecido, de la mano de nuestros clientes.</p>
                </div>

            </section>
            <section class="metodologia-section container-section">

                 <div class="how-title">
                    <h2>Cuando capacitas a tu equipo y trabajas con personas felices, logras que tus metas se cumplan… ¿Cómo lo hacemos?</h2> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/ico_how_services.png" width="36px" alt="">
                </div>
                <div class="items-metodologia">
                    <div class="item">
                        <h3>1. Acompañamos desde la analítica y la efectividad</h3>
                    </div>
                    <div class="item">
                        <h3>2. Te ayudamos a escoger las mejores Herramientas de Atención o la indicada para tu negocio</h3>
                    </div>
                    <div class="item">
                        <h3>3. Cocreamos con tu equipo y te ayudamos a Definir los Acuerdos de Niveles de Servicio</h3>
                    </div>
                    <div class="item">
                        <h3>4. Repetimos el Ciclo…</h3>
                    </div>
                </div>
            </section>

            <section class="resumen-section container-section">
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


