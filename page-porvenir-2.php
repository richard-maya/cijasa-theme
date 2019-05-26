<?php
/**
* Template Name: El Porvenir 2
*/  get_header(); ?>

<main>
<!-- SAN VALENTIN
================================================== -->
<section class="desarrollo hero px-0">
    <div class="container-fluid px-0">
        <div class="row justify-content-center px-0 no-gutters mt-5">
            <div class="col-12 col-md-6 px-5 py-5">
                <h1 class="green-text">EL PORVENIR II</h1>
                <p>Conjunto Urbano. Cuenta con una construcción Tradicional, materiales de primera calidad, Muros Independientes, 2 ½ baño, Closet en las 3 recamaras, Cocina Integral, excelentes acabados.</p>
                <p>Con fácil acceso a las principales avenidas, centros comerciales y lugares recreativos.</p>
                <p>A 10 min de la estación del tren interurbano.</p>
                <p class="lead">Modelo VALLE DE BRAVO:</p>
                <ul>
                    <li><strong>Terreno:</strong> 105m<sup>2</sup></li>
                    <li><strong>Construcción:</strong> 104.29m<sup>2</sup></li>
                </ul>
                <div class="row justify-content-center mt-5">
                    <div class="col-6 text-center">
                        <a href="#contact-form" data-scroll>
                            <button class="btn btn-cijarsa-outline btn-lg px-5">Contáctanos</button>
                        </a>
                    </div>
                    <!-- <div class="col-6 text-center">
                        <button class="btn btn-cijarsa-green btn-lg px-5" onclick="showHideGallery();" id="tour-button">Ver Tour 360º</button>
                        <button class="btn btn-cijarsa-green btn-lg px-5 d-none" onclick="showHideGallery();" id="gallery-button">Ver Galería</button>
                    </div> -->
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="panorama" class="panorama-section d-none"></div>
                <div id="san-valentin-carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="desarrollo-slider d-block" style="background: url('img/porvenir-II/porvenir-II-1.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/porvenir-II/porvenir-II-2.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/porvenir-II/porvenir-II-3.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/porvenir-II/porvenir-II-4.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/porvenir-II/porvenir-II-5.jpg');"></div>
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

<?php get_footer(); ?>