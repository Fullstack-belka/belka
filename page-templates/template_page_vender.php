<?php
/**
 * Template Name: Servicio Vender
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services vender">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section vender " >
                <div class="content">
                    <div class="main-title">
                        <h1>Vender</h1>
                    </div>
                    <div class="description">
                        <p>Si este es tu principal objetivo debes tener presente
                            que debes hacer una inversión para lograrlo. <br>
                            <strong>Claro está</strong>, todo depende del punto en el que se
                            encuentre tu empresa. Aquí te dejamos los servicios
                            que pueden ayudarte a lograrlo:
                        </p>
                    </div>
                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/big_planet_vender.png" width="1000px"  alt="">
                    </figure>
                </div>
            </section>
            
            <section id="section-informative" class="container-section">
                <div class="title-icon">
                    <h2>Implementación de la metodología Inbound</h2>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/ico_title.png" width="36px" alt="">
                    </figure>
                </div>
                <p class="lead">Nada se logra si no se planea, por eso cuando tu meta es vender, empezamos por <strong>“organizar la casa”.</strong> <br> En esta parte trabajamos en equipo para definir:</p>            

                <div class="container-list">
                    <div class="item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/estrategia_digital.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>1. Tu estrategía Digital</h3>
                            <p>Revisamos o creamos tu Buyer Persona, definimos tus Objetivos, y los respectivos KPI</p>
                        </div>
                    </div>
                    <div class="item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/estrategia_de_contenidos.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>2. Tu Estrategia de Contenidos y el Plan de Acción</h3>
                            <p>Aquí definimos los canales que tu marca utilizará para vender exitosamente en internet. Te dejamos lista la estrategia de contenidos a 3 meses.</p>
                        </div>
                    </div>
                    <div class="item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/revision_heuristica.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>3. Revisión Heurística:</h3>
                            <p>Hacemos una revisión con tres de tus clientes para saber cómo ven a la marca en el entorno</p>
                        </div>
                    </div>
                    <div class="item">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/diagnostico_ux.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>4. Diagnóstico de UX, UI y competencia:</h3>
                            <p>Revismos en qué punto estás, cómo te encuentras tú y tus competidores, también trabajamos con refrentes que sean importante para tu negocio</p>
                        </div>
                    </div>
                    <div class="item w-100">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/puesta_a_punto.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>5. Puesta a Punto del Ecosistema Digital:</h3>
                            <p>Revisamos, organizamos o creamos el Ecosistema Digital de tu marca, que Google Analytics, Search Console, el Tag Manager, el Píxel de Facebook, entre otros, esté correctamente Instalado y qué tan bien se encuentra tu sitio frente a la competencia en posicionamiento orgánico en motores de búsqueda.</p>
                        </div>
                    </div>
                    <div class="item w-75">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/vender/implementacion_inbound.png" width="150px" alt="">
                        </figure>
                        <div class="content">
                            <h3>6.Definición del Flow:</h3>
                            <p>Después de todos estos 5 pasos, construímos una propuesta con lo que para nosotros necesitas hacer para cumplir los objetivos digitales de tu negocio. Esta la puedes trabajar con nosotros sí lo deseas, con tu agencia actual o con tu equipo de trabajo. En el Flow podrás encontrar los siguientes servicios</p>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part( 'page-templates/partials/contact' , 'vender' );?>

        </main>
    </div>
</div>

<?php 

get_footer();

?>


