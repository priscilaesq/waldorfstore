<?php

  include('estructura/header.php');

?>

<section id="hero-handbag">
<div class="container">
    <img src="imgs/handbags-banner.png">
</div>
</section>

<section id="handbags">
<div class="container"> 
  <h1 class="Primary-title spacer">Handbags</h1>
  <div class="row">
  <?php
    $handbags = get("handbags");
    foreach($handbags as $handbag):
      $url = "product-1-handbags.php?id=".$handbag['id'];
  ?>
      <article class="col-12 col-sm-6 col-md-3">
      <a href="<?php echo $url ?>"><img class="img-home" src=<?php echo $handbag['image_1'] ?>></a>
      <a href="<?php echo $url ?>"><h3 class="products-title"> <?php echo $handbag['product_name'] ?> </h3></a>
      <p class="products-price"> $<?php echo $handbag['price'] ?> </p>
      </article>
<?php
  endforeach;
?>
  
</div>
</section>


<?php

  include('estructura/footer.php');

?>