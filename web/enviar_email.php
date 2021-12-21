<?php 
//Datos del formulario
$nom=$_POST["nombre"];
$mail=$_POST["email"];
$post=$_POST["asunto"];
$mensaje=$_POST["mensaje"];
$acepto=$_POST[""];

$mensaje="Datos desde Formulario";
$mensaje.="Nombre: $nom <br>";
$mensaje.="Email: $mail <br>";
$mensaje.="Asunto: $post <br>";
$mensaje.="Mensaje: $mensaje <br>";
$mensaje.="Acepto condiciones: $acepto <br>";

$para      = 'nereah@areafor.es';
$titulo    = 'Info';
$cabeceras = 'From: nereah@areafor.es <br>';
mail($para, $titulo, $mensaje, $cabeceras);
header("Location:".$_SERVER['HTTP_REFERER']);
?>
