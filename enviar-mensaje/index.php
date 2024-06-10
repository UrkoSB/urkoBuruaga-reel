<?php
include_once('../../ignore/keys.php');

/*
include_once('recaptcha-checker.php');

$score = create_assessment(
    PUBLIC_KEY,
    $_POST['g-recaptcha-response'], //'YOUR_USER_RESPONSE_TOKEN',
    'urkoburuaga',
    'submit'
);

 echo "Es score es: ".$score;
 */
/**** reCaptcha v3 ****/
$url_siteverify = 'https://www.google.com/recaptcha/api/siteverify';
$token = $_POST['g-recaptcha-response'];
$secretKey = SECRET_KEY;
$respuesta = file_get_contents( "$url_siteverify?secret=$secretKey&response=$token" );
$json_respuesta = json_decode($respuesta, true);
$success = $json_respuesta['success'];
$score = $json_respuesta['score'];

/* ENVIAR EMAILS*/
$sent = '';
if($success && $score >= 0.7){
    include('enviar-emails.php');
    if( isEverythingFilled() && enviarEmailUrkoBuruaga() && enviarEmailRemitente() ) {
        $sent = 'true';
    }else {
        $sent = 'false';
    }
} else {
    $sent = 'false';
}

header("Location: ../?messagesent=$sent");
die();

?>