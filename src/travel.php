<?php

  include('estructura/header.php');

?>

<section id="hero-handbag">
<div class="container">
    <img src="imgs/travel-banner.png">
</div>
</section>

<section id="handbags">
<div class="container"> 
  <h1 class="Primary-title spacer">Travel</h1>
  <div class="row">
  <?php
    $travel = get("travel");
    foreach($travel as $travel):
      $url = "product-1-travel.php?id=".$travel['id'];
  ?>
      <article class="col-12 col-sm-6 col-md-3 col-lg-3">
      <a href="<?php echo $url ?>"><img class="img-home" src=<?php echo $travel['image_1'] ?>></a>
      <a href="<?php echo $url ?>"><h3 class="products-title"> <?php echo $travel['product_name'] ?> </h3></a>
      <p class="products-price"> $<?php echo $travel['price'] ?> </p>
      </article> 
      <?php
  endforeach;
?>
</div>
</div> 
</section>


<?php

  include('estructura/footer.php');

?>