<?php

function print_x($var, $die = false) {
  echo "<pre>";
    print_r($var);
  echo "</pre>";

  if($die) die();
}

function registrar_subscriptor($email) {
  $db = mysqli_connect('db','root','root','main');
  $query = "INSERT INTO subscriptores ( email )
  VALUES ('$email')";
  $result = $db->query($query);
  $db->close();
  return $result;
}


function registrar_banner() {
  $db = mysqli_connect('db','root','root','main');
  $query = "INSERT INTO banners ( img )
  VALUES (' ') ";
  $result = $db->query($query);
  if($result) {
    return $db->insert_id;
  }
  else {
    return false;
  }
}

// SUPONIENDO QUE $ARGS ES POST Y LOS INPUTS SE LLAMAN IGUAL QUE EN LA BASE DE DATOS
// $args = [
//   'contrasena' => md5('holi'),
// ]
// update('usuarios', $id_usuario, $args);


function update($tabla, $id, $args) {
  $db = mysqli_connect('db','root','root','main');
  $primero = true;
  $update = '';
  foreach($args as $index => $value) {
    if($primero) {
      $update .= "$index = '$value'";
      $primero = false;
    }
    else {
      $update .= ", $index = '$value'";
    }
  }
  $query = "UPDATE $tabla SET $update WHERE id = '$id'";
  $result = $db->query($query);
  return $result;
}

function update_imagen($tabla,$id,$index) {
  $db = mysqli_connect('db','root','root','main');

  if($_FILES[$index]['tmp_name'] != '') {
    $url = "./imgs/$tabla/$id/";
    $image = subir_imagen($index, $index, $url);
    if($image) {
      $query = "UPDATE $tabla SET $index = '$image' WHERE id = '$id'";
      $result = $db->query($query);
      return $result;
    }
    else {
      return false;
    }
  }

}

function get($tabla) {
  $db = mysqli_connect("db","root","root", "main");
  $query = "SELECT * FROM $tabla";
  $result = $db->query($query);
  $resultados = [];
  $i = 0;
  if ($result->num_rows > 0) :
      while($row = $result->fetch_assoc()) :
        $resultados[$i] = $row;
        $i++;
      endwhile;
  else :
    $resultados = false;
  endif;
  $db->close();
  return $resultados;
}

function single($tabla, $id) {
  $db = mysqli_connect("db","root","root", "main");
  $query = "SELECT * FROM $tabla WHERE id = '$id'";
  $result = $db->query($query);
  if ($result->num_rows > 0) :
      while($row = $result->fetch_assoc()) :
        $resultados = $row;
      endwhile;
  else :
    $resultados = false;
  endif;
  $db->close();
  return $resultados;
}

function eliminar($tabla, $id) {
  $db = mysqli_connect("db","root","root", "main");
  $query = "DELETE FROM $tabla WHERE id = '$id'";
  $result = $db->query($query);
  $db->close();

  $path = "./imgs/$tabla/$id/";

  eliminar_imagenes($path);
  return $result;
}

function eliminar_imagenes($url) {
  if(is_dir($url)){
      $files = glob( $url . '*', GLOB_MARK );
      foreach( $files as $file ){
        eliminar_imagenes( $file );
      }
      rmdir( $url );
  } elseif(is_file($url)) {
      unlink( $url );
  }
}

function subir_imagen($input, $nombre, $url) {
  $name = basename($_FILES[$input]["name"]);
  $tipo = strtolower(pathinfo($name,PATHINFO_EXTENSION));
  if (!is_dir($url)) {
    mkdir($url);
  }
  $url = $url . $nombre . "." . $tipo;
  if ( move_uploaded_file($_FILES[$input]["tmp_name"], $url ) ) {
    return $url;
  }
  else {
    return false;
  }
}


?>