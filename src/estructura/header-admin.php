<?php
    session_start();
   include ('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="shortcut icon" sizes="196x196" href="imgs/favicon.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
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
                      <a class="logo-wrap">
                          <img class="logo-img logo-img-main" src="imgs/logo.svg" alt="Waldorf Logo">
                          <img class="logo-img logo-img-active" src="imgs/logo.svg" alt="Waldorf Logo">
                      </a>
                  </div>
              </div>
              <div class="collapse navbar-collapse nav-collapse">
                  <div class="menu-container elementos-menu">
                      <ul class="nav navbar-nav navbar-nav-right">
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="banners.php">BANNERS</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="product-type.php">ADD PRODUCT</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="inventory.php">INVENTORY</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="manage-users.php">MANAGE USERS</a></li>
                          <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="logout-admin.php">LOG OUT</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>
      </header>