<?php
   session_start();
   if (@$_SESSION ['usuario'] == '' || !isset ($_SESSION['usuario'])){
       // Este usuario no tiene una sesion iniciada
       header ('location:index.php');
   }

?>
<h2>Hola,<?php echo $_SESSION['usuario']; ?> <a href="logout.php">Salir</a></h2>