<?php

  include('estructura/header.php');

?>


<section id="product-details">
<div class="container">
  <div class="row">
    <center>
      <article class="col-12 col-sm-8 col-md-6 espacio-gallery">
        <div class="image-gallery">
          <aside class="thumbnails">
            <a href="#" class="selected thumbnail" data-big="/imgs/p1-handbags-1-large.png">
              <div class="thumbnail-image" style="background-image: url(/imgs/p1-handbags-1-large.png)"></div>
            </a>
            <a href="#" class="thumbnail" data-big="/imgs/p1-handbags-2-large.png">
              <div class="thumbnail-image" style="background-image: url(/imgs/p1-handbags-2-large.png)"></div>
            </a>
            <a href="#" class="thumbnail" data-big="/imgs/p1-handbags-3-large.png">
              <div class="thumbnail-image" style="background-image: url(/imgs/p1-handbags-3-large.png)"></div>
            </a>
          </aside>
          <main class="primary" style="background-image: url('/imgs/p1-handbags-1-large.png');"></main>
        </div>
      </article>
    </center>

    <article class="col-12 col-sm-4 col-md-offset-1 col-md-5 espacio-titulo">
      <h3 class="pdetails-title"> Dorie medium bucket bag </h3>
      <p class="pdetails-precio"> $398.00 </p>
      <br>
      <p class="titulitos"> Color </p>
      <img class="product-color" src="imgs/p1-handbags-color.png">
      <br>
      <br>
      <p class="titulitos"> Quantity </p>
      <input class="cantidad" type="number" name="quantity" min="1" max="10" value="1">
      <br>
      <br>
      <button class="primary-button"> Buy now </button>
    </article>
</div>
</div>
</section>

<section>
<div class="container-fluid product-description-handbags">
<div class="row">
  <article class="col-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-5">
    <div>
    <center>
    <p class="pdetails-title centrar-texto"> "we made sure every inch would be functional when we designed our polly large convertible crossbody bag. for starters, it has a roomy interior."</p>
    </center>
    </div>
  </article>

  <article class="col-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-5">
  <div>
      <h3 class="details-titles">SIZE</h3>
      <p class="details-description"> 6"h x 9"w x 2"d </p>
      <h3 class="details-titles">MATERIALS</h3>
      <p class="details-description"> pebbled leather, spade floral jacquard lining </p>
      <h3 class="details-titles"> DETAILS</h3>
      <p class="details-description"> crossbody bag with zip flap closure </p>
   </div>
  </article>

</div>
</div>
</section>


<?php

  include('estructura/footer.php');

?>