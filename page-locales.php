<?php
/**
* Template Name: Locales
*/  get_header(); ?>

<main>
<!-- LOCALES
================================================== -->
<section class="local-stores d-flex hero align-items-center" style="background: url('<?php the_field('imagen_de_fondo'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;background-attachment:fixed;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h1 class="bordered-title"><?php the_field('titulo_de_seccion'); ?></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <div class="row justify-content-center">
                    <!-- Local 1 -->
                    <?php if( get_field('local_1') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-1-modal">
                                    <img src="<?php the_field('imagen_desarrollo_1'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_1'); ?>">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-1-modal">
                                        <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_1'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_1'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Local 2 -->
                    <?php if( get_field('local_2') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-2-modal">
                                    <img src="<?php the_field('imagen_desarrollo_2'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_2'); ?>">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-2-modal">
                                        <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_2'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_2'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Local 3 -->
                    <?php if( get_field('local_3') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-3-modal">
                                    <img src="<?php the_field('imagen_desarrollo_3'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_3'); ?>">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-3-modal">
                                        <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_3'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_3'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<!-- MODAL WINDOWS
================================================== -->
<!-- Desarrollo 1 -->
<div class="modal fade px-0 py-0" id="desarrollo-1-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-1-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_1'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_1'); ?></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-1-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_1_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_1_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_1_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-1-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-1-carousel-controls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Desarrollo 2 -->
<div class="modal fade px-0 py-0" id="desarrollo-2-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-2-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_2'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_2'); ?></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-2-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_2_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_2_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_2_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-2-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-2-carousel-controls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Desarrollo 3 -->
<div class="modal fade px-0 py-0" id="desarrollo-3-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-3-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_3'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_3'); ?></p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-3-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_3_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_3_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_3_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-3-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-3-carousel-controls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CONTACT FORM
================================================== -->
<section class="contact-form pt-5" id="contact-form">
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