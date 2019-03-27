<?php
  include 'db.php';
if($_POST != NULL):

  ///asignando los campos del formulario a una variable
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $contrasena = MD5($contrasena);

  // verificar que no estén vacios
  if ($nombre == '' || $apellido == ''|| $contrasena == '' || $correo == '') {
    $message = "No se han capturado los datos correctamente";
    echo "<script type='text/javascript'>alert('$message');</script>";
  } else {

  ///seleccionar los renglones de la tabla
  $query = "SELECT * FROM usuarios WHERE correo = '$correo'" ;

  $result = $db->query($query);
  $resultcheck = mysqli_num_rows($result);

  ///Checar que el correo exista o no
  if($resultcheck > 0){
    $message = "Username or email already exists";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }else{
   $query = "INSERT INTO usuarios (nombre, apellido, correo, contrasena)
             VALUES ('$nombre','$apellido','$correo','$contrasena')";
   $db->query($query);
   $message = "CONGRATS! Account registration successful";
   echo "<script type='text/javascript'>alert('$message');</script>";
  }
}
endif;

?>