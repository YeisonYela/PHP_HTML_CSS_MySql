<?php
//conexion con abse de datos
include("../Modelo/conexion.php");

//recibimos los datos Imagen
$Id=$_REQUEST['Id'];


require("../Modelo/conexion.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if (mysqli_connect_errno()) {
  echo "fallo al conectar";
  exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos");
mysqli_set_charset($conexion,"uft8");


$sql="DELETE FROM PRODUCTO WHERE ID = '$Id' ";
$resultado=mysqli_query($conexion,$sql);
header("location:../gestionadmin.php");
