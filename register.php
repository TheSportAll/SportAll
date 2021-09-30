<?php 
require_once("conexion.php"); 
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    
<div>
<?php

if(isset($_POST["registrarse"])){
    $email          = $_POST['email'];
    $username       = $_POST['username'];
    $pass           = $_POST['pass'];
    $identificacion = $_POST['identificacion'];
    $telefono       = $_POST['telefono'];
    $direccion      = $_POST['direccion'];

    $sql = "INSERT INTO usuario (email, username, pass, identificacion, telefono, direccion) VALUES (?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$email, $username, $pass, $identificacion, $telefono, $direccion]);
    if($result){
        echo "Cuenta Correctamente Creada";
        header("location:user.php");
    }else {
        echo "Error al ingresar datos de la informacion!";
    }
}
?>
</div>

<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <i class="fas fa-user"></i>
      </div>
  
      <!-- Login Form -->
      <form action="register.php" method="post">
        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
        <input type="text" id="username" class="fadeIn third" name="username" placeholder="Nick">
        <input type="text" id="pass" class="fadeIn third" name="pass" placeholder="Contraseña">
        <input type="text" id="telefono" class="fadeIn third" name="telefono" placeholder="telefono">
        <input type="text" id="direccion" class="fadeIn third" name="direccion" placeholder="Direccion">
        <input type="text" id="identificacion" class="fadeIn third" name="identificacion" placeholder="Identificacion">
        <input type="submit" class="fadeIn fourth" name="registrarse" value="Registrarse">
      </form>
  
      <!-- Remind Passowrd -->
                <div id="formFooter">
                <p class="underlineHover">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>
    </div>
  </div>
</body>
</html>
<!--<div class="wrapper fadeInDown">
    <div class="formContent">
            <div class="fadeIn first"><i class="fas fa-user"></i></div> 
            <form action="register.php" method="post">
                <input type="text" name="email" id="email" class="fadeIn third" value="" size="32" placeholder="Email"/>
                <input type="text" name="username" id="username" class="fadeIn third" value="" size="20" placeholder="Nick-username"/>
                <input type="text" name="pass" id="pass" class="fadeIn third" value="" size="32" placeholder="password"/>
                <input type="text" name="dni" id="dni" class="fadeIn third" value="" size="25" placeholder="Identificacion"/>
                <input type="text" name="telefono" id="telefono" class="fadeIn third" value="" size="25" placeholder="telefono"/>
                <input type="text" name="direccion" id="direccion" class="fadeIn third" value="" size="32" placeholder="direccion"/>

                <input type="submit" name="register" class="fadeIn fourth" value="Registrar" />
                </form>


                <div id="formFooter">
                <p class="underlineHover">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>

                

    </div>
</div>