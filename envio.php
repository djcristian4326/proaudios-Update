<?php 
error_reporting(0); 
$Nombre = $_POST['Nombre']; 
$Email= $_POST['Email'];  
$Asunto=$_POST['Asunto']; 
$header = 'From: ' . $mail ;
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $Nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $Email . " \r\n"; 
$mensaje .="Asunto".$_POST['mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'cris_19952010@live.com; 
$asunto = 'Mensaje de la paguian web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 