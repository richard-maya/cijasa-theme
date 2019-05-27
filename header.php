<!doctype html>
<html lang="mx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2019 Iconica Studio">

    <!-- FAVICONS
    ================================================== -->
    

    <!-- GOOGLE TAG MANAGER
    ================================================== -->

    
    <!-- SITE TITLE
    ================================================== -->
    <title><?php wp_title(''); ?> | CIJARSA</title>

    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="Casas en venta en Toluca, Metepec, Santiago Tianguistenco, Zinacantepec, Temoaya y Lerma.">
    <meta name="keywords" content="casas en venta toluca, casas en venta metepec">
    <meta name="author" content="Iconica Studio">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- NAVBAR
================================================== -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar-intro">
    <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cijarsa-logo.png" alt="cijarsa-logo" height="35px" width="auto" class="ml-2">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo esc_url(home_url()); ?>">Cijarsa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Desarrollos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/san-valentin">San Valentín</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/buen-suceso">El Buen Suceso</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/hesperides">Las Hespérides</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/buena-ventura">Buena Ventura</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/porvenir-1">El Porvenir I</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/porvenir-2">El Porvenir II</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/locales-en-venta">Locales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/servicios">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/atencion">Atención de Garantías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(home_url()); ?>#contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>