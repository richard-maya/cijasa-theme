<?php
/**
* Template Name: Servicios
*/  get_header(); ?>

<main>
<!-- LOCALES
================================================== -->
<section class="services d-flex hero align-items-center" style="background: url('<?php the_field('imagen_de_fondo'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;background-attachment:fixed;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h1 class="bordered-title"><?php the_field('titulo_de_seccion'); ?></h1>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5">
            <div class="col-12 col-md-6 col-lg-3">
                <h6><?php the_field('servicio_1'); ?></h6>
                <div class="green-divider my-3"></div>
                <p><?php the_field('descripcion_servicio_1'); ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h6><?php the_field('servicio_2'); ?></h6>
                <div class="green-divider my-3"></div>
                <p><?php the_field('descripcion_servicio_2'); ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h6><?php the_field('servicio_3'); ?></h6>
                <div class="green-divider my-3"></div>
                <p><?php the_field('descripcion_servicio_3'); ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h6><?php the_field('servicio_4'); ?></h6>
                <div class="green-divider my-3"></div>
                <p><?php the_field('descripcion_servicio_4'); ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <a href="#contact-form" data-scroll>
                    <button class="btn btn-cijarsa-green btn-lg px-5">Contáctanos</button>
                </a>
            </div>
        </div>
    </div>
</section>
</main>


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