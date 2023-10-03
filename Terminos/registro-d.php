<?php
include("conexion.php");

if (isset($_POST['Sign In'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(name, email, password, fecha) 
                    VALUES ('$name','$email','$password','$fecha')";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            ?>
            <h3 class='success'>tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3 class="dengade">
                Su registro no se ha podido completar
            </h3>
            <?php
        }
    }
}
?>
