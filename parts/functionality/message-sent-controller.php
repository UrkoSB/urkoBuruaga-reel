<?php
if ( isset( $_GET['messagesent'] ) ) {
    $cookie_name = 'messagesent_cookie';
    $value = htmlspecialchars($_GET['messagesent'], ENT_QUOTES, 'UTF-8');
    
    // Establece la cookie
    setcookie($cookie_name, $value, time() + 15, "/");

    // Redirige a la página deseada
    header("Location: ../#article-harremana");
    exit();
} else{
	setcookie("messagesent_cookie", "", time() - 3600, "/");
}
?>