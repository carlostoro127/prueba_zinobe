<?php
include("conexion.php");
error_reporting(0);
session_start();
if(!isset($_SESSION["session_username"])) {
header("location:login.php");
} else {

?>
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable='0'" />
  <title>Creando</title>
  
  <link rel="stylesheet" href="example/example.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <!--.......................-->
  </head>
  <iframe src="sweetalert.html" style="display:none;"></iframe>
<?php

if(isset($_POST['crear'])&& !empty($_POST["crear"])){

$nombre=$_POST['nombre'];
$documento=$_POST['documento'];
$email=$_POST['email'];
$pais=$_POST['pais'];
$password=$_POST['password'];

 if (!preg_match('`[0-9]`',$password)){
	 echo "

<script>

swal({
  title: 'Error',
  text: 'La clave debe contener almenos un caracter numerico',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='crear_cliente.php';
});



</script>";
      
   }
   
$nuevo_documento=mysqli_query("select documento from usuario where documento='$documento'");
if(mysqli_num_rows($nuevo_documento)>0)
{ 
 echo "

<script>

swal({
  title: 'Error',
  text: 'El numero de documento ya se encuentra registrado',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='crear_cliente.php';
});



</script>";
      

}
$nuevo_email=mysqli_query("select email from usuario where email='$email'");

if(mysqli_num_rows($nuevo_email)>0)
{ 
 echo "

<script>

swal({
  title: 'Error',
  text: 'El email ya se encuentra registrado',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='crear_cliente.php';
});



</script>";
      

}
 





 



$sql="INSERT INTO usuario(nombre, documento, email, pais, password) VALUES ('".$nombre."', '".$documento."', '".$email."', '".$pais."', '".$password."');";

$result=mysqli_query($sql) or die ("error:$sql.". mysqli_error());

echo "

<script>

swal({
  title: 'Realizado',
  text: 'Usuario creado exitosamente',
  type: 'success',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Continuar',
  closeOnConfirm: true
},
function(){
  window.location='crear_cliente.php';
});



</script>";

	
	}//final if principal
	
	
	else
	{
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para ver si esta separado por " ; "
              	
		echo "

<script>

swal({
  title: 'Error',
  text: 'El usuario no pudo ser creado',
  type: 'error',
  showCancelButton: false,
  confirmButtonColor: '#A1D9F2',
  confirmButtonText: 'Volver atras',
  closeOnConfirm: true
},
function(){
  window.location='crear_empresas.php';
});



</script>";

	}






mysqli_close();
?>
<?php
		 
}
?>
