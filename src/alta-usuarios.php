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
  if($resultcheck > 0){?>
    <div id="overlay"></div>
    <div id="dialogo" class="col-sm-8 col-md-4">
            <div>
                <h2 class="Primary-title"> OOPSIS! </h2><br>
                <p> This email is being used</p>
            </div>
            <a href="#" id="cerrar"><img src="imgs/icono-cerrar.png"> </a>
    </div>
    <?php
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
?>