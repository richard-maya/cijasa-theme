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
    <link rel="apple-touch-icon" sizes="180x180" href="https://cijarsa.com.mx/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cijarsa.com.mx/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cijarsa.com.mx/favicons/favicon-16x16.png">
    <link rel="manifest" href="https://cijarsa.com.mx/favicons/site.webmanifest">
    <link rel="mask-icon" href="https://cijarsa.com.mx/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://cijarsa.com.mx/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="https://cijarsa.com.mx/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

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
            <li class="nav-item" id="inicio-nav-link">
                <a class="nav-link" href="<?php echo esc_url(home_url()); ?>">Cijarsa</a>
            </li>
            <li class="nav-item dropdown" id="desarrollos-nav-link">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Desarrollos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/san-valentin">San Valentín</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/buen-suceso">El Buen Suceso</a>
                    <!-- <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/buena-ventura">Buena Ventura</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/porvenir-1">El Porvenir I</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/porvenir-2">El Porvenir II</a>
                    <a class="dropdown-item" href="<?php echo esc_url(get_template_directory_uri()); ?>/hesperides">Las Hespérides</a> -->
                </div>
            </li>
            <li class="nav-item" id="locales-nav-link">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/locales-en-venta">Locales</a>
            </li>
            <li class="nav-item" id="servicios-nav-link">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/servicios">Servicios</a>
            </li>
            <li class="nav-item" id="atencion-nav-link">
                <a class="nav-link" href="<?php echo esc_url(get_template_directory_uri()); ?>/atencion-de-garantias">Atención de Garantías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(home_url()); ?>#contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>


<script type="text/javascript">
    var link = document.location.pathname;

    if(link.includes("/locales")){
        var seccion = "locales";
    } else if (link.includes("/san-valentin") || link.includes("/buen-suceso") || link.includes("/hesperides") || link.includes("/buena-ventura") || link.includes("/porvenir")) {
        var seccion = "desarrollos";
    } else if (link.includes("servicios")) {
        var seccion = "servicios";
    } else if (link.includes("atencion")) {
        var seccion = "atencion";
    } else {
        var seccion = "inicio";
    }

    switch(seccion) {
        case "inicio":
            document.getElementById("inicio-nav-link").classList.add("active");
            break;
        case "desarrollos":
            document.getElementById("desarrollos-nav-link").classList.add("active");
            break;
        case "locales":
            document.getElementById("locales-nav-link").classList.add("active");
            break;
        case "servicios":
            document.getElementById("servicios-nav-link").classList.add("active");
            break;
        case "atencion":
            document.getElementById("atencion-nav-link").classList.add("active");
            break;
        default:
            document.getElementById("inicio-nav-link").classList.add("active");
            break;
    }
</script>