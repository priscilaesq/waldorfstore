<?php
//conectando la base de datos
$db = mysqli_connect('db','root','root','main');

//checando conexion
if($db->connection_errno){
  echo 'Fallo la conexion';
  exit();
}