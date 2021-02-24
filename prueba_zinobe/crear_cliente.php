<?php
//error_reporting(0);
include("conexion.php");

?>
<html>
<head>
<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<title>creacion</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable='0'" />
  <link rel="stylesheet" href="example/example.css">
  
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script language="javascript" src="js/generales.js"></script>

  <!-- This is what you need -->
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <!--.......................-->

<style type='text/css'>
        /* Codigo CSS para pagina responsive*/
        @media only screen and (max-width: 630px) {
            body                    { width: 100% !important; -webkit-text-size-adjust: none; }
            table table             { width: 320px !important; }
            .scaleHeader            { width: 320px !important; !important; }
            .scaleFullwidth         { width: 320px !important; !important; }
            .scaleSeperator         { width: 320px !important; }
            .scaleFollowus          { width: 240px !important; }
            .fullWidth              { width: 320px !important; }
            .mobileImage            { margin: 20px auto; }
            .center                 { text-align: center !important; }
            .tableCenter            { margin-left: auto !important; margin-right: auto !important; float: none !important; }
            .columnMargin           { margin-bottom: 20px !important; }
            .button                 { margin-left: auto !important; margin-right: auto !important; float: none !important; }
        }
        .mobileImage {margin: 20px auto; }
        .mobileImage1 {margin: 20px auto; }
.mobileImage1 {margin: 20px auto; }


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
 
 
 
 input[type="file"]#nuestroinput1 {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 
 label[for=" nuestroinput1"] {
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
  
 input[type="submit"]#nuestroinputsub1 {
 width: 0.1px;
 height: 0.1px;
 opacity: 0;
 overflow: hidden;
 position: absolute;
 z-index: -1;
 }
 
 label[for=" nuestroinputsub1"] {
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
<iframe src="sweetalert.html" style="display:none;"></iframe>




</head>

<body>




<script type="text/javascript">
function mostrar1(){
document.getElementById('oculto1').style.display = 'block';
document.getElementById('oculto2').style.display = 'none';
}
</script>
<script type="text/javascript">
function mostrar2(){
document.getElementById('oculto1').style.display = 'none';
document.getElementById('oculto2').style.display = 'block';
}
</script>


<br><br>
<!--MENU PEQUEÑO-->
<div style="float:left; display:none;" id='oculto1' >
<img src="images/menu_icon.png" onclick="mostrar2()" style="float:left;  width:40px; margin-left:30px;  cursor: pointer;" title="Ocultar menu">



<a href="login.php"><div title="Inicio" style="cursor: pointer; font-family:Arial, Helvetica, Verdana; font-weight: bold; background-color: #c3c8cc; width:40px; height:40px; float:left; margin-left:30px; "><center><img src="images/home_icon.png"  style="width:30px;" alt="home_icon"/></center></div></a>


</div>

<img src="images/menuo_icon.png" id='oculto2' onclick="mostrar1()" style="float:left; width:40px; margin-left:30px;  cursor: pointer;" title="Desplegar menu">
<!--MENU PEQUEÑO-->
<br><br><br><br>
<br>

<br><br>




<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-dark.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>

<!-- Start Formoid form-->
<?php
echo"

<form style='font-family:arial,helvetica,sans-serif;' class='formoid-solid-dark' style='background-color:#F2F4F6;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px' action='CustomerData.php' method='post'><div class='title'><h2>Formulario de registro usuarios</h2></div>
	<div class='element-input' title='Nombres y apellidos'><label class='title'></label><div class='item-cont'><input title='Digite el nombre completo' maxlength='50' minlength='3' class='large' type='text' name='nombre' placeholder='Nombre completo' required /><span class='icon-place'></span></div></div>
	<div class='element-number' title='documento'><label class='title'></label><div class='item-cont'><input  class='large' type='number' name='documento' placeholder='Numero de documento' maxLength='20' required /><span class='icon-place'></span></div></div>
<div id='result-username'></div>
<div class='element-email' title='email'><label class='title'></label><div class='item-cont'><input class='large' type='email' name='email' placeholder='email electronico' maxLength='90' required /><span class='icon-place'></span></div></div>

<select name='pais' required>
	<option value=''>Seleccione pais</option>";
	
// Realizamos la consulta para extraer los datos
          $sql="select * from paises";
	$respuesta=mysqli_query($sql);
          while ($valores = mysqli_fetch_array($respuesta)) {
// En esta sección estamos llenando el select con datos extraidos de una base de datos.
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
		  echo"


<div class='element-input' title='Contraseña'><label class='title'></label><div class='item-cont'><input class='large' type='text' name='password' placeholder='Digite la contraseña minimo 6 caracteres' minLength='6' required /><span class='icon-place'></span></div></div>

<div class='submit'><input type='submit' value='crear' name='crear'/></div></form>
<!-- Stop Formoid form-->";
	
?>








</body>
</html>

