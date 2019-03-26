<?php
  include 'db.php';

  $msg="";

  if(isset($_POST['upload'])){
    $target= "banners/".basename($_FILES['img']['name']);


  // agarrar la data del form

  $img = $_FILES['img']['name'];

  $sql = "INSERT INTO banners (img) VALUES ('$img')";
  mysqli_query($db, $sql);

  // mover la imagen al folder de banners

  if(move_uploaded_file($_FILES['img']['tmp_name'],$target)){
    $msg="Image uploaded successfully";
  }else{
    $msg="There was a problem uploading the image";
  }

  header('location:banners.php');
  }
  
  ?>