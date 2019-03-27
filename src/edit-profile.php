<?php
  session_start();
  include 'db.php';

  // update/save records

  if (isset($_GET['save'])){
    $id_usuario = $_GET['save'];
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $direccion = ($_POST['direccion']);
    $codigo_postal = ($_POST['codigo_postal']);
    $ciudad = ($_POST['ciudad']);
    $ocupacion = ($_POST['ocupacion']);
    $hobbies = ($_POST['hobbies']);

   $query = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', direccion='$direccion', codigo_postal='$codigo_postal', ciudad='$ciudad', ocupacion='$ocupacion', hobbies='$hobbies' WHERE id_usuario = $id_usuario";
    header ('location: edit-profile.php');
  }
?>
 