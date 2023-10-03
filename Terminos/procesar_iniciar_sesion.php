<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include("conexion.php"); 
    $consulta = "SELECT * FROM datos WHERE email='$email' AND password='$password'";
    $resultado = mysqli_query($conex, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location:/BIenvenido/preparativos/destinos.html"); 
        exit;
    } else {
        $_SESSION['error'] = "Credenciales de inicio de sesión incorrectas";
        header("Location: iniciar_sesion.php"); 
        exit;
    }
} else {
    header("Location: iniciar_sesion.php");
    exit;
}
?>
