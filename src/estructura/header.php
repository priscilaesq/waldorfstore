<?php
    session_start();
    include ('funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/estilos.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/funciones.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="shortcut icon" sizes="196x196" href="imgs/favicon.png">


  

  <title>Waldorf Manhattan® Official Store </title>
</head>
<body>

<header class="header navbar-fixed-top">
        <nav class="navbar" role="navigation">
          <div class="container">
                <div class="menu-container js_nav-item">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="toggle-icon"></span>
                  </button>

                    <div class="logo">
                      <a class="logo-wrap" href="index.php">
                          <img class="logo-img logo-img-main" src="imgs/logo.svg" alt="Waldorf Logo">
                          <img class="logo-img logo-img-active" src="imgs/logo.svg" alt="Waldorf Logo">
                      </a>
                  </div>
              </div>

              <div class="collapse navbar-collapse nav-collapse">
                  <div class="menu-container elementos-menu mover-derecha">
                      <ul class="nav navbar-nav navbar-nav-right">
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="handbags.php">HANDBAGS</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="wallets.php">WALLETS</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="travel.php">TRAVEL</a></li>
                          <?php
                          if($_SESSION["nombre"] != ""){
                              $url="profile.php";
                          }
                            else{
                                $url="login.php";
                            }
                          ?>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="<?php echo $url ?>"><img class="profile-icon" src="imgs/account-outline.svg">  </a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>
</header>
<div class="espaciador-de-menu"></div>







