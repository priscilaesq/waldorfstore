<?php
    session_start();
    $db = mysqli_connect("db","root","root", "main");
    // checar si hubo error a la hora de conectarse a la bd
    if ($db->connect_errno){
            echo 'No se pudo realizar la conexion';
            echo mysql_connect_error();
    }
    $correo = $_POST['correo'];
    $contrasena = MD5($_POST['contrasena']);

    //$password = md5($contrasena);
    //$insert = mysqli_query($bd,"INSERT INTO usuario (username,contrasena)
    //    VALUES ('$usuario','$password')");

// Buscar todos los usuarios que tengan de nombre lo que me dieron en la forma
// y de contraseña lo que me dieron en la forma
    $query = "SELECT * FROM usuarios
    WHERE correo = '$correo' AND
          contrasena = '$contrasena'";


// Mandarlo a la BD y guardar el resultado en una variable
// la -> es de asignación
// en la bd vamos a pedirle la función query y le mandamos de parametro $query
    $resultSet = $db->query($query) or die ($db->error);
    $encontrado = false;

// Se va a ir resultado por resultado y si encuentra uno, inicia sesión. y si no,
// pos no
    while ($registro=$resultSet->fetch_array()) {
            $encontrado =true;
            $_SESSION = $registro;
            header('location:profile.php');
    }
        if (!$encontrado){
?>
        La cuenta de usuario es incorrecta
        <a href="index.php">Regresar</a>
<?php
        }

?>