<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Plantilla MVC</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_DOMAIN_DIR_URL?>">
        <link rel="stylesheet" type="text/css" href="webroot/css/text.css"> 
        <link rel="stylesheet" type="text/css" href="webroot/css/home.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="webroot/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/home.js"></script>
    </head>
    <body>
        <header> 

        <a href="<?php echo BASE_DIR_URL?>home/index"><h1>HH drops</h1></a>
        <nav class="closed" id="navMenu" onblur="openclose()">
            <a class="icon" onclick="openclose()">nav <i class="fa fa-bars"></i></a>
            <a href="<?php echo BASE_DIR_URL?>contacto/index">Who</a>
            <a href="#how">How</a>
            <a href="#galeria">Owh</a>
        </nav>

        </header>
        <main> 

            <?php echo $content_for_layout;?> 

        </main>
        <footer>

            <p>     Nolasc Riba  <?php echo date("Y");?> © MVC</p>
            
        </footer>
    </body>
</html>