<?php
//inclucion de7 conexion
include '../conexion/conexion.php';
// validacion de variables
$email = $_GET['email'];
$password = $_GET['password'];
$consulta = "SELECT * FROM usuarios WHERE email='$email' and password='$password'";
//print_r($sql);die;
$resultado = $mysqli->query($consulta);
//print_r($result->num_rows);
if ($resultado->num_rows > 0) {
    //echo "entro";
    $_SESSION['email'] = $email;
    header('location: ../index.php');
    } while ($row = mysqli_fetch_all($resultado)) {
        echo json_encode($row);
     }

/* if ($result->num_rows == 0) {
    $mensaje = 'Consulta no válida: ' . mysqli_error($mysqli) . "\n";
    //header("Location: ../index.php");
}
while ($row = mysqli_fetch_all($result)) {
   echo json_encode($row); 
} */

