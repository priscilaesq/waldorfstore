<?php

  include('estructura/header.php');

?>

<section id="carrusel">
<div class="container-fluid">

  <div id="myCarousel" class="carousel slide espacio-nav" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="handbags.php"><img src="imgs/home-banner-handbags.jpg" alt="Banner 1" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="wallets.php"><img src="imgs/home-banner-wallets.jpg" alt="Banenr 2" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="travel.php"><img src="imgs/home-banner-travel.jpg" alt="Banner 3" style="width:100%;"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>


<section id="trending">
<div class="container">
  <h1 class="Primary-title spacer">Trending now</h1>
  <div class="row">
      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-watson-lane.png">
      <h3 class="product-title"> Watson lane hartley </h3>
      <p class="price-home"> $198.00 </p>
      </article>

      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-dorie-medium.png">
      <h3 class="product-title"> Dorie medium bag </h3>
      <p class="price-home"> $398.00 </p>
      </article>

      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-jayne-large.png">
      <h3 class="product-title"> Jayne large backpack </h3>
      <p class="price-home"> $278.00 </p>
      </article>
  

  
      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-nicola-twistlock.png">
      <h3 class="product-title"> Nicola twistlock shoulder </h3>
      <p class="price-home"> $348.00 </p>
      </article>

      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-amelia-spade.png">
      <h3 class="product-title"> Amelia spade flower convertible </h3>
      <p class="price-home"> $398.00 </p>
      </article>

      <article class="col-12 col-sm-6 col-md-4">
      <img class="img-home" src="imgs/home-slim-bifold.png">
      <h3 class="product-title"> Sylvia wildflower mini wallet </h3>
      <p class="price-home"> $98.00 </p>
      </article>
  </div>
</div>
</section>


<section id="best-sellers">
  <div class="container">
    <div class="row">
    <h1 class="Primary-title spacer">Best sellers</h1>
    <article class="col-12 col-sm-6 col-md-4 col-lg-4 contenedor">
      <img src="imgs/home-bs-left.png">
      <button class="primary-button"> Shop now </button>
    </article>
    <article class="col-12 col-sm-6 col-md-8 col-lg-8 contenedor2">
      <img src="imgs/home-bs-right.png">
      <button class="primary-button"> Shop now </button>
    </article>
    </div>
  </div>
</section>

<?php

  include('estructura/footer.php');

?>








