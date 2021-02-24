<?php
include("conexion.php");
session_start();
if(!isset($_SESSION["session_username"])) {
header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultas</title>
	<link rel="stylesheet" href="jquery.dataTables.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script src="js/table.js"></script>
	

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

/*css del plugin*/

/*css que contiene el tamaño del div, espaciadores, tamaño de la fuante, fuente a utilizar
color de fondo en el div y grosor del borde
*/
.menu{
    padding:0;
    list-style:none;
    width:200px;
    font-size:18px;
    font-family: Helvetica, Arial, sans-serif;
    background:#FFF;
    
}
 /*contiene codigos css para:
mostrar el contenido, grosor de bordes entre divs, color de fondo, decoraciones al texto, color de texto, 
sombra del texto y ubicacion del mismo.
 */
.menu li a{
    display: block;
    border-bottom: 1px solid rgba(0,0,0, 0.2);
    border-top: 1px solid rgba(255,255,255, 0.2);
    background:#C3C8CC;
    text-decoration:none;
    font-family: Helvetica, Arial, sans-serif;
    color:#000;
    text-shadow: 1px 0px 1px rgba(0,0,0,0.2);
    filter: dropshadow(color=#000, offx=1, offy=0);
    padding:10px;
    padding-left:20px;
	text-align: center;
}
 /*contiene codigos css para:
  color de letra en las columnas que se expanden,  
sombra del texto y ubicacion del mismo.
 */
.menu li ul li a{
    font-size:14px;
    font-family: Helvetica, Arial, sans-serif;
    color:#47689d;
    text-shadow: 1px 0px 1px rgba(255,255,255,0.5);
    
}
 /*contiene codigos css para:
  color de fondo en las columnas que se expanden (azul)y tiempo de transicion en la funcion.
 */
.menu li a:hover{
    background:#9da4a9;
    -moz-transition: background 0.3s ease-in;
    -webkit-transition: background 0.3s ease-in;
    -o-transition: background 0.3s ease-in;
}
 /*contiene codigos css para:
  tiempo de transicion en la funcion para expandir y contraer las columnas.
 */
.menu ul{
    margin:0;
    padding:0;
    list-style:none;
    height:0;
    overflow: hidden;
    transition:1s;
    -moz-transition:1s;
    -webkit-transition:1s;
}
 /*contiene codigos css para:
  permite mostrar las columnas cuando la funcion de expansion se ejecuta.
 */
.menu li:hover ul{
    height:350px;
    overflow-y:auto;
    overflow-x:hidden;
}


/*contiene codigos css para:
  color de fondo en las columnas que se expanden(blanco).
 */ 
.menu ul li a{
    background:#fafafa;
}
 
.menu ul li a:hover {
    background: none repeat scroll 0 0 #ccc;
    color: #fff;
    -moz-transition: color 0.4s ease;
    -webkit-transition: color 0.4s ease;
    -o-transition: color 0.4s ease;
}

 /*css 1 para popup ubicacion fondo oscuro*/
        #preloader {
    position: fixed;
    top:0; left:0;
    right:0; bottom:0;
    background-color:  rgba(0,0,0,0.48); 
    z-index: 100;
    padding: 0px;
    margin: 0px;
    display:block;
}
/*css 2 para popup ubicacion imagen*/
#loader {
    display:block;
    max-width: 600px;
    left:50%; top:50%;
   position: absolute;
    right:0;
    bottom:0;
    margin:-250px 0 0 -300px;
}



        </style>
</head>
<body style="font-family:Arial, Helvetica, Verdana;">
<a href="logout.php" style='text-decoration:none; color:#000; '><div style=" float:left; width: 200px; font-family:Arial, Helvetica, Verdana; font-weight: bold; margin-left:1052px;   background-color:#FFE600; text-align:center;">Logout</div></a>



<!--MENU PEQUEÑO-->
<br><br><br><br>
<br>

<br><br>

<?php



 $query = "SELECT * FROM  usuario";


    $result = mysqli_query($query); 
    $numero_registros = mysqli_num_rows($result); 
	
	echo'
	<table id="tabla" class="display" cellspacing="0"  style="background-color: #FFF; border:1px; margin-top:30px; ">
        <thead>
            <tr>

<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">Nombres</th>		
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">documento</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">correo</th>
<th style="background-color: #FFE600; font-family:Arial, Helvetica, Verdana;">pais</th>


 
            </tr>
        </thead>';
 
     echo"<tbody>";
		while ($registro = mysqli_fetch_array($result))
		{ 
echo "
             <tr>
	  
	  <td style=' font-family:Arial, Helvetica, Verdana;'>$registro[nombre]</td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'>$registro[documento]</td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'>$registro[email]</td>
	  <td style=' font-family:Arial, Helvetica, Verdana;'>$registro[pais]</td>
	  

	  
      
      	   
            </tr>
             "; 
} 
echo "
        </tbody>
    </table>";
	?> 
</body>
</html>
<?php
		 
}
?>
