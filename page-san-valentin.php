<?php
/**
* Template Name: San Valentín
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
    "title": "San Valentín",
    "hfov": 100,
    "type": "equirectangular",
    "showControls": false,
    "default": {
        "firstScene": "calle",
        "sceneFadeDuration": 1000
    },
    "basePath": "https://www.cijarsa.com.mx/tour360/san-valentin/",

    "scenes": {
        "sala": {
            "panorama": "sala.jpg",
            "hotSpots": [
                {
                    "pitch": -4.9,
                    "yaw": -134.6,
                    "type": "scene",
                    "text": "Cocina",
                    "sceneId": "cocina",
                    "targetPitch": 1.5,
                    "targetYaw": 164.1
                },
                {
                    "pitch": -0.5,
                    "yaw": -86.8,
                    "type": "scene",
                    "text": "Segundo Piso",
                    "sceneId": "escaleras",
                    "targetPitch": -2.2,
                    "targetYaw": -9.2
                },
                {
                    "pitch": -4.6,
                    "yaw": -52.9,
                    "type": "scene",
                    "text": "Parque",
                    "sceneId": "calle",
                    "targetYaw": 91,
                    "targetPitch": 2.7
                },
                {
                    "pitch": -3,
                    "yaw": -70.8,
                    "type": "info",
                    "text": "1/2 Baño"
                }
            ]
        },
        
        "cocina": {
            "panorama": "cocina.jpg",
            "hotSpots": [
                {
                    "pitch": -3.8,
                    "yaw": 54.5,
                    "type": "scene",
                    "text": "Patio",
                    "sceneId": "patio",
                    "targetPitch": -0.1,
                    "targetYaw": -102.4
                },
                {
                    "pitch": -5.3,
                    "yaw": -29.6,
                    "type": "scene",
                    "text": "Sala",
                    "sceneId": "sala",
                    "targetPitch": -3.6,
                    "targetYaw": 79.1
                }
            ]
        },
        
        "patio": {
            "panorama": "patio.jpg",
            "hotSpots": [
                {
                    "pitch": -0.4,
                    "yaw": 78.7,
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
                    "yaw": 126.1,
                    "type": "scene",
                    "text": "Habitación 3",
                    "sceneId": "habitacion3",
                    "targetPitch": -2.5,
                    "targetYaw": 39.3
                },
                {
                    "pitch": -7.2,
                    "yaw": -74.6,
                    "type": "scene",
                    "text": "Habitación Principal",
                    "sceneId": "habitacion1",
                    "targetPitch": 1,
                    "targetYaw": 91.1
                },
                {
                    "pitch": -1.1,
                    "yaw": 74.7,
                    "type": "scene",
                    "text": "Habitación 2",
                    "sceneId": "habitacion2",
                    "targetPitch": 1,
                    "targetYaw": -172.5
                },
                {
                    "pitch": -10.2,
                    "yaw": 166.7,
                    "type": "scene",
                    "text": "Primer Piso",
                    "sceneId": "sala",
                    "targetYaw": 83.1,
                    "targetPitch": 0.6
                },
                {
                    "pitch": -4.5,
                    "yaw": -120.7,
                    "type": "scene",
                    "text": "Baño",
                    "sceneId": "bano-1",
                    "targetPitch": -1.9,
                    "targetYaw": 23.7
                }
            ]
        },
        
        "habitacion1": {
            "panorama": "habitacion-1.jpg",
            "hotSpots": [
                {
                    "pitch": -7.5,
                    "yaw": 17,
                    "type": "scene",
                    "text": "Baño",
                    "sceneId": "bano-2",
                    "targetPitch": 1.6,
                    "targetYaw": 151.3
                },
                {
                    "pitch": -4.2,
                    "yaw": -40.7,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetPitch": -2,
                    "targetYaw": 99.1
                }
            ]
        },
        
        "habitacion2": {
            "panorama": "habitacion-2.jpg",
            "hotSpots": [
                {
                    "pitch": -4.1,
                    "yaw": -34.1,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetPitch": -0.8,
                    "targetYaw": -98.5
                }
            ]
        },
        
        "habitacion3": {
            "panorama": "habitacion-3.jpg",
            "hotSpots": [
                {
                    "pitch": 0.8,
                    "yaw": -108.2,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetPitch": -0.8,
                    "targetYaw": -98.5
                }
            ]
        },
        
        "bano-1": {
            "panorama": "bano-1.jpg",
            "hotSpots": [
                {
                    "pitch": -3.7,
                    "yaw": -131.8,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetPitch": -2,
                    "targetYaw": 99.1
                }
            ]
        },
        
        "bano-2": {
            "panorama": "bano-2.jpg",
            "hotSpots": [
                {
                    "pitch": -5,
                    "yaw": 65.8,
                    "type": "scene",
                    "text": "Pasillo",
                    "sceneId": "escaleras",
                    "targetPitch": -2,
                    "targetYaw": 99.1
                }
            ]
        },
        
        "parque1": {
            "panorama": "parque-1.jpg",
            "hotSpots": [
                {
                    "pitch": -1.6,
                    "yaw": 159.9,
                    "type": "scene",
                    "text": "Casa Muestra",
                    "sceneId": "calle",
                    "targetPitch": -0.6,
                    "targetYaw": 11.2
                },
                {
                    "pitch": -0.2,
                    "yaw": -113.6,
                    "type": "scene",
                    "text": "Juegos",
                    "sceneId": "parque2",
                    "targetPitch": -5.7,
                    "targetYaw": 174.9
                }
            ]
        },
        
        "parque2": {
            "panorama": "parque-2.jpg",
            "hotSpots": [
                {
                    "pitch": 1.1,
                    "yaw": 22.4,
                    "type": "scene",
                    "text": "Escuela",
                    "sceneId": "parque1",
                    "targetPitch": 0.9,
                    "targetYaw": 30.7
                },
                {
                    "pitch": 2.4,
                    "yaw": -59.5,
                    "type": "scene",
                    "text": "Cancha",
                    "sceneId": "parque3",
                    "targetPitch": -0.4,
                    "targetYaw": -165.2
                }
            ]
        },
        
        "parque3": {
            "panorama": "parque-3.jpg",
            "hotSpots": [
                {
                    "pitch": -1,
                    "yaw": 33.7,
                    "type": "scene",
                    "text": "Juegos",
                    "sceneId": "parque2",
                    "targetPitch": -6.4,
                    "targetYaw": 114.3
                }
            ]
        },
        
        "calle": {
            "pitch": -0.6,
            "yaw": 11.2,
            "panorama": "calle.jpg",
            "hotSpots": [
                {
                    "pitch": -0.6,
                    "yaw": 11.2,
                    "type": "scene",
                    "text": "Casa Muestra",
                    "sceneId": "sala",
                    "targetPitch": -1.6,
                    "targetYaw": 169.7
                },
                {
                    "pitch": -1.4,
                    "yaw": 98,
                    "type": "scene",
                    "text": "Parque",
                    "sceneId": "parque1",
                    "targetYaw": -90.5,
                    "targetPitch": 3.3
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