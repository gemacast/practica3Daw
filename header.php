<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>style.css">
    <title>Plantilla wrodpress</title>
    <style>
        .suscribir{
            background: url("<?php bloginfo('template_url');?>/images/fondo.png") no-repeat center bottom;
            background-size: cover;
            height: 600px;
        }
        .logo{
            max-height: 130px;
            width: auto;
        }
        .menulateral{
            background: blue;
        }
        .navbar-nav {
            list-style: none;
            padding-left: 0;
        }

    </style>

  </head>
  <body>
    
    <!-- navbar-->
     <div class="container-fluid bg-secondary text-white fixed-top">
        <nav class="navbar navbar-expand-md bg-secondary container" data-bs-theme="dark">
            <!--logo a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="<?php bloginfo('template_url');?>/images/logo2-removebg-preview.png" alt="Logo Crecimiento Personal"  class="d-inline-block align-top logo">
            </a>
            
    <!--boton hamburguesa para pantallas pequeñas -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php 
            //wp_nav_menu()  para que el menú sea editable desde el panel de administración de WordPress
                wp_nav_menu(
                    array(
                        'theme_location' => 'principal', //indica la ubicación del menú registrada en functions.php 
                        'container' => 'div', //define el tipo de contenedor que envuelve al <ul> del menú.
                        'container_class' => 'collapse navbar-collapse', // asigna clases CSS al contenedor del menú.
                        'container_id' => 'navbarSupportedContent', // da un ID al contenedor, necesario para que el botón hamburguesa sepa qué menú 
                        'items_wrap'=>'<ul class="navbar-nav ms-auto">%3$s</ul>', //define cómo se construye el <ul> 
                        'menu_class' => '' //lo dejamos vacío, los filtros se encargan
                    )
                );  
            ?>
        </nav>
    </div>    

    <!-- formulario de Contacto-->  
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center mt-3 ">
        <h1 class="display-4 text-center pb-1">¡Transforma tu vida paso a paso!</h1>
        <p class="display-6 text-center pt-1">Descubre el poder de los pequeños cambios y vive con motivación constante.</p>
    
        <form action="" class="d-flex flex-wrap gap-2 flex-column justify-content-center align-items-center flex-sm-row">
            <div class="form-group me-sm-3">
                <input type="text" placeholder="nombre" class="form-control">
            </div>
            <div class="form-group me-sm-3">
                <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>