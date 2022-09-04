<section id="contact-section" class="">    
    <div class="container-section">
        <div class="container-form <?= $name ?>">
            <figure class="capsule capsule-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/nave-form.svg" width="75px" alt="">
            </figure>

            <?php echo do_shortcode('[wpforms id="151"]');?>        
            <figure class="capsule capsule-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/nave-form.svg" width="75px" alt="">
            </figure>
        </div>   
        <div class="container-rocket">
            <div class="container-title">
                <h2 class="main-title" >O hablemos por <br> <strong> Whatsapp</strong></h2>
            </div>
            <div class="container-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/rocket_2.svg" width="350px" alt="">                    
                <a href="https://api.whatsapp.com/send?phone=573002960792&text=Hola amigos de Belkacompany 🚀 me interesa hablar con ustedes, ¿Me brindan asesoria?" class="pop-whatsapp" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp_nube.png" width="100px" alt="">
                </a>
            </div>
        </div> 
    </div>            
</section>