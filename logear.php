<?php
  include("conexion.php");
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $admin=mysqli_query($conexion,"select * from usuario where email='$email' && pass='$pass'");
  if (mysqli_num_rows($admin)>0){
  $fila=mysqli_fetch_row($admin);
  $email=$fila[1];
  $pass=$fila[2];
  session_start();
  $_SESSION['email']=$email;
  $_SESSION['pass']=$pass;
  header("location:user.php");
  }else{
  header("location:logear.php");
  }
  ?>