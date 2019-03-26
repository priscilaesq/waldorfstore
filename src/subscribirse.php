<?php
include('funciones.php');
$url = $_GET['url'];

if( registrar_subscriptor( $_POST['email']) ) {
  $mensaje = 'exito';
}
else {
  $mensaje = 'fracaso';
}

$url = '/' . $url . '.php?mensaje_subscripcion=' . $mensaje;

header("Location: " . $url);

?>