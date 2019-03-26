<?php
  include 'db.php';

 //retrieve records

 $results = mysqli_query($db, "SELECT * FROM usuarios" );

 // delete records
if (isset($_GET['del'])){
  $id_usuario = $_GET['del'];
  mysqli_query($db, "DELETE FROM usuarios WHERE id_usuario = $id_usuario");
  header('location:manage-users.php');
}

 ?>