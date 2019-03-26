<?php
    if($_GET['tipo'] != '' && $_GET['id'] > 0) {
        include("funciones.php");
        $tipo = $_GET['tipo'];
        $id = $_GET['id'];
        eliminar($tipo, $id);


        if($_GET['url'] != '') {
            header('location:' . $_GET['url']. '.php');
        }
        else {
            header('location:inventory.php');
        }
    }
    else {
        include ('./encabezado.php');
        $archivo = $_GET['nombre'];
        @unlink('./archivos/' . $archivo);
        header('location:banners.php');
    }
?>