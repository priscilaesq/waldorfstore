<?php
  include('estructura/header.php');
?>

<section id="signin">
<div class="container">
<div class="row">
<section id="signin-center">
  <article class="col-md-offset-3 col-md-6">
    <div class="sign-container">
        <center><h3 class="Tertiary-title"> Admin log in </h3></center>
        <form action="iniciar-sesion-admin.php" method="post">
            <p class="input-title"> Email address </p>
            <input name="correo" class="form-signin" type="email" placeholder="Email address"><br>
            <p class="input-title"> Password </p>
            <input name="contrasena" class="form-signin" type="password" placeholder="Password"><br>
            <button class="signin-button"> Sign in </button>
        </form>
        <br>
        <a class="white-link" href="login.php">Not an admin?</a>
    </div>
  </article>
</section>
</section>
<?php
  include('estructura/footer.php');
?>  