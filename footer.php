<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Belka
 */

?>

<a href="https://api.whatsapp.com/send?phone=57<?= belka_whatsapp();?>&text=Hola amigos de Belkacompany 🚀 me interesa hablar con ustedes, ¿Me brindan asesoria?" id="whatsAppFloatingButton" class="whatsapp-floating-button" >
    <svg id="svg-float-wsp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 91.19 91.41"><g id="Capa_2-2"><g><path class="f-wsp-1" d="M0,91.41l6.55-24.45C2.84,60.26,.89,52.76,.89,45.15,.89,20.25,21.14,0,46.04,0s45.15,20.25,45.15,45.15-20.25,45.15-45.15,45.15c-7.47,0-14.85-1.89-21.46-5.47L0,91.41Zm25.8-15.75l1.55,.92c5.68,3.39,12.15,5.18,18.69,5.18,20.19,0,36.61-16.42,36.61-36.61S66.23,8.53,46.04,8.53,9.42,24.96,9.42,45.15c0,6.67,1.85,13.23,5.35,18.98l.95,1.56-3.66,13.65,13.73-3.68Z"/><path class="f-wsp-2" d="M62.83,51.43c-1.86-1.11-4.28-2.35-6.47-1.46-1.68,.69-2.75,3.32-3.84,4.66-.56,.69-1.23,.8-2.08,.45-6.3-2.51-11.14-6.72-14.61-12.52-.59-.9-.48-1.61,.23-2.45,1.05-1.24,2.37-2.64,2.66-4.31,.28-1.67-.5-3.62-1.19-5.1-.88-1.9-1.87-4.6-3.77-5.68-1.75-.99-4.05-.43-5.61,.83-2.69,2.19-3.98,5.62-3.94,9.01,.01,.97,.13,1.93,.35,2.86,.54,2.24,1.58,4.33,2.74,6.32,.88,1.5,1.83,2.96,2.86,4.36,3.37,4.58,7.57,8.56,12.42,11.54,2.43,1.49,5.04,2.79,7.75,3.68,3.04,1,5.74,2.05,9.02,1.42,3.43-.65,6.82-2.78,8.18-6.08,.4-.98,.61-2.07,.38-3.1-.47-2.14-3.36-3.41-5.09-4.44Z"/></g></g></svg>
</a>




<div class="scroll-top down scroll-visible">
    <a class="smoothscroll " href="#secondary-section">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
            <defs>
            </defs>
            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                <polygon points="0,38.92 2.83,36.08 45,78.25 87.17,36.08 90,38.92 45,83.92 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                <polygon points="0,8.92 2.83,6.08 45,48.25 87.17,6.08 90,8.92 45,53.92 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
            </g>
        </svg>
    </a>
</div>

<footer id="main-footer">
    <div class="container">
        <div class="column social">
            <div class="social_links">
                <ul>
                    <li><a href="https://www.linkedin.com/company/belka-company" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_linkedin.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/belka.company/" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_instagram.png" alt=""></a></li>
                    <li><a href="https://www.facebook.com/belkacompany" target="_blank" rel="follow"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico_facebook.png" alt=""></a></li>
                </ul>
            </div>
            <div class="container_logo">
                <a class="logo" href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo_belka_footer.png" alt="Belkacompany - Cumplimos tus objetivos">
                </a>
            </div>
        </div>
        <div class="column featured">
            <h3>Destacados</h3>
            <ul>
                <li><a  class="<?= $post->ID == 52 ? 'active' : '' ?>" href="<?= get_permalink(52); ?>">Nosotros</a></li>
                <li><a class="<?= $post->ID == 58 ? 'active' : '' ?>" href="<?= get_permalink(58); ?>">Casos de éxito</a></li>
                <li><a class="<?= $post->ID == 130 ? 'active' : '' ?>" href="<?= get_permalink(130); ?>">Servicios</a></li>
                <li><a class="<?= $post->ID == 64 ? 'active' : '' ?>" href="<?= get_permalink(64); ?>">Contacto</a></li>
                <li><a class="<?= $post->ID == 64 ? 'active' : '' ?>" href="<?= get_permalink(64); ?>">Blog</a></li>
            </ul>
            <div class="newsletter">
                <h3>Suscribirse al Newsletter</h3>
                <?php echo do_shortcode('[wpforms id="169"]');?>                 
            </div>
        </div>
        <div class="column services">
            <h3>Nuestros Servicios</h3>
            <ul class="">
                <li><a class="<?= $post->ID == 136 ? 'active' : '' ?>" href="<?= get_permalink(136); ?>">Vender</a></li>
                <li><a class="<?= $post->ID == 146 ? 'active' : '' ?>" href="<?= get_permalink(146); ?>">Aumentar tu comunidad</a></li>
                <li><a class="<?= $post->ID == 144 ? 'active' : '' ?>" href="<?= get_permalink(144); ?>">Consolidar tu área comercial</a></li>
                <li><a class="<?= $post->ID == 142 ? 'active' : '' ?>" href="<?= get_permalink(142); ?>">Mejorar tu presentación digital</a></li>
                <li><a class="<?= $post->ID == 140 ? 'active' : '' ?>" href="<?= get_permalink(140); ?>">Obtener leads</a></li>
                <li><a class="<?= $post->ID == 138 ? 'active' : '' ?>" href="<?= get_permalink(138); ?>">Una nueva web</a></li>
            </ul>
        </div>
        <div class="column contact">
            <h3>Contacto</h3>
            <ul>
                <li><a href="tel:573002960792" class="text_number"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico/ico_cel.svg" width="10px" alt="Llamanos a nuestro número télefonico">(+57) <?= belka_whatsapp(); ?></a></li>
            </ul>
            <ul>
                <li><a href="https://goo.gl/maps/X295LQjZb7xyW4Gn8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico/ico_city.svg" width="10px" alt="Llamanos a nuestro número télefonico">Cl. 7D #43A-40</a></li>
            </ul>
            <ul>
                <li><a href="mailto:estrategia@belkacompany.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico/ico_email.svg" width="10px" alt="Llamanos a nuestro número télefonico">estrategia@belkacompany.com</a></li>
            </ul>
            <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/ico/ico_earth.svg" width="10px" alt="Llamanos a nuestro número télefonico">Medellin, Colombia</a></li>
            </ul>
        </div>
    </div>
    <div class="container-moon">
        <div class="moon">
            <figure class="image_luna">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/luna_footer.png" width="100%" alt="">
            </figure>
            <figure class="mini_rocket">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/belka_mini_rocket.png" width="120px" alt="">
            </figure>
            <figure class="belka_dog">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/belka_dog.png" width=90px" alt="">
            </figure>
            <figure class="belka_flag">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/belka_flag.png" width="150px" alt="">
            </figure>
        </div>
    </div>
    
</footer>


<?php wp_footer(); ?>

</body>
</html>
