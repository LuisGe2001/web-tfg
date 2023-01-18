<html lang="es">
    <head>
        <meta charset="utf-8">
        <!-- Hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="./css/menu.css">
        <link rel="stylesheet" type="text/css" href="./css/body.css"> 
        <!-- Título de la página -->
        <title>inicio</title>
        <?php 
            require_once('./variables-php/variables-herramienta.php');
        ?> 
    </head>
    <body>
        <!-- menu de navegación del sitio -->
        <?php
            include("./partials/menu/menu.html");
        ?>
        <!-- Mensaje de Bienvenida -->
        <div class="welcome-message">
            <h1><?php echo $bienvenida_al_sitio; ?></h1>
        </div>
          

    </body>
</html>