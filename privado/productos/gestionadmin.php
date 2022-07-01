<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/Filtro.css">
	<title>Gestionar Productos </title>
</head>
<header>
	<nav class="menu" id="menu">

		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>
		<div class="contenedor contenedor-enlaces-nav">

			<div class="box">
</div>


  <div class="enlaces">
    <a href="../productos/productos.php">Agregar Producto</a>
    <a href="../../privado/queja.php">queja</a>
    <a href="../index2.php">volver</a>
    <a href="../../lo/cerrar.php">Salir</a>
  </div>

  <div class="box">
 <form action="gestionadmin.php" method ="POST">
  <input type="text" name="search" placeholder="Buscar Productos" class="scr" autocomplete="off">
  <imput type="submit" value="Buscar">
</form>
</div>

</header>
<?php

require_once('Modelo/conectar.php');
require_once('Modelo/conexion.php');
require_once('Modelo/producto.php');
$producto = new ProductoModelo(); //Llama al metodo constructor
$matrizproducto = $producto->get_producto();
?>
<center>
<table border="2">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Telefono</th>
        <th>Foto</th>
        <th>Modificar</th>
        <th>Eliminar</th>

    </tr>
    <tr>

</center>
    <?php
foreach($matrizproducto as $fila){



    ?>
    </tr>

    <?php
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "latin1");



  $Id=$fila['Id'];
  $Contenido=$fila['Contenido'];
  $Nombre=$fila['Nombre'];
  $Descripcion=$fila['Descripcion'];
  $Telefono=$fila['Telefono'];
  $Tipo=$fila['Tipo'];

?>

    <td> <?php echo $fila["Nombre"]?></td>
    <td> <?php echo $fila["Descripcion"]?></td>
    <td> <?php echo $fila["Telefono"]?></td>
    <th> <?php echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>" ?>

    <form action ="elementos/frmmodificar.php?Id=<?php
 echo $fila["Id"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-success"> Modificar </button>
 <?php $fila["Id"];?>
 </form>

 <form action ="elementos/eliminarprod.php?Id=<?php
 echo $fila["Id"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-danger"> Eliminar </button>
 <?php $fila["Id"];?>

 </form>

    <?php
}

    ?>
