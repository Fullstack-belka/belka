<?php 

    $id_contact = '151';
    $message_wsp = '';

    if($post->ID == 136){
        // VENDER
        $id_contact = '202';
        $message_wsp = ' sobre el servicio de Ventas';
    }
    if($post->ID == 140){
        // OBTENER LEADS
        $id_contact = '181';
        $message_wsp = ' sobre el servicio de Leads';
    }
    if($post->ID == 138){
        // UNA WEB
        $id_contact = '185';
        $message_wsp = ' sobre el servicio de una nueva web';
    }
    if($post->ID == 144){
        // AREA COMERCIAL
        $id_contact = '198';
        $message_wsp = ' sobre el servicio de consolidar mi area comercial';
    }
    if($post->ID == 142){
        // PRESENCIA DIGITAL
        $id_contact = '189';
        $message_wsp = ' sobre el servicio de mejorar mi presencia digital';
    }
    if($post->ID == 146){
        // AUMENTAR MI COMUNIDAD
        $id_contact = '205';
        $message_wsp = ' sobre el servicio de aumentar mi comunidad';
    }


    //echo $id_contact;

?>

<section id="contact-section" class="">    
    <div class="container-section">
        <div class="container-form <?= $name ?>">
            <figure class="capsule capsule-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/nave-form.svg" width="75px" alt="">
            </figure>

            <?php echo do_shortcode('[wpforms id="'.$id_contact.'"]');?>        
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
                <a href="https://api.whatsapp.com/send?phone=573002960792&text=Hola amigos de Belkacompany 🚀 me interesa hablar con ustedes<?=$message_wsp?>, ¿Me brindan asesoria?" class="pop-whatsapp" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp_nube.png" width="100px" alt="">
                </a>
            </div>
        </div> 
    </div>            
</section>