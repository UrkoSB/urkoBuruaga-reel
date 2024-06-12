<?php 
include_once('../../ignore/conf.php');

$texto;
if ( isset( $_GET['texto']) && ($_GET['texto'] == 'aviso-legal' || $_GET['texto'] == 'politica-privacidad' || $_GET['texto'] == 'politica-cookies'))  {
    $texto = $_GET['texto'];
} else{
    header("Location: ../");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <meta name="robots" content="noindex" />
    <title>Urko Buruaga | Live looping & acoustic | Textos legales</title>
</head>
<body>

    <div id="container" class="texto-legal">
        <?php include_once('../parts/header.php') ?>
        
        <main>
            <section>
                <?php
                    include("$texto.php")
                ?>
            </section>
        </main>
        <?php include_once("../parts/footer.php") ?>
    </div>
    <?php include_once('../parts/nav.php') ?>
</body>
</html>