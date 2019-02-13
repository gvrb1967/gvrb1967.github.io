<?php

$para = 'grupoperuapp@gmail.com';
$asunto = "Mi nueva página Web";
$mailheader = "From: ".$_POS["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POS["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POS["email"]."\n";  
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br_($_POS["mesage"])."\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error al enviar el email!");

header('Location: https://www.consultahoy.com')

?>

