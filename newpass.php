<?php
	include("conexion.php");
    session_start();
    $passantigua=$_POST["passantigua"];
    $passnueva=$_POST["passnueva"];
    $passconfirmar=$_POST["passconfirmar"];
    $cod=$_SESSION["codigo"];
    $regis=mysqli_query($conexion."select * from usuario where email='$email'") or die("problemas en el select" .mysqli_error($conexion));

    if(mysqli_fetch_row($regis)< 0){
        $fila=mysqli_fetch_row($regis);
        $pass= $fila[3];
        if($pass==$passantigua){
            echo "La contraseña se cambió con exito";
        }else {
            echo "Error al cambiar la contraseña";
        }
    }
?>	