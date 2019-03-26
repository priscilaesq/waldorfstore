<?php
  include('estructura/header-admin.php');
  include('funciones.php');

?>

<main class="admin-options">
  <div class="container">
  <h1 class="admin-title"> Manage users </h1>

  <section class="subir-foto">
  <h2>Users</h2>

  <div class="users-title">
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <p>Name</p>
        </article>

        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <p>Email</p>
        </article>

        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <p>Delete user</p>
        </article>
      </div>
    </div>
  </div>

  <div class="users-info">
  <?php
    $usuarios = get('usuarios');
    foreach($usuarios as $row) : 
  ?>
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <p><?php echo $row['nombre'] . ' ' . $row['apellido']; ?> </p>
        </article>

        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <p><?php echo $row['correo']; ?></p>
        </article>

        <article class="col-12 col-xs-4 col-sm-4 col-md-4">
          <!-- image -->
          <a href="eliminar.php?url=manage-users&tipo=usuarios&id=<?php echo $row['id']; ?>"><img class="icon" src="imgs/trash.svg"></a>
        </article>
      </div>
    </div>
  <?php
    endforeach;
  ?>

  </div>



<h2>Manage Passwords</h2>

<div class= "users-title">
  <div class="row">
    <div>
      <article class="col-12 col-xs-4 col-sm-4 col-md-4">
        <!-- image -->
        <p>Name</p>
      </article>

      <article class="col-12 col-xs-4 col-sm-4 col-md-4">
        <!-- image -->
        <p>Email</p>
      </article>
    </div>
  </div>
</div>

<div class ="users-info">
  <?php
          for( $i=1; $i<8; $i++ ):
  ?>
  <div class="row">

    <div>
      <article class="col-12 col-xs-4 col-sm-4 col-md-4">
        <!-- image -->
        <p>Laura</p>
      </article>

      <article class="col-12 col-xs-4 col-sm-4 col-md-4">
        <!-- image -->
        <p>laura@gmail.com</p>
      </article>

      <article class="col-12 col-xs-4 col-sm-4 col-md-4">
        <!-- image -->
        <a href="" class="rose-link underline-pink"> Change password </a>
      </article>
    </div>
  </div>
  <?php
          endfor;
  ?>
</div>

</div>
</main>

<?php
include('estructura/footer-admin.php');
?>