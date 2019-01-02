<?php 
error_reporting(0); 
$Nombre = $_POST['Nombre']; 
$Email= $_POST['Email'];  
$Asunto=$_POST['Asunto'];

$mensaje = "Este mensaje fue enviado por " . $Nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $Email . " \r\n"; 
$mensaje .="Asunto".$_POST['Asunto'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

mail("contacto@infinitysolition.cl", "Mesaje de paguina", utf8_decode($mensaje));
echo 'mensaje enviado correctamente'; 

?> 