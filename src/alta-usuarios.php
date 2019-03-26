<?php

  include 'db.php';

  ///asignando los campos del formulario a una variable
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $contrasena = MD5($contrasena);

  // verificar que no estén vacios
  if ($nombre == '' || $apellido == ''|| $contrasena == '' || $correo == '') {
    echo 'No se han recibido los datos correctamente.';
  } else {

  ///seleccionar los renglones de la tabla
  $query = "SELECT * FROM usuarios WHERE correo = '$correo'" ;

  $result = $db->query($query);
  $resultcheck = mysqli_num_rows($result);

  ///Checar que el correo exista o no
  if($resultcheck > 0){
    echo 'Usario o correo ya existen';
    exit();
  }else{
   $query = "INSERT INTO usuarios (nombre, apellido, correo, contrasena)
             VALUES ('$nombre','$apellido','$correo','$contrasena')";
   $db->query($query);
   echo 'EXITO! USUARIO REGISTRADO';
   exit();
  }
}
