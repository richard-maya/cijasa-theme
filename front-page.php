<?php get_header(); ?>

<main>
<!-- INTRO
================================================== -->
<section class="intro hero d-flex align-items-center">
    <div id="intro-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block" id="intro-slider-1" style="background: url('<?php the_field('imagen-inicio-1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
            </div>
            <div class="carousel-item">
                <div class="d-block" id="intro-slider-2" style="background: url('<?php the_field('imagen-inicio-2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
            </div>
            <div class="carousel-item">
                <div class="d-block" id="intro-slider-3" style="background: url('<?php the_field('imagen-inicio-3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#intro-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#intro-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h1 class="d-none">Casas en venta Toluca, Metepec y Estado de México</h1>
                <h3 class="white-text mb-4 shadow-text"><?php the_field('titulo'); ?></h3>
                <p class="lead white-text shadow-text"><?php the_field('subtitulo'); ?></p>
                <div class="row justify-content-center">
                    <div class="col-10 col-md-9 col-lg-8">
                        <a href="#about-us" data-scroll>
                            <button class="btn btn-cijarsa-green btn-lg btn-block">¡Conócenos!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABOUT US
================================================== -->
<section class="about-us py-5 gray-section" id="about-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h3 class="green-text mb-3"><?php the_field('titulo_quienes_somos'); ?></h3>
                <p><?php the_field('texto_quienes_somos'); ?></p>
            </div>
        </div>
    </div>
</section>


