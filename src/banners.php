<?php
  include('estructura/header-admin.php');
?>

<main class="admin-options">
  <div class="container">

  <h1 class="admin-title"> Banners</h1> 
<div>

<form method="post" action="banners-upload.php" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="img">
    </div>
      <input type="submit" name="upload" value="Upload Image">
</form>


 <section class="subir-foto">
      <h2>Banner management</h2>
      <form action="subir.php" method="post" enctype="multipart/form-data">
          <label class="hide-input rose-link upload-new-pic">
            Upload new picture
          <input type="file" name="archivo">
          </label>
          <br>
      </form>
  </section>

  <section class= "current-photos">
      <div class="row">
        <?php
          for( $i=1; $i<4; $i++ ):
        ?>
        <div class="col-12 col-md-6">
          <article class="uploaded">
            <img class="thumbnail-tiny" src="imgs/home-amelia-spade.png">
            <p>file name here.ext</p>
            <a class="primary-button" href="eliminar.php?nombre=<?php echo $archivo; ?>">Eliminar</a>
            <a href="/banners/<?php echo $archivo; ?>" target="_blank"> <?php echo $archivo; ?></a>

          </article>
        </div>
        <?php
          endfor;
        ?>
      </div>
  </section>

  <section class="margen-footer-b">
    <br>
</section>

</div>
</main>



<?php
include('estructura/footer-admin.php');
?>