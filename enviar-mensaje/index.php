<?php
$nombre = $_POST['izena'];
$email = $_POST['email'];
$asunto = $_POST['gaia'];
$mensaje = $_POST['mezua'];

$style_fondo = "style='background-color: #C7AF2B;font-family: Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif; padding: 1em 0;'";
$style_email = "style='max-width: 800px;padding: 0.5em 2em 1em;border-radius: 6px;margin: auto;background-color: #eeeeee;box-shadow: 2px 2px 5px rgba(128, 128, 128, 0.7);'";
$style_copia = "style='padding-left: 20px;border-left: 5pt solid black;'";
$style_ladillo = "style='color: #ff4767; font-weight: 700; background-color: #333; border-radius: 3px 3px 0 0; padding: 5px 10px; margin-top: 40px; letter-spacing: 0.2px;'";
/************* EMAIL REMITENTE *************/

    $asuntoRemitente = "[Jasota | Recibido] $asunto";

    $message = "<div $style_fondo>";
    $message .= "<div $style_email>";
        $message .= "<h1>Kaixo, $nombre!</h1>";
        $message .= "<p $style_ladillo>Euskaraz</p>";
        $message .= "<h2>Eskerrik asko nirekin harremanetan jartzeagatik!</h2>";
        $message .= "<p>Mezu hau automatikoki bidali dizut zure mezua zuzen bidali dela adierazteko.</p>";
        $message .= "<p>Arazorik egon ezean, orain nire sarrerako ontzian itxaroten egongo da. Beraz, zurekin harremanetan jarriko naiz lehenbailehen. Normalean, 24-48 orduko epean.</p>";
        $message .= "<p $style_ladillo>Castellano</p>";
        $message .= "<h2>¡Muchísimas gracias por ponerte en contacto conmigo!</h2>";
        $message .= "<p>Éste es un mensaje automático para avisarte de que tu mensaje se ha enviado correctamente.</p>";
        $message .= "<p>A menos que haya habido algún problema, ahora estará esperando en mi bandeja de entrada. Así que me pondré en contacto contigo lo antes posible. Normalmente, en un plazo de 24-48 horas.</p>";
        $message .= "<p $style_ladillo>Zure mezua | Tu mensaje</p>";
        $message .= "<p>Bakarrik jakinaraztearren, honako hau da bidali didazun mezua:</p>";
        $message .= "<p>Simplemente para que quede constancia, éste es el mensaje que me has envíado:</p>";
        $message .= "<div $style_copia>";
            $message .= "<p><strong>Izena | Nombre: </strong>$nombre</p>";
            $message .= "<p><strong>Email: </strong>$email</p>";
            $message .= "<p><strong>Gaia | Asunto: </strong>$asunto</p>";
            $message .= "<p><strong>Mezua | Mensaje:</strong><br>";
            $message .= "$mensaje</p>";
        $message .= "</div>"; // Constancia de email
        $message .= "<p>Laster arte! ¡Hasta pronto!</p>";
        $message .= "<p><strong>Urko Buruaga</strong></p>";
        $message .= "<p><a href='mailto:harremana@urkoburuaga.com'>harremana@urkoburuaga.com</a></p>";
    $message .= "</div>"; // Email container
    $message .= "</div>"; // Fondo container
    
    
    $headers = [
        'From' => 'Urko Buruaga <harremana@urkoburuaga.com>',
        'Cco' => 'Urko Buruaga <harremana@urkoburuaga.com>',
        'X-Sender' => 'Urko Buruaga <harremana@urkoburuaga.com>',
        'X-Mailer' => 'PHP/' . phpversion(),
        'X-Priority' => '1',
        'Return-Path' => 'harremana@urkoburuaga.com',
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/html; charset=utf-8'
    ];
    
    $emailRemitente = mail($email,$asuntoRemitente,$message,$headers); 

/************* EMAIL URKO BURUAGA *************/
    $message = "<div $style_fondo>";
    $message .= "<div $style_email>";
        $message .= "<h2>Mezua webgunetik</h2>";
         $message .= "<p>Mezu berria jasu duzu:</p>";
        $message .= "<div $style_copia>";
            $message .= "<p><strong>Izena | Nombre: </strong>$nombre</p>";
            $message .= "<p><strong>Email: </strong>$email</p>";
            $message .= "<p><strong>Gaia | Asunto: </strong>$asunto</p>";
            $message .= "<p><strong>Mezua | Mensaje:</strong><br>";
            $message .= "$mensaje</p>";
        $message .= "</div>"; // Constancia de email
    $message .= "</div>"; // Email container
    $message .= "</div>"; // Fondo container
    
    
    $headers = [
        'From' => "$nombre <harremana@urkoburuaga.com>",
        'Cco' => 'Urko Buruaga <harremana@urkoburuaga.com>',
        'X-Sender' => 'Urko Buruaga <harremana@urkoburuaga.com>',
        'X-Mailer' => 'PHP/' . phpversion(),
        'X-Priority' => '1',
        'Return-Path' => 'harremana@urkoburuaga.com',
        'Reply-To' => "$email",
        'MIME-Version' => '1.0',
        'Content-Type' => 'text/html; charset=utf-8'
    ];
    
    $emailUrkoBuruaga = mail('harremana@urkoburuaga.com',$asunto,$message,$headers); 

$TituloEnviado = '';
$parafoEnviado = '';
if( $emailRemitente && $emailUrkoBuruaga ) {
    $TituloEnviado ='¡Tu mensaje se ha enviado correctamente!';
    $parafoEnviado = 'Te he enviado una copia a tu bandeja de correo. Comprueba que te ha llegado y que los datos y el mensaje son los que querías enviar.';

}else {
    $TituloEnviado ='¡Upss! Ha habido un problema al enviar tu mensaje!';
    $parafoEnviado = '<a href="/../"><<Vuelve atrás y comprueba si te has dejado algo</a>.';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zemouz - Desarrollo web</title>
    <meta name="description" content="Desarrollo de aplicaciones web en WordPress y Angular">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- <header></header> -->
    <main>
        <h1><?=$TituloEnviado?></h1>
        <p><?=$parafoEnviado?></p>
        <p><a href="../">Vuelve a la página de inicio.</a></p>
    </main>
    <!-- <footer></footer> -->
</body>
</html>
