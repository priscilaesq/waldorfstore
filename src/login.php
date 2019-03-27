<?php
  include('estructura/header.php');
?>

<div class="container-fluid">
</div>

<section id="signin">
<div class="container">
<div class="row">
<section id="signin-center">
  <article class="col-12 col-md-6">
    <div class="sign-container">
        <center><h3 class="Tertiary-title"> Sign in </h3></center>
        <form action="iniciar-sesion.php" method="post">
            <p class="input-title"> Email address </p>
            <input name="correo" class="form-signin" type="email" placeholder="Email address"><br>
            <p class="input-title"> Password </p>
            <input name="contrasena" class="form-signin" type="password" placeholder="Password"><br>
            <button class="signin-button" type="submit"> Sign in </button>
        </form>
        <br>
        <a class="white-link" href="login-admin.php"> Are you an admin? </a>
    </div>
  </article>
</section>

  <article class="col-12 col-md-6">
  <div class="create-container">
        <center><h3 class="Tertiary-title"> Create account </h3></center>
        <form action="alta-usuarios.php" class="create-center" method="post">
            <p class="input-title"> Name </p>
            <input name="nombre" class="form-signin" type="text" placeholder="Name"><br>
            <p class="input-title"> Last name </p>
            <input name="apellido" class="form-signin" type="text" placeholder="Last name"><br>
            <p class="input-title"> Email </p>
            <input name="correo" class="form-signin" type="email" placeholder="Email"><br>
            <p class="input-title"> Password </p>
            <input name="contrasena" class="form-signin" type="password" placeholder="Password"><br>
            <button class="signin-button" type="submit" onclick="profile.php?edit=<?php echo $row['id']; ?>">Create account</button>
        </form>
   </div>
  </article>

</div>
</div>
</section>




<?php

  include('estructura/footer.php');

?>