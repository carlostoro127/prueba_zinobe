
<?php
$servidor="localhost";
$usuario="root";
$clave="";
mysqli_connect($servidor,$usuario,$clave) or die("no se pudo conectar"); 
mysqli_select_db("usuarios") or die("no se puede conectar a la base de datos");
?>