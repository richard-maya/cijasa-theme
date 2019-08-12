<?php
/**
* Template Name: Atención
*/  get_header(); ?>

<main>
<section class="atencion my-5 pt-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-11 col-lg-10 px-5 py-5">
                <h1 class="d-none">ATENCIÓN AL CLIENTE</h1>
                <h3 class="text-center blue-text"><?php the_field('titulo'); ?></h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <h6 class="text-danger text-center"><?php the_field('subtitulo'); ?></h6>
                        <p><?php the_field('texto'); ?>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Lo sentimos, el formulario no funciona correctamente.' ); ?></p>
                        <?php endif; ?>
                        <h5 class="text-center blue-text mt-3"><?php the_field('firma'); ?></h5>
                    </div>
                </div>
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
                <p class="text-center"><small>Al enviarnos un mensaje aceptas nuestros <a href="https://www.cijarsa.com.mx/AVISO-DE-PRIVACIDAD-CIJARSA.pdf" target="_blank" rel="external" class="green-text">términos y condiciones.</a></small></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>