<?php

  include('estructura/header.php');

  $id = $_GET['id'];
  $handbag = single("handbags",$id);
?>


<section id="product-details">
<div class="container">
  <div class="row">
    <center>
      <article class="col-12 col-sm-8 col-md-6">
        <div class="image-gallery">
          <aside class="thumbnails">
            <a href="#" class="selected thumbnail" data-big="<?php echo $handbag['image_1'] ?>">
              <div class="thumbnail-image" style="background-image: url(<?php echo $handbag['image_1'] ?>)"></div>
            </a>
            <a href="#" class="thumbnail" data-big="<?php echo $handbag['image_2'] ?>">
              <div class="thumbnail-image" style="background-image: url(<?php echo $handbag['image_2'] ?>)"></div>
            </a>
            <a href="#" class="thumbnail" data-big="<?php echo $handbag['image_3'] ?>">
              <div class="thumbnail-image" style="background-image: url(<?php echo $handbag['image_3'] ?>)"></div>
            </a>
          </aside>
          <main class="primary" style="background-image: url('<?php echo $handbag['image_1'] ?>');"></main>
        </div>
      </article>
    </center>

    <article class="col-12 col-sm-4 col-md-offset-1 col-md-5">
      <h3 class="pdetails-title"><?php echo $handbag['product_name'] ?></h3>
      <p class="pdetails-precio"> <?php echo $handbag['price'] ?> </p>
      <br>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="eljoshua@live.com">
      <input type="hidden" name="item_name" value="Donation">
      <input type="hidden" name="item_number" value="1">
      <input type="hidden" name="amount" value="9.00">
      <input type="hidden" name="no_shipping" value="0">
      <input type="hidden" name="no_note" value="1">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="lc" value="AU">
      <input type="hidden" name="bn" value="PP-BuyNowBF">
      <input type="image" src="https://www.paypal.com/en_AU/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
      <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
      </form>

      <br>
      <br>
      <p class="free-shipping"> Free shipping & returns </p>
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
    <p class="pdetails-title centrar-texto">  <?php echo $handbag['descripcion'] ?></p>
    </center>
    </div>
  </article>

  <article class="col-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-5">
  <div>
      <h3 class="details-titles">SIZE</h3>
      <p class="details-description"> <?php echo $handbag['dimensions'] ?></p>
      <h3 class="details-titles">MATERIALS</h3>
      <p class="details-description"> <?php echo $handbag['materials'] ?> </p>
      <h3 class="details-titles"> DETAILS</h3>
      <p class="details-description"> <?php echo $handbag['details'] ?> </p>
   </div>
  </article>

</div>
</div>
</section>


<?php

  include('estructura/footer.php');

?>