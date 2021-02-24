<?php
include("conexion.php");
session_start();
//error_reporting(0);
?>
<!doctype html>

<html>

<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <title>Bienvenido</title>
  
  <link rel="stylesheet" href="example/example.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <!--.......................-->



<style type='text/css'>
        


input[type="file"]#nuestroinput {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 
 label[for=" nuestroinput"] {
 font-size: 14px;
 font-weight: 600;
 color: #fff;
 background-color: #106BA0;
 display: inline-block;
 transition: all .5s;
 cursor: pointer;
 padding: 15px 40px !important;
 text-transform: uppercase;
 width: fit-content;
 text-align: center;
 }
 
 
 
 input[type="submit"]#nuestroinputsub {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 
 label[for=" nuestroinputsub"] {
 font-size: 14px;
 font-weight: 600;
 color: #fff;
 background-color: #106BA0;
 display: inline-block;
 transition: all .5s;
 cursor: pointer;
 padding: 15px 40px !important;
 text-transform: uppercase;
 width: fit-content;
 text-align: center;
 }
 
 
 
</style>


</head>


<iframe src="sweetalert.html" style="display:none;"></iframe>
<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: index.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
$username=$_POST['username'];
$password=$_POST['password'];

$query =mysqli_query("SELECT * FROM usuario WHERE email='".$username."' AND  password='".$password."'");

$numrows=mysqli_num_rows($query);
if($numrows!=0)

{
while($row=mysqli_fetch_assoc($query))
{
$dbusername=$row['email'];

$dbpassword=$row['password'];
}

if($username == $dbusername && $password == $dbpassword)

{

$_SESSION['session_username']=$username;

/* Redirect browser */
header("Location: index.php");
}
} else {
		echo "

<script>

swal({
  title: 'Error',
  text: '¡Nombre de usuario ó contraseña invalida!',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='login.php';
});



</script>";

//$message = "";
}

} else {
	
		echo "

<script>

swal({
  title: 'Error',
  text: '¡Todos los campos son requeridos!',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='login.php';
});



</script>";

}
}
?>





<form name="loginform" id="loginform" action="" method="POST">
<img style="float:left; margin-left:200px; margin-top: 200px;" src="images/linea_vertical.png" alt="Linea" />
<p>
<input type="text" name="username" id="username" style="font-family:Arial, Helvetica, Verdana; background-color: #9da4a9; border:0; margin-left:20px; margin-top: 200px; height:50px; width:350px; color:#FFF; font-weight: bold; font-size:20px;" placeholder="EMAIL" >
<br><br>
<input type="password" name="password" id="password" style="font-family:Arial, Helvetica, Verdana; margin-left:20px; background-color: #9da4a9; border:0; height:50px; width:200px; color:#FFF; font-weight: bold; font-size:20px;" placeholder="PASSWORD" >
<br>
<input type="submit" name="login" class="button" value="Entrar" style="margin-left:20px;"/>

<br>
<button><a href="crear_cliente.php" style="text-decoration:none; color:#FFF;">Registrese aqui</a></button>

</form>
<br>








