<?php
//conexion con abse de datos
include("Modelo/conexion.php");

//recibimos los datos Imagen
session_start();
$correo = $_SESSION["correo"];
//var_dump($correo);
//exit;

$nombre=$_POST['nombre'];
$Descripcion=$_POST['Descripcion'];
$Categoria=$_POST['Categoria'];
$Telefono=$_POST['Telefono'];
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno_imagen=$_FILES['imagen']['size'];

//var_dump($tamagno_imagen);
//exit;
//echo $tipo_imagen;

if($tamagno_imagen<=16000000){

if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg"|| $tipo_imagen=="image/png"|| $tipo_imagen=="image/gif") {

//ruta imagen
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/TRUEQUE ACTIVO/privado/imagenes/';

move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
}else{
  echo "solo se pueden subir imagenes";
}
}else{
  echo "el tamaño es demaciado grande";
}

require("Modelo/conexion.php");
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

$sql="INSERT INTO producto (Id,Nombre,Descripcion,Categoria,Telefono,Tipo,Contenido,correo) VALUES (0,'$nombre','$Descripcion','$Categoria','$Telefono','$tipo_imagen','$contenido','$correo')";
$resultado = mysqli_query($conexion,$sql);

if(mysqli_affected_rows($conexion)>0){
  echo"se ha insertado correctamente";
  header("location:../index1.php");
}else {
  echo "no se inserto";
}


?>