<!-- MISSION STATEMENT
================================================== -->
<section class="mission-statement px-0 mx-0">
    <div class="container-fluid px-0 mx-0">
        <div class="row no-gutters">
            <div class="col-12 col-md-6 square-lg" id="first-square" style="background: url('<?php the_field('quienes_somos_imagen_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
            <div class="col-12 col-md-6">
                <div class="square-sm px-4 py-4">
                    <h4 class="green-text"><?php the_field('titulo_mision'); ?></h4>
                    <p><?php the_field('texto_mision'); ?></p>
                </div>
                <div class="square-sm d-none d-md-flex" id="second-square" style="background: url('<?php the_field('quienes_somos_imagen_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                <div class="square-sm d-none d-md-flex" id="third-square" style="background: url('<?php the_field('quienes_somos_imagen_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                <div class="square-sm px-2 px-md-4 py-4 text-right">
                    <h4 class="green-text"><?php the_field('titulo_valores'); ?></h4>
                    <div class="values">
                        <p><?php the_field('texto_valores'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="rectangle-sm px-4 py-4">
                    <h4 class="green-text"><?php the_field('titulo_vision'); ?></h4>
                    <p><?php the_field('texto_vision'); ?></p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="rectangle-sm" id="fourth-square" style="background: url('<?php the_field('quienes_somos_imagen_4'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
            </div>
        </div>
    </div>
</section>


<!-- DEVELOPMENTS
================================================== -->
<section class="developments py-5 gray-section">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-12 text-center">
                <h3 class="blue-text">Desarrollos</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="en-venta-tab" data-toggle="tab" href="#en-venta-section" role="tab" aria-controls="en-venta" aria-selected="true">En Venta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vendidos-tab" data-toggle="tab" href="#vendidos-section" role="tab" aria-controls="vendidos-tab" aria-selected="false">Vendidos</a>
                            </li>
                        </ul>
        
                        <!-- Desarrollos en venta -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="en-venta-section" role="tabpanel" aria-labelledby="en-venta-tab">
                                <div class="row justify-content-center my-4">
                                    <div class="col-12">
                                        <div class="row justify-content-start">

                                            <!-- Desarrollo 1 -->
                                            <?php if( get_field('desarrollo_1') ): ?>
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
                                            
                                            <!-- Desarrollo 2 -->
                                            <?php if( get_field('desarrollo_2') ): ?>
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
                                            
                                            <!-- Desarrollo 3 -->
                                            <?php if( get_field('desarrollo_3') ): ?>
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
        
                            <!-- Desarrollos vendidos -->
                            <div class="tab-pane fade" id="vendidos-section" role="tabpanel" aria-labelledby="vendidos-tab">
                                <div class="row justify-content-center my-4">
                                    <div class="col-12">
                                        <div class="row justify-content-start">
                                            
                                            <!-- Desarrollo 4 -->
                                            <?php if( get_field('desarrollo_4') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-4-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_4'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_4'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-4-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_4'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_4'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                           
                                            <!-- Desarrollo 5 -->
                                            <?php if( get_field('desarrollo_5') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-5-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_5'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_5'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-5-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_5'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_5'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Desarrollo 6 -->
                                            <?php if( get_field('desarrollo_6') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-6-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_6'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_6'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-6-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_6'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_6'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Desarrollo 7 -->
                                            <?php if( get_field('desarrollo_7') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-7-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_7'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_7'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-7-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_7'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_7'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Desarrollo 8 -->
                                            <?php if( get_field('desarrollo_8') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-8-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_8'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_8'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-8-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_8'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_8'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Desarrollo 9 -->
                                            <?php if( get_field('desarrollo_9') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-9-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_9'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_9'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-9-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_9'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_9'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <!-- Desarrollo 10 -->
                                            <?php if( get_field('desarrollo_10') ): ?>
                                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                                    <div class="card px-2 py-2">
                                                        <a href="#" data-toggle="modal" data-target="#desarrollo-10-modal">
                                                            <img src="<?php the_field('imagen_desarrollo_10'); ?>" class="card-img-top" alt="<?php the_field('nombre_desarrollo_10'); ?>">
                                                        </a>
                                                        <div class="card-body text-center">
                                                            <div class="green-divider mb-2"></div>
                                                            <a href="#" data-toggle="modal" data-target="#desarrollo-10-modal">
                                                                <h6 class="card-title blue-text no-wow"><?php the_field('nombre_desarrollo_10'); ?></h6>
                                                            </a>
                                                            <p class="card-text blue-text no-wow"><small><?php the_field('ubicacion_desarrollo_10'); ?></small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_1'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
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
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_2'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
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
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_3'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
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


<!-- Desarrollo 4 -->
<div class="modal fade px-0 py-0" id="desarrollo-4-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-4-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_4'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_4'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_4'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-4-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_4_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_4_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_4_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-4-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-4-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 5 -->
<div class="modal fade px-0 py-0" id="desarrollo-5-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-5-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_5'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_5'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_5'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-5-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_5_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_5_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_5_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-5-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-5-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 6 -->
<div class="modal fade px-0 py-0" id="desarrollo-6-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-6-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_6'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_6'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_6'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-6-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_6_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_6_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_6_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-6-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-6-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 7 -->
<div class="modal fade px-0 py-0" id="desarrollo-7-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-7-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_7'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_7'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_7'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-7-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_7_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_7_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_7_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-7-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-7-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 8 -->
<div class="modal fade px-0 py-0" id="desarrollo-8-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-8-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_8'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_8'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_8'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-8-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_8_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_8_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_8_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-8-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-8-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 9 -->
<div class="modal fade px-0 py-0" id="desarrollo-9-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-9-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_9'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_9'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_9'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-9-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_9_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_9_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_9_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-9-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-9-carousel-controls" role="button" data-slide="next">
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


<!-- Desarrollo 10 -->
<div class="modal fade px-0 py-0" id="desarrollo-10-modal" tabindex="-1" role="dialog" aria-labelledby="desarrollo-10-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content py-0">
            <div class="modal-body px-0 py-0">
                <div class="container-fluid px-0 py-0">
                    <div class="row justify-content-center px-0 no-gutters">
                        <div class="col-12 col-md-6 py-3 px-3">
                            <h5 class="green-text mb-4 no-wow"><?php the_field('nombre_desarrollo_10'); ?></h5>
                            <p class="no-wow"><?php the_field('descripcion_desarrollo_10'); ?></p>
                            <div class="row justify-content-end">
                                <div class="col-12 text-right">
                                    <a href="<?php the_field('enlace_desarrollo_10'); ?>">
                                        <button class="btn btn-cijarsa-green">Ver más <i class="fas fa-plus-circle white-text fa-lg"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div id="desarrollo-10-carousel-controls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_10_carrusel_1'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_10_carrusel_2'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="san-valentin-slider d-block" style="background: url('<?php the_field('desarrollo_10_carrusel_3'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#desarrollo-10-carousel-controls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#desarrollo-10-carousel-controls" role="button" data-slide="next">
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


<!-- SCRIPTS
================================================== -->
<script>
// DEVELOPMENTS
// ------------------------------->
$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
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