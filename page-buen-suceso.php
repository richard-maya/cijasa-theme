<?php
/**
* Template Name: Buen Suceso
*/  get_header(); ?>

<main>
<section class="desarrollo hero px-0">
    <div class="container-fluid px-0">
        <div class="row justify-content-center px-0 no-gutters mt-5">
            <div class="col-12 col-md-6 px-5 py-5">
                <h1 class="green-text"><?php the_field('nombre_desarrollo'); ?></h1>
                <h6 class="green-text mb-3"><?php the_field('ubicacion_desarrollo'); ?></h6>
                <p><?php the_field('descripcion'); ?></p>

                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <?php if( get_field('modelo_1') ): ?>
                        <li class="nav-item">
                            <a class="nav-link active" id="modelo-1-tab" data-toggle="tab" href="#modelo-1" role="tab" aria-controls="modelo-1" aria-selected="true"><?php the_field('nombre_modelo_1'); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('modelo_2') ): ?>
                        <li class="nav-item">
                            <a class="nav-link" id="modelo-2-tab" data-toggle="tab" href="#modelo-2" role="tab" aria-controls="modelo-2" aria-selected="false"><?php the_field('nombre_modelo_2'); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('modelo_3') ): ?>
                        <li class="nav-item">
                            <a class="nav-link" id="modelo-3-tab" data-toggle="tab" href="#modelo-3" role="tab" aria-controls="modelo-3" aria-selected="false"><?php the_field('nombre_modelo_3'); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('modelo_4') ): ?>
                        <li class="nav-item">
                            <a class="nav-link" id="modelo-4-tab" data-toggle="tab" href="#modelo-4" role="tab" aria-controls="modelo-4" aria-selected="false"><?php the_field('nombre_modelo_4'); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('modelo_5') ): ?>
                        <li class="nav-item">
                            <a class="nav-link" id="modelo-5-tab" data-toggle="tab" href="#modelo-5" role="tab" aria-controls="modelo-5" aria-selected="false"><?php the_field('nombre_modelo_5'); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php if( get_field('modelo_1') ): ?>
                        <div class="tab-pane fade show active" id="modelo-1" role="tabpanel" aria-labelledby="modelo-1-tab">
                            <div class="row justify-content-center pt-3">
                                <div class="col-12">
                                    <?php the_field('descripcion_modelo_1'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('modelo_2') ): ?>
                        <div class="tab-pane fade" id="modelo-2" role="tabpanel" aria-labelledby="modelo-2-tab">
                            <div class="row justify-content-center pt-3">
                                <div class="col-12">
                                    <?php the_field('descripcion_modelo_2'); ?> 
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if( get_field('modelo_3') ): ?>
                        <div class="tab-pane fade" id="modelo-3" role="tabpanel" aria-labelledby="modelo-3-tab">
                            <div class="row justify-content-center pt-3">
                                <div class="col-12">
                                    <?php the_field('descripcion_modelo_3'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if( get_field('modelo_4') ): ?>
                        <div class="tab-pane fade" id="modelo-4" role="tabpanel" aria-labelledby="modelo-4-tab">
                            <div class="row justify-content-center pt-3">
                                <div class="col-12">
                                    <?php the_field('descripcion_modelo_4'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <?php if( get_field('modelo_5') ): ?>
                        <div class="tab-pane fade" id="modelo-5" role="tabpanel" aria-labelledby="modelo-5-tab">
                            <div class="row justify-content-center pt-3">
                                <div class="col-12">
                                    <?php the_field('descripcion_modelo_5'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                
                <div class="row justify-content-start mt-4">
                    <?php if( get_field('boton_de_contacto') ): ?>
                        <div class="col-10 col-md-6 mb-3 text-center">
                            <a href="#contacto" data-scroll>
                                <button class="btn btn-cijarsa-outline btn-lg">Contáctanos</button>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('tour_360') ): ?>
                        <div class="col-10 col-md-6 mb-3 text-center">
                            <button class="btn btn-cijarsa-green btn-lg" onclick="showHideGallery();" id="tour-button">Ver Tour 360º</button>
                            <button class="btn btn-cijarsa-green btn-lg d-none" onclick="showHideGallery();" id="gallery-button">Ver Galería</button>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('venta_de_locales') ): ?>
                        <div class="col-10 col-md-6 mb-3 text-center">
                            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/locales-en-venta">
                                <button class="btn btn-cijarsa-outline btn-lg">Ver Locales en Venta</button>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('boton_ubicacion') ): ?>
                        <div class="col-10 col-md-6 mb-3 text-center">
                            <a href="<?php the_field('link_ubicacion'); ?>" target="_blank" rel="external">
                                <button class="btn btn-cijarsa-outline btn-lg">Ver en Google Maps</button>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


            <div class="col-12 col-md-6">
                <div id="panorama" class="panorama-section d-none"></div>
                <div id="san-valentin-carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="desarrollo-slider d-block" style="background: url('<?php the_field('carrusel_imagen_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('<?php the_field('carrusel_imagen_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('<?php the_field('carrusel_imagen_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('<?php the_field('carrusel_imagen_4'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('<?php the_field('carrusel_imagen_5'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#san-valentin-carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#san-valentin-carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<script type="text/javascript" src="https://cdn.pannellum.org/2.4/pannellum.js"></script>
<script>
pannellum.viewer('panorama', {  
    "autoLoad": false,
    "title": "El Buen Suceso",
    "hfov": 100,
    "type": "equirectangular",
    "showControls": false,
    "default": {
        "firstScene": "parque1",
        "sceneFadeDuration": 1000
    },
    "basePath": "https://www.cijarsa.com.mx/tour360/buen-suceso/",

    "scenes": {
        "sala": {
            "panorama": "sala.jpg",
            "hotSpots": [
                {
                    "pitch": -4.6,
                    "yaw": -52.9,
                    "type": "scene",
                    "text": "Cocina",
                    "sceneId": "cocina",
                    "targetYaw": 94.7,
                    "targetPitch": -4.2
                },
                {
                    "pitch": 0.15,
                    "yaw": -95.4,
                    "type": "scene",
                    "text": "Segundo Piso",
                    "sceneId": "escaleras",
                    "targetYaw": 1.8,
                    "targetPitch": 1
                },
                {
                    "pitch": -4.4,
                    "yaw": -142.6,
                    "type": "scene",
                    "text": "Parque",
                    "sceneId": "parque1",
                    "targetYaw": 91,
                    "targetPitch": 2.7
                },
                {
                    "pitch": -3.1,
                    "yaw": -117,
                    "type": "info",
                    "text": "1/2 Baño"
                }
            ]
        },
        
        "cocina": {
            "panorama": "cocina.jpg",
            "hotSpots": [
                {
                    "pitch": -1.9,
                    "yaw": 129.47,
                    "type": "scene",
                    "text": "Patio",
                    "sceneId": "patio",
                    "targetYaw": -99.13,
                    "targetPitch": -3.6
                },
                {
                    "pitch": -1.5,
                    "yaw": -126.1,
                    "type": "scene",
                    "text": "Sala",
                    "sceneId": "sala",
                    "targetYaw": 152.9,
                    "targetPitch": 1.7
                }
            ]
        },
        
        "patio": {
            "panorama": "patio.jpg",
            "hotSpots": [
                {
                    "pitch": 0.5,
                    "yaw": 84.7,
                    "type": "scene",
                    "text": "Cocina",
                    "sceneId": "cocina",
                    "targetYaw": -90.5,
                    "targetPitch": -0.9
                }
            ]
        },
        
        "escaleras": {
            "panorama": "escaleras.jpg",
            "hotSpots": [
                {
                    "pitch": -0.9,
                    "yaw": 64,
                    "type": "scene",
                    "text": "Habitación 3",
                    "sceneId": "habitacion3",
                    "targetYaw": -93.6,
                    "targetPitch": -4.3
                },
                {
                    "pitch": -2.5,
                    "yaw": -61.1,
                    "type": "scene",
                    "text": "Habitación 2",
                    "sceneId": "habitacion2",
                    "targetYaw": -88.7,
                    "targetPitch": -3.7
                },
                {
                    "pitch": -4.2,
                    "yaw": -115.1,
                    "type": "scene",
                    "text": "Habitación 1",
                    "sceneId": "habitacion1",
                    "targetYaw": -108.9,
                    "targetPitch": -4.7
                },
                {
                    "pitch": -9,
                    "yaw": -171.9,
                    "type": "scene",
                    "text": "Primer Piso",
                    "sceneId": "sala",
                    "targetYaw": 83.1,
                    "targetPitch": 0.6
                },
                {
                    "pitch": -3.8,
                    "yaw": 110.1,
                    "type": "scene",
                    "text": "Baño",
                    "sceneId": "bano",
                    "targetYaw": -96.1,
                    "targetPitch": -0.7
                }
            ]
        },
        
        "habitacion1": {
            "panorama": "habitacion-1.jpg",
            "hotSpots": [
                {
                    "pitch": 1.1,
                    "yaw": 44.4,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetYaw": 90.3,
                    "targetPitch": 0.7
                }
            ]
        },
        
        "habitacion2": {
            "panorama": "habitacion-2.jpg",
            "hotSpots": [
                {
                    "pitch": -2,
                    "yaw": 111.9,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetYaw": 90.3,
                    "targetPitch": 0.7
                }
            ]
        },
        
        "habitacion3": {
            "panorama": "habitacion-3.jpg",
            "hotSpots": [
                {
                    "pitch": -0.7,
                    "yaw": 57.5,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetYaw": -84.6,
                    "targetPitch": -3.5
                }
            ]
        },
        
        "bano": {
            "panorama": "bano.jpg",
            "hotSpots": [
                {
                    "pitch": -2.6,
                    "yaw": 84.4,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetYaw": -84.6,
                    "targetPitch": -3.5
                }
            ]
        },
        
        "parque1": {
            "pitch": 3.3,
            "yaw": -90.5,
            "panorama": "parque-1.jpg",
            "hotSpots": [
                {
                    "pitch": 3.3,
                    "yaw": -90.5,
                    "type": "scene",
                    "text": "Casa Muestra",
                    "sceneId": "sala",
                    "targetYaw": -3.8,
                    "targetPitch": 1
                },
                {
                    "pitch": 0.5,
                    "yaw": 135.4,
                    "type": "scene",
                    "text": "Escuela",
                    "sceneId": "escuela",
                    "targetYaw": -82.9,
                    "targetPitch": 1.2
                },
                {
                    "pitch": -0.5,
                    "yaw": 61,
                    "type": "scene",
                    "text": "Juegos",
                    "sceneId": "parque2",
                    "targetYaw": -150,
                    "targetPitch": 0
                },
                {
                    "pitch": -0.3,
                    "yaw": 97.9,
                    "type": "scene",
                    "text": "Bancas",
                    "sceneId": "parque3",
                    "targetYaw": -53.4,
                    "targetPitch": -2.2
                }
            ]
        },
        
        "parque2": {
            "panorama": "parque-2.jpg",
            "hotSpots": [
                {
                    "pitch": -0.3,
                    "yaw": -23,
                    "type": "scene",
                    "text": "Escuela",
                    "sceneId": "escuela",
                    "targetYaw": -23,
                    "targetPitch": 2
                },
                {
                    "pitch": -0.5,
                    "yaw": 3.5,
                    "type": "scene",
                    "text": "Bancas",
                    "sceneId": "parque3",
                    "targetYaw": 68.6,
                    "targetPitch": 1.8
                },
                {
                    "pitch": 0,
                    "yaw": 58.9,
                    "type": "scene",
                    "text": "Calle",
                    "sceneId": "parque1",
                    "targetYaw": -90.5,
                    "targetPitch": 2
                }
            ]
        },
        
        "parque3": {
            "panorama": "parque-3.jpg",
            "hotSpots": [
                {
                    "pitch": -2.9,
                    "yaw": -107.6,
                    "type": "scene",
                    "text": "Juegos",
                    "sceneId": "parque2",
                    "targetYaw": -150,
                    "targetPitch": 0
                },
                {
                    "pitch": -1,
                    "yaw": 33.7,
                    "type": "scene",
                    "text": "Escuela",
                    "sceneId": "escuela",
                    "targetYaw": -53.4,
                    "targetPitch": -1.9
                },
                {
                    "pitch": 1,
                    "yaw": 150,
                    "type": "scene",
                    "text": "Calle",
                    "sceneId": "parque1",
                    "targetYaw": -90.5,
                    "targetPitch": 3.3
                }
            ]
        },
        
        "escuela": {
            "panorama": "escuela.jpg",
            "hotSpots": [
                {
                    "pitch": -0.4,
                    "yaw": 161.3,
                    "type": "scene",
                    "text": "Bancas",
                    "sceneId": "parque3",
                    "targetYaw": -142.2,
                    "targetPitch": -2.1
                },
                {
                    "pitch": 1.3,
                    "yaw": 136.8,
                    "type": "scene",
                    "text": "Calle",
                    "sceneId": "parque1",
                    "targetYaw": -90.5,
                    "targetPitch": 3.3
                },
                {
                    "pitch": 0.9,
                    "yaw": -174.6,
                    "type": "scene",
                    "text": "Juegos",
                    "sceneId": "parque2",
                    "targetYaw": -150,
                    "targetPitch": 0
                }
            ]
        }
    }
});
</script>


<!-- CONTACT FORM
================================================== -->
<section class="contact-form pt-5" id="contacto">
    <div class="container">
        <div class="row justify-content-center text-center mb-4">
            <h3>¡CONTÁCTANOS!</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-6">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Lo sentimos, el formulario no funciona correctamente.' ); ?></p>
                <?php endif; ?>

                <p class="text-center"><small>Al enviarnos un mensaje aceptas nuestros <a href="https://www.cijarsa.com.mx/AVISO-DE-PRIVACIDAD-CIJARSA.pdf" target="_blank" rel="external" class="green-text">términos y condiciones.</a></small></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>