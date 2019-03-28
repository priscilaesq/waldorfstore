<?php
  include('estructura/header-admin.php');
?>




<section id="signin">
<div class="container">
<div class="row">

<h1 class="add-title"> Add new handbag</h1>

<section class="subir-foto">
    <h2 class="Tertiary-title">Product details</h2>
</section>
<form action="handbag-database.php" method="post" enctype="multipart/form-data">
  <section id="signin-center">
    <article class="col-12 col-md-6">
      <div>
              <p class="input-title product-input-title"> Product name </p>
              <input name="product_name" class="form-signin" type="text" placeholder="Product name"><br>
              <p class="input-title product-input-title"> Price </p>
              <input name="price" class="form-signin" type="number" placeholder="Price"><br>
              <p class="input-title product-input-title"> Product description </p>
              <input name="descripcion" class="form-signin" type="text" placeholder="Product description"><br>
      </div>
    </article>
  </section>

    <article class="col-12 col-md-6" class="create-center">
    <div>
              <p class="input-title product-input-title"> Dimensions </p>
              <input name="dimensions" class="form-signin" type="text" placeholder="Dimensions"><br>
              <p class="input-title product-input-title"> Materials </p>
              <input name="materials" class="form-signin" type="text" placeholder="Materials"><br>
              <p class="input-title product-input-title"> Details </p>
              <input name="details" class="form-signin" type="text" placeholder="Details"><br>

    </div>
    </article>
    </div>
  </div>
  </section>

    <div class="espacio-arribita">
    <h1 class="add-title">Image upload</h1>
    </div>

  <div class="container">
    <article class="col-12 col-sm-12 col-md-4">
      <label class="normal-text">
        <input type="file" name="image_1">
      </label>
      <br>
      <br>
    </article>
    <article class="col-12 col-sm-12 col-md-4">
      <label class="normal-text">
        <input type="file" name="image_2">
      </label>
      <br>
      <br>
    </article>
      <article class="col-12 col-sm-12 col-md-4">
      <label class="normal-text">
        <input type="file" name="image_3">
      </label>
      <br>
      <br>
    </article>
  </div>

  <center><button class="primary-button" type="submit">Create product</button></center>

  </form>







<?php

  include('estructura/footer-admin.php');

?>