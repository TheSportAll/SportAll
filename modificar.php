<?php
	session_start();
	if(isset($_SESSION["email"])){
		//ingrese derecho
	}else{
		header("location:index.html");
	exit();
	}

?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="cambiarcontrasena.php">Cambiar contraseña</a>
<a href="cambiarimagen.php">Cambiarimagen</a>

</body>
</html>