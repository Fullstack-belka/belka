<?php
/**
 * Template Name: Servicio Leads
 *
 *
 * 
 *
 */
get_header();
?>


<div id="page" class="services leads">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">

            <section id="section-introduction-planet" class="container-section leads" >
                <div class="content">
                    <div class="main-title">
                        <h1>Obtener Leads</h1>
                    </div>
                    <div class="description">
                        <p>¿Sábes para qué sirven los <strong>leads</strong> obtenidos con tu presencia digital?</p>
                    </div>

                    <div class="title-lead">
                        <h2>Sirven para mucho más que tener un grandes BD</h2> <img src="<?php echo get_template_directory_uri(); ?>/assets/image/satelite_2.png" width="150px" alt="Sirven para mucho más que tener un grandes BD">
                    </div>

                    <p class="h1"><strong> Observa...</strong></p>

                    <div class="goals">

                        <div class="item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/goal_nps.png" width="100px" alt="Calificar tus clientes por tu valor">
                            </figure>
                            <p>Calificar tus clientes por tu valor</p>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/goal_inbound.png" width="100px" alt="Hacer inbound marketing">
                            </figure>
                            <p>Hacer inbound marketing</p>
                        </div>
                        <div class="item">
                            <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/goal_chat.png" width="100px" alt="Comunicar Efectivamente">
                            </figure>
                            <p>Comunicar Efectivamente</p>
                        </div>
                    </div>


                </div>
                <div class="planet">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/big_planet_lead.png" width="1000px"  alt="">
                    </figure>
                </div>
            </section>
            
            <section class="metodologia-section  container-section">
                 <div class="how-title">
                    <h2>¿Qué hacemos?</h2> 
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

        
            <section class="section-select-services container-section leads">
                <div class="title-plan-accion">
                    <h2>Ejecución <strong>Plan de Acción</strong></h2>
                </div>
                <div class="container-services">
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/rrss_lead.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/pauta_lead.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/ux_lead.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/seo_lead.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/servicio_lead.png" width="250px" alt="">
                        </a>
                    </div>
                    <div class="service">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/services/leads/landing_lead.png" width="250px" alt="">
                        </a>
                    </div>
                </div>
            </section>
            
            <?php get_template_part( 'page-templates/partials/contact' , 'leads' );?>
            

        </main>
    </div>
</div>

<?php 

get_footer();

?>


