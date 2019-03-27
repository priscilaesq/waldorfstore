<?php
  include('funciones.php');
  include('estructura/header-admin.php');
  $url_pagina = $_SERVER['REQUEST_URI'];
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
      No handbags!
    </div>
    <?php endif; ?>
</div>
</section>

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
    $wallets = get('wallets');
    if( $wallets ) :
    foreach( $wallets as $wallet ):
      //print_x($handbag);
  ?>
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p><?php echo $wallet['product_name'] ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>$<?php echo number_format(@$wallet['price']) ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <a href="eliminar.php?url=<?php echo $url_pagina ?>&tipo=wallets&id=<?php echo $wallet['id'] ?>">
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
      No wallets!
    </div>
    <?php endif; ?>
</div>
</section>

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
    $travel = get('travel');
    if( $travel ) :
    foreach( $travel as $travel ):
      //print_x($handbag);
  ?>
    <div class="row">
      <div>
        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p><?php echo $travel['product_name'] ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <p>$<?php echo number_format(@$travel['price']) ?></p>
        </article>

        <article class="col-12 col-xs-4 col-md-4">
          <!-- image -->
          <a href="eliminar.php?url=<?php echo $url_pagina ?>&tipo=travel&id=<?php echo $travel['id'] ?>">
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
      No travel bags!
    </div>
    <?php endif; ?>
</div>
</section>

  </div>
</main>

<?php
include('estructura/footer-admin.php');
?>