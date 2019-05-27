<?php
/**
* Template Name: Hespérides
*/  get_header(); ?>

<main>
<section class="desarrollo hero px-0">
    <div class="container-fluid px-0">
        <div class="row justify-content-center px-0 no-gutters mt-5">
            <div class="col-12 col-md-6 px-5 py-5">
                <h1 class="green-text"><?php the_field('nombre_desarrollo'); ?></h1>
                <h6 class="green-text mb-3"><?php the_field('ubicacion_desarrollo'); ?></h6>
                <p><?php the_field('descripcion'); ?></p>

                <div class="row justify-content-start mt-4">
                    <?php if( get_field('boton_de_contacto') ): ?>
                        <div class="col-10 col-md-6 mb-3 text-center">
                            <a href="#contacto" data-scroll>
                                <button class="btn btn-cijarsa-outline btn-lg">Contáctanos</button>
                            </a>
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