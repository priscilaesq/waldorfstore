<?php

  include('estructura/header.php');

?>

<section id="hero-handbag">
<div class="container">
    <img src="imgs/wallets-banner.png">
</div>
</section>


<section id="handbags">
<div class="container"> 
  <h1 class="Primary-title spacer">Wallets</h1>
  <div class="row">
  <?php
    $wallets = get("wallets");
    foreach($wallets as $wallet):
      $url = "product-1-wallets.php?id=".$wallet['id'];
  ?>
      <article class="height-fixed col-12 col-sm-6 col-md-3 col-lg-3">
      <a href="<?php echo $url ?>"><img class="img-home" src=<?php echo $wallet['image_1'] ?>></a>
      <a href="<?php echo $url ?>"><h3 class="products-title"> <?php echo $wallet['product_name'] ?> </h3></a>
      <p class="products-price"> $<?php echo $wallet['price'] ?> </p>
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