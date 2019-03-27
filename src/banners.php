<?php
  include('estructura/header-admin.php');
  include('funciones.php');


  if($_POST['checar'] != '') {
    $id_banner = registrar_banner();
    if( $id_banner ) {
      if(update_imagen('banners',$id_banner,'img')) {
        $message = "Congrats! The photo has been uploaded";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else {
        $message = "Oh no! Unable to upload the photo";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    else {
      $message = "Oh no! The photo couldn't be registered";
          echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
?>

<main class="admin-options">
  <div class="container">
  <h1 class="admin-title"> Banners</h1>
<div>

 <section class="subir-foto">
      <h2>Banner management</h2>
      <form action="banners.php" method="post" enctype="multipart/form-data">
          <label class="hide-input rose-link upload-new-pic hidden-file-input">
            Upload new picture
          <input type="file" name="img">
          <input name="checar" value="si" type="hidden">
          </label>
          <button class="primary-button"> Upload </button>
          <br>
      </form>
  </section>


  <section class= "current-photos">
      <div class="row">
  <?php
    $banners = get("banners");
    foreach($banners as $banner):
  ?>
        <div class="col-12 col-md-6">
          <article class="uploaded">
            <img class="thumbnail-tiny" src="<?php echo $banner['img'] ?>">
            <p><?php echo $banner["img"] ?></p>
            <a class="dark-link" href="eliminar.php?url=banners&tipo=banners&id=<?php echo $banner['id']; ?>">Eliminar</a>

          </article>
        </div>
        <?php
          endforeach;
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