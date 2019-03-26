<?php

  include('estructura/header-admin.php');

?>

<section class="margen-header-p">
    <br>
</section>

<center><h1 class="admin-title">Choose product type</h1></center>

<section id="product-category">
    <div class="container">
        <div class="row">
        <div class="space"></div>
            <center>
            <article class="col-12 col-sm-12 col-md-4">
            <img class="icon-resize" src="imgs/001-bag.svg"><br>
            <form action="add-handbag.php">
            <button class="outline-button"> Handbags </button>
            </form>
            </article>
            </center>

            <div class="space"></div>

            <center>
            <article class="col-12 col-sm-12 col-md-4">
            <img class="icon-resize-wallet" src="imgs/purse.svg"><br>
            <button class="outline-button"> Wallets </button>
            </article>
            </center>

            <div class="space"></div>

            <center>
            <article class="col-12 col-sm-12 col-md-4">
            <img class="icon-resize" src="imgs/002-bag-1.svg"><br>
            <button class="outline-button"> Travel </button>
            </article>
            </center>

        </div>


        
    </div>
</section>
<section class="margen-footer-p">
    <br>
</section>

<?php

  include('estructura/footer-admin.php');

?>