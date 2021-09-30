<?php
	include("conexion.php");
    session_start();
    $_SESSION['email'];
    
	

  
  $passantigua=$_POST["passantigua"];
  $passnueva=$_POST["passnueva"];
  $passconfirmar=$_POST["passconfirmar"];
  $admin=mysqli_query($conexion,"select * from usuario where pass='$passantigua'");
  if (mysqli_num_rows($admin)>0){
    if($passnueva == $passconfirmar){
        
    mysqli_query($conexion,"update usuario set pass='$_POST[passnueva]'  where email='$_SESSION[email]'") or die("problemas en el select:".mysqli_error($conexion));
    echo "el archivo fue modificado con exito";
    
//header("location: ")

    }
}
?>
<a href="index.html">Volver al inicio</a>