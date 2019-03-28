<?php

  include('estructura/header.php');

?>

<section id="carrusel">
<div class="container-fluid">

  <div id="myCarousel" class="carousel slide espacio-nav" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php
        $banners = get("banners");
        $i = 0;
        while($i < sizeof($banners)) :
      ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php if($i == 0) echo 'active' ?>"></li>
      <?php
        $i++;
        endwhile;
      ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php
        $b = true;
        foreach($banners as $banner):
      ?>
      <div class="item <?php if($b) echo 'active'; ?>">
        <a href="handbags.php"><img src="<?php echo $banner["img"] ?>" alt="Banner 1" style="width:100%;"></a>
      </div>
        <?php
          $b = false;
          endforeach;
        ?>
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

<section id="phone-img">
     		<div class="container-fluid pad-picture">
     		<div class="row">
      		<article class="col-sm-12 padding-bye">
      			<img id="picture-phone" src="imgs/mobile-pic.jpg">
		    </article>
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
    <h1 class="Primary-title spacer">Best-seller categories</h1>
    <article class="col-12 col-sm-6 col-md-4 col-lg-4 contenedor">
      <img src="imgs/home-bs-left.png">
      <form action="travel.php">
      <button class="primary-button"> Shop now </button>
      </form>
    </article>
    <article class="col-12 col-sm-6 col-md-8 col-lg-8 contenedor2">
      <img src="imgs/home-bs-right.png">
      <form action="handbags.php">
      <button class="primary-button"> Shop now </button>
      </form>
    </article>
    </div>
  </div>
</section>

<?php

  include('estructura/footer.php');

?>








