<?php
/**
* Template Name: Buen Suceso
*/  get_header(); ?>

<main>
<!-- BUEN SUCESO
================================================== -->
<section class="desarrollo hero px-0">
    <div class="container-fluid px-0">
        <div class="row justify-content-center px-0 no-gutters mt-5">
            <div class="col-12 col-md-6 px-5 py-5">
                <h1 class="green-text">BUEN SUCESO</h1>
                <p>Conjunto Urbano. Cuenta con una construcción Tradicional, materiales de primera calidad, Muros Independientes, 2 ½ baño, Closet en las 3 recamaras, Cocina Integral, excelentes acabados.</p>
                <p>Con fácil acceso a las principales avenidas, centros comerciales y lugares recreativos.</p>
                <p>A 10 min de la estación del tren interurbano.</p>
                <p class="mt-2 mb-4"><strong>Números de contacto:</strong>
                    <a href="tel:713 131 5951">(713) 131 5951</a> y <a href="tel:713 131 5858">(713) 131 5858</a>.
                </p>

                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Modelo ORO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Modelo MALINALCO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Modelo IXTAPAN</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row justify-content-center pt-3">
                            <div class="col-12">
                                <ul>
                                    <li>Terreno: 64m<sup>2</sup></li>
                                    <li>Construcción: 68.82m<sup>2</sup></li>
                                    <li>2 recámaras</li>
                                    <li>1 ½ baño</li>
                                    <li>Sala y comedor</li>
                                    <li>Cocina</li>
                                    <li>Patio de servicio</li>
                                    <li>1 cajón para auto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row justify-content-center pt-3">
                            <div class="col-12">
                                <ul>
                                    <li>Terreno: 64m<sup>2</sup></li>
                                    <li>Construcción: 73m<sup>2</sup></li>
                                    <li>2 recámaras y 1 estudio</li>
                                    <li>1 ½ baño</li>
                                    <li>Sala y comedor</li>
                                    <li>Cocina</li>
                                    <li>Patio de servicio</li>
                                    <li>1 cajón para auto</li>
                                </ul>
                                <p class="mt-1">* MALINALCO PLUS 77.21m<sup>2</sup> de construcción</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row justify-content-center pt-3">
                            <div class="col-12">
                                <ul>
                                    <li>Terreno: 96m<sup>2</sup></li>
                                    <li>Construcción: 84.53m<sup>2</sup></li>
                                    <li>3 recámaras</li>
                                    <li>1 ½ baño</li>
                                    <li>Cocina</li>
                                    <li>Sala y comedor</li>
                                    <li>Patio de servicio</li>
                                    <li>2 cajones para auto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row justify-content-center mt-3">
                    <div class="col-10 col-md-4 mb-3 mb-md-0 text-center">
                        <a href="#contact-form" data-scroll>
                            <button class="btn btn-cijarsa-outline btn-lg">Contáctanos</button>
                        </a>
                    </div>
                    <div class="col-10 col-md-4 mb-3 mb-md-0 text-center">
                        <a href="locales.html">
                            <button class="btn btn-cijarsa-outline btn-lg">Ver Locales</button>
                        </a>
                    </div>
                    <div class="col-10 col-md-4 mb-3 mb-md-0 text-center">
                        <button class="btn btn-cijarsa-green btn-lg" onclick="showHideGallery();" id="tour-button">Ver Tour 360º</button>
                        <button class="btn btn-cijarsa-green btn-lg d-none" onclick="showHideGallery();" id="gallery-button">Ver Galería</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="panorama" class="panorama-section d-none"></div>
                <div id="san-valentin-carouselControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="desarrollo-slider d-block" style="background: url('img/buen-suceso/buen-suceso-1.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/buen-suceso/buen-suceso-2.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/buen-suceso/buen-suceso-3.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/buen-suceso/buen-suceso-4.jpg');"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="desarrollo-slider d-block" style="background: url('img/buen-suceso/buen-suceso-5.jpg');"></div>
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