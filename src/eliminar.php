<?php
    include ('./encabezado.php');
    $archivo = $_GET['nombre'];
    @unlink('./archivos/' . $archivo);
    header('location:banners.php');
?>