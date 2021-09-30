
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleprofile.css" rel="stylesheet" type="text/css">
    <title>Editar contraseña</title>
</head>
<body>
<div id="wrapper">

<form name="cambiarcontraseña" class="login-form" action="actualizarcontrasena.php" method="post">

    <div class="header">
    <h1>Login Form</h1>
    <span><h3>Digite su nueva contraseña</h3></span>
    </div>

    <div class="content">
    <input name="passantigua" id="passantigua" type="password" class="input password" placeholder="Contraseña actual" />
    <div class="pass-icon"></div>
    <div class="content">
    <input name="passnueva" id="passnueva" type="password" class="input password" placeholder="Contraseña nueva" />
    <div class="pass-icon"></div>
    <input name="passconfirmar" id="passconfirmar" type="password" class="input password" placeholder="Repetir contraseña" />
    
    <div class="pass-icon"></div>		
    </div>
    <div class="footer">
        <input type="submit" name="submit" value="Cambiar" class="button"/>

                   
    </div>

</form>

</div>
<div class="gradient"></div>

</body>
</html>