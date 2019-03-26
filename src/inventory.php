<?php
  include('funciones.php');
  include('estructura/header-admin.php');
  $url_pagina = $_SERVER[REQUEST_URI];
  $url_pagina = str_replace('/', '', $url_pagina);
  $url_pagina = str_replace('.php', '', $url_pagina);
?>

<main class="admin-options">
  <div class="container">
  <h1 class="admin-title"> Inventory </h1>

  <section class="subir-foto">
  <h2>Handbags</h2>

  <div class="inventory-title">
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>Product Name</p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>Price</p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>Delete product</p>
        </article>
      </div>
    </div>
  </div>

  <div class="users-info">
  <?php
    $handbags = get('handbags');
    if( $handbags ) :
    foreach( $handbags as $handbag ):
      //print_x($handbag);
  ?>
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p><?php echo $handbag['product_name'] ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>$<?php echo number_format(@$handbag['price']) ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <a href="eliminar.php?url=<?php echo $url_pagina ?>&tipo=handbags&id=<?php echo $handbag['id'] ?>">
          <img class="icon" src="imgs/trash.svg">
          </a>
        </article>
      </div>
    </div>
  <?php
    endforeach;
    else :
  ?>
    <div class="sin-resultados">
      No hay handbags!
    </div>
    <?php endif; ?>
</div>

<section class="subir-foto">
<h2>Wallets</h2>

<div class="inventory-title">
  <div class="row">
    <div>
      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Product Name</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Price</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Delete product</p>
      </article>
    </div>
  </div>
</div>

<div class="users-info">
<?php
        for( $i=1; $i<4; $i++ ):
?>
  <div class="row">
    <div>
      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Nombre del producto</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>$198.00</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <a href="">
        <img class="icon" src="imgs/trash.svg">
        </a>
      </article>
    </div>
  </div>
<?php
  endfor;
?>
</div>

<section class="subir-foto">
<h2>Travel</h2>

<div class="inventory-title">
  <div class="row">
    <div>
      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Product Name</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Price</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Delete product</p>
      </article>
    </div>
  </div>
</div>

<div class="users-info">
<?php
        for( $i=1; $i<4; $i++ ):
?>
  <div class="row">
    <div>
      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>Nombre del producto</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <p>$198.00</p>
      </article>

      <article class="col-12 col-xs-4 col-md-4">
        <!-- image -->
        <a href="">
        <img class="icon" src="imgs/trash.svg">
        </a>
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