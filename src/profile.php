<?php
  include('estructura/header.php');

  if($_POST != NULL) {
    if(update('usuarios', $_SESSION['id'], $_POST)) {
      //echo "Se actualizo";
      $_SESSION = single('usuarios', $_SESSION['id']);
    }
    else {
      //echo "Algo fallo";
    }
  }

?>

<div class="container">
    <h1 class="profile-title">Hello, <?php echo $_SESSION['nombre']; ?> </h1><a href="logout.php" class="rose-link"> Cerrar sesion</a>

    <!-- nombre lleva variable jiji -->
  <form action="profile.php" method="post" enctype="multipart/form-data">

    <div class="row">
        <!-- left column -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="text-center">
            <img class ="thumbnail-profile" src="imgs/profile-photo-thumbnail.png" class="avatar" alt="avatar">
            <label class="rose-link hide-input">
              Change picture
              <input type="file" name="archivo">
            </label>
            <a class="rose-link underline-pink" href="eliminar.php?nombre=<?php echo $archivo; ?>">
              Delete picture
            </a>
          </div>
        </div>

        <!-- Informacion personal -->
        <div class="col-sm-6 col-md-offset-1 col-md-8 personal-info">
            <div class="row">

              <div class="col-12 col-md-6">
                <div class="input-group">
                <label>Name</label>
                <input class="form-control" type="text" name="nombre" placeholder="Name" value="<?php echo $_SESSION['nombre']; ?>">
              </div>
              </div>

              <div class="col-12 col-md-6">
              <div class="input-group">
                <label>Last Name</label>
                <input class="form-control" type="text" name="apellido" placeholder="Last Name" value="<?php echo $_SESSION['apellido']; ?>">
              </div>
              </div>

              <div class="col-xs-12">
              <div class="input-group">
                <label>Address</label>
                <input class="form-control" type="text" name="direccion" placeholder="Address" value="<?php echo $_SESSION['direccion']; ?>">
              </div>
              </div>

              <div class="col-12 col-md-6">
              <div class="input-group">
                <label>Zip Code</label>
                <input class="form-control" type="text" name="codigo_postal" placeholder="Zip Code" value="<?php echo $_SESSION['codigo_postal']; ?>">
              </div>
              </div>

              <div class="col-12 col-md-6">
              <div class="input-group">
                <label>City</label>
                <input class="form-control" type="text" name="ciudad" placeholder="City" value="<?php echo $_SESSION['ciudad']; ?>">
              </div>
              </div>

              <div class="col-12 col-md-6">
              <div class="input-group">
                <label>Occupation </label>
                <input class="form-control" type="text" name="ocupacion" placeholder="Occupation" value="<?php echo $_SESSION['ocupacion']; ?>">
              </div>
              </div>

              <div class="col-12 col-md-6">
              <div class="input-group">
                <label>Hobbies </label>
                <input class="form-control" type="text" name="hobbies" placeholder="Hobbies" value="<?php echo $_SESSION['hobbies']; ?>">
              </div>
              </div>

            <div class="col-xs-12">
            <div class="input-group button-wrapper">
                <button class="primary-button"> Save Changes </button>
            </div>
            </div>
        </div>
    </div>
  </form>
</div>
</div>


<?php
include('estructura/footer.php');
?>