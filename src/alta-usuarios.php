<script src="js/bootstrap.min.js"></script>
<script src="js/funciones.js"></script>

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
  if ($nombre == '' || $apellido == ''|| $contrasena == '' || $correo == '') {?>
    <div class="alert alert-warning alert-dismissible show" role="alert">
      <strong>OOPSIS!</strong> Your data was not captured correctly.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php
  } else {

  ///seleccionar los renglones de la tabla
  $query = "SELECT * FROM usuarios WHERE correo = '$correo'" ;

  $result = $db->query($query);
  $resultcheck = mysqli_num_rows($result);

  ///Checar que el correo exista o no
  if($resultcheck > 0){?>
    <div class="alert alert-warning alert-dismissible show" role="alert">
      <strong>OOPSIS!</strong> This email is already in use.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php
  }else{
   $query = "INSERT INTO usuarios (nombre, apellido, correo, contrasena)
             VALUES ('$nombre','$apellido','$correo','$contrasena')";
   $db->query($query);?>
   <div class="alert alert-warning alert-dismissible show" role="alert">
      <strong>CONGRATS!</strong> Your account is ready to be used, sign in!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

   <?php
  }
}
endif;

?>