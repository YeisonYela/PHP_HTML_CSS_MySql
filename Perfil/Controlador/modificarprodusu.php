<?php
//conexion con abse de datos
include("../../privado/productos/Modelo/conexion.php");

//recibimos los datos Imagen
$Id=$_POST['Id'];
$nombre=$_POST['nombre'];
$Descripcion=$_POST['Descripcion'];
$Categoria=$_POST['Categoria'];
$Telefono=$_POST['Telefono'];
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno_imagen=$_FILES['imagen']['size'];

//echo $tipo_imagen;

if($tamagno_imagen<=5000000){

if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg"|| $tipo_imagen=="image/png"|| $tipo_imagen=="image/gif") {

//ruta imagen
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/TRUEQUE ACTIVO/privado/imagenes/';

move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
}else{
  echo "solo se pueden subir imagenes";
}
}

require("../../privado/productos/Modelo/conexion.php");
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if (mysqli_connect_errno()) {
  echo "fallo al conectar";
  exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos");
mysqli_set_charset($conexion,"uft8");

$imagen_objetico=fopen($carpeta_destino . $nombre_imagen, "r");
$contenido=fread($imagen_objetico, $tamagno_imagen);
$contenido=addslashes($contenido);
fclose($imagen_objetico);


$sql="UPDATE PRODUCTO set Nombre = '$nombre', Descripcion = '$Descripcion',Categoria = '$Categoria',Telefono = '$Telefono', Tipo = '$tipo_imagen', Contenido = '$contenido' WHERE Id = '$Id' ";
$resultado=mysqli_query($conexion,$sql);
header("location:../vistaperfil.php");

?>

