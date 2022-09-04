<?php
/**
 * Template Name: Home
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();
?>


<div id="page" class="site">
	<div id="content" class="site-content">
		<main id="main" class="site-main " role="main">
            <section id="primary-section">
                <div class="container-section">
                    <div class="container-image main-logo">
                        <img width="300" height="auto" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo-belka-company-2.png" alt="" loading="lazy">
                    </div>        
                    <h1 class="heading-title">¿Estas listo para despegar?</h1>
                </div>        
            </section>

            <section id="secondary-section" class="">
                <div class="container-earth">
                  
                    <div class="main-rocket ascending">
                        <div class="rocket"></div>
                    </div>
                    <div class="content-earth">
                        <div class="earth">
                            <div class="circle"></div> 
                        </div>      
                        <div class="clouds"></div>         
                        <div class="atmosfera"></div>
                    </div>  
                </div>        
            </section>

            <section id="lead-section">
                <div class="container-section">
                    <div class="container-title">
                        <h2 class="main-title" >Orbita con nosotros</h2>            
                    </div>  
                    <div class="container-rocket">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/rocket_1.svg" width="350px" alt="">                    
                    </div>
                </div>
            </section>

            <section id="planets-section" class="container-section">
                <div class="container-rocket">
                    <div class="container-title">
                        <h1 class="main-title" >¿Cuál es tu <br> <strong> objetivo?</strong></h1>
                    </div>
                    <div class="container-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/rocket_1.svg" width="250px" alt="">
                    </div>
                </div>     
                <?php get_template_part( 'page-templates/partials/planets-services' , 'services' );?>  
            </section>

            <section id="fourth-section" class="">
                
                <figure class="black-hole-img">
                    <img  src="<?php echo get_template_directory_uri(); ?>/assets/image/agujero_negro.png" width="380px" height="380px" alt="Hi Earthlings">
                </figure>
                <div id="fourth-section-1" class="container-section">
                    <div class="container-title">
                        <h2 class="main-title" >¿Aún no sabes?</h2>            
                    </div>  
                </div>   
                <div class="container-section two">
                    <div class="container-title">
                        <h2 class="main-title" >Hagámoslo <strong>Juntos</strong></h2>
                    </div>  
                </div>   
                <figure class="astronauta-img">
                    <img  src="<?php echo get_template_directory_uri(); ?>/assets/image/astronauta.svg" width="250px" height="250px" alt="Hi Earthlings">
                </figure>           
            </section>
            <?php get_template_part( 'page-templates/partials/contact' , 'home_contact' );?>
            <section id="six-section" class="container-section">

                <div class="container-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/satelites_newsletter.svg" width="350px" alt="">
                    <div class="container-reflector">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/reflector.png"  width="100%" alt="">
                        </figure>
                    </div>
                </div>

                <div class="main-newsletter">
                    <h2>
                        <span class="h2">Suscríbete</span>
                        <span class="text-light">a nuestro</span>
                        <span class="h1 text-bold">Newsletter</span>
                    </h2>
                    <?php echo do_shortcode('[wpforms id="169"]');?>
                </div>
            </section>
            <?php /*
            <section id="seven-section"  class="container-section">

                <div class="">
                    <div class="main-title">
                        <h2>
                            <span class="h2">Somos</span>
                            <span class="text-italic">#masquepartners</span>
                        </h2>
                    </div>
                <p>Una academía de Marketing Digital para que aprendas todo lo que necesitas para ser el mejor</p>
                <div class="container-btn">
                        <a class="btn secondary" href="#masq">¡Aprende ya!</a>
                </div>
                </div>
            </section>

            */ ?>
        </main>
    </div>
</div>

<?php 

get_footer();

?>


