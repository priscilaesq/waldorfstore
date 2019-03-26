<?php
  session_start();
  //conectando la base de datos
  $db = mysqli_connect('db','root','root','main');

  //checando conexion
  if($db->connection_errno){
    echo 'Fallo la conexion';
    exit();
  }
  
  ///asignando los campos del formulario a una variable
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $descripcion = $_POST['descripcion'];
  $dimensions = $_POST['dimensions'];
  $materials = $_POST['materials'];
  $details = $_POST['details'];


   $query = "INSERT INTO handbags (product_name, price, descripcion, dimensions, materials, details)
             VALUES ('$product_name','$price','$descripcion','$dimensions','$materials','$details')";
   mysqli_query($db, $query);
   header('location:inventory.php');

?>
