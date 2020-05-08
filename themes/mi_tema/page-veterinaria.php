<?php get_header() ?>
 <style>
    .card{
        background-color: #C6E7DF;
    }
    .c{
            padding: 12px;
            margin-bottom: 20px;
            
        }
    .tit{
        color: #2EC6BB;
        padding-left: 0;
        text-align: center;
    }
    .titulo{
        text-align: center;
        color: #2EC6BB;
        padding: 12px;
        font-family: 'Playfair Display';
        font-size: 80px;
    }
    .colm{
        width: 100%;
        margin-left: 350px;
    }
 </style>
<?php get_template_part('_includes/header', 'section') ?>

    <h1 class="titulo">Veterinaria</h1>
    <div class="container row colm">
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
            <img src="<?php echo get_theme_file_uri() ?>/assets/images/car1.jpg" alt="Gato" class="w-100 h-auto card-img-top">
            <div class="card-body">
            <p class="card-title tit">Analisis Examenes</p>
                <p class="card-text">Contamos con lo ultimo en tecnologia para tener tus examanes mas precisos y en el menor tiempo.</p>
            </div>
        </div>
     </div>
    <div class="col-sm-12 col-md-4">
    <div class="card c" style="width: 18rem;">
    <img src="<?php echo get_theme_file_uri() ?>/assets/images/car2.jpg" alt="Gato" class="w-100 h-auto card-img-top">
        <div class="card-body">
            <p class="card-title tit">Consulta</p>
            <p class="card-text">Urgencias o consultas programadas , atencion a domicilio , cupon de descuento para miembros del hotel</p>
        </div>
        </div>
     </div>
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
        <img src="<?php echo get_theme_file_uri() ?>/assets/images/car3.jpg" alt="Gato" class="w-100 h-auto card-img-top">
            <div class="card-body">
                <p class="card-title tit">Esterilizacion</p>
                <p class="card-text">Procedimiento de castracion (machos) y esterelizacion (hembras) en menos de 12 hr, examenes y mediamentos incluidos en el valor total</p>
            </div>
         </div>
    </div>
        
    </div>
    <div class="container row colm">
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
        <img src="<?php echo get_theme_file_uri() ?>/assets/images/car4.jpg" alt="Gato" class="w-100 h-auto card-img-top">
                <div class="card-body">
                    <p class="card-title tit">Cirugia y Hospitalizacion</p>
                    <p class="card-text">Contamos con un pabellón con la más moderna tecnología para realizar toda clase de intervenciones, con la máxima seguridad y eficacia.</p>
                </div>
            </div>
        </div>
    <div class="col-sm-12 col-md-4">
    <div class="card c" style="width: 18rem;">
    <img src="<?php echo get_theme_file_uri() ?>/assets/images/car5.jpg" alt="Gato" class="w-100 h-auto card-img-top">
        <div class="card-body">
        <p class="card-title tit">Patologias Cronicas</p>
            <p class="card-text">bienestar felino es identificar y prevenir enfermedades, mejorar la calidad de vida y maximizar la longevidad, a través de exámenes físicos regulares y exámes de laboratorio</p>
        </div>
        </div>
     </div>
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
        <img src="<?php echo get_theme_file_uri() ?>/assets/images/car6r.jpg" alt="Gato" class="w-100 h-auto card-img-top">
            <div class="card-body">
            <p class="card-title tit">Kinesiologia y Recuperacion</p>
                <p class="card-text">Diferentes tecnicas terapeuticas para una recuperacion rapida y eficaz, desde Hidroterapia,Electroterapia,Termoterapia y mas</p>
            </div>
         </div>
    </div>
        
    </div>
    <div class="container row colm">
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
        <img src="<?php echo get_theme_file_uri() ?>/assets/images/car7.jpg" alt="Gato" class="w-100 h-auto card-img-top">
                <div class="card-body">
                <p class="card-title tit">Terapia Floral</p>
                    <p class="card-text">método completamente natural para solucionar problemas que aquejan a nuestros felinos. desde problemas de ansiedad o estrés hasta agresividad y problemas adaptabilidad.</p>
                </div>
            </div>
        </div>
    <div class="col-sm-12 col-md-4">
    <div class="card c" style="width: 18rem;">
    <img src="<?php echo get_theme_file_uri() ?>/assets/images/car8.jpg" alt="Gato" class="w-100 h-auto card-img-top">
        <div class="card-body">
        <p class="card-title tit">Farmacia e insumos</p>
            <p class="card-text">Contamos los medicamentos de prescripción más frecuente y que nuestro equipo de médicos recomienda. Además tenemos a su disposición accesorios post-operatorios y todo para su recuperacion </p>
        </div>
        </div>
     </div>
    <div class="col-sm-12 col-md-4">
        <div class="card c" style="width: 18rem;">
        <img src="<?php echo get_theme_file_uri() ?>/assets/images/car9.jpg" alt="Gato" class="w-100 h-auto card-img-top">
            <div class="card-body">
            <p class="card-title tit">Ecografia y Rayos</p>
                <p class="card-text">uno de los exámenes complementarios mas utilizado.Esto gracias a las múltiples aplicaciones que esta técnica ofrece:ecografías renales,vesicales,sistema gastrointestinal,gestación,etc</p>
            </div>
         </div>
    </div>
        
    </div>

<?php get_footer() ?>