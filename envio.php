<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$correo_electronico= $_POST['email']; 
$poblacion = $_POST['poblacion']; 
$sexo=$_POST['GrupoOpciones1']; 
$aficiones=$_POST['comentarios']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; 
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n"; 
$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n"; 
$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n"; 
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'cris_19952010@live.com; 
$asunto = 'Mensaje de la paguian web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 

?> 