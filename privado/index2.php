<?php

include("../lo/verpag.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilosi.css">
  <link rel="stylesheet" href="../css/Redes.css">
	<title>Menu de Navegacion Trueque Activo </title>

</head>
<body>
	<nav class="menu" id="menu">
		<div class="contenedor contenedor-botones-menu">
			<button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
			<button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
		</div>
		<div class="contenedor contenedor-enlaces-nav">
			<div class="btn-departamentos" id="btn-departamentos">
				<p>Todos los <span>Productos</span></p>
				<i class="fas fa-caret-down"></i>
<img src="../img/LOGOV.png" alt="" width="70px" height="70px"position:relative >
			</div>

			<div class="box">
 <form action="juguetes.php" method ="POST">
  <input type="text" name="search" placeholder="Buscar Productos" class="scr" autocomplete="off">
  <imput type="submit" value="Buscar">
</form>
</div>
			<div class="enlaces">
				<a href="../privado/productos/gestionadmin.php">Gestionar<br>Productos </a>
				<a href="Usuario/index.php">Perfiles</a>
				<a href="../privado/queja.php">queja</a>
				<a href="#">perfi</a>
				<a href="../lo/cerrar.php">Salir</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

          <a href="#" data-categoria="Empresas-Asociadas">Empresas Asociadas <i class="fas fa-angle-right"></i></a>
					<a href="productos/Vista_admin/tecno.php" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
					<a href="productos/Vista_admin/lib.php" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
					<a href="productos/Vista_admin/ropa.php" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
					<a href="productos/Vista_admin/hogar.php" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fas fa-angle-right"></i></a>
					<a href="productos/Vista_admin/juguetes.php" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>


				</div>

				<div class="contenedor-subcategorias">
					<div class="contenedor-subcategorias">
						<div class="subcategoria" data-categoria="Empresas-Asociadas">
							<div class="enlaces-subcategoria">
								<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
								<h3 class="subtitulo">Empresas Asociadas</h3>
								<a href="#">Miselania y Pañaleria Camilito</a>

							</div>

						  <div class="galeria-subcategoria">
					  	<a href="#">
					   	<img src="../img/tienda-banner-1.png" alt="">
						  </a>
					</div>
				</div>
					<div class="subcategoria " data-categoria="tecnologia-y-computadoras">


						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/tecnologia-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/tecnologia-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../img/tecnologia-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="libros">

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/libros-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/libros-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../img/libros-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="ropa-y-accesorios">

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/ropa-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/ropa-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../img/ropa-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="hogar-y-cocina">

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/hogar-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/hogar-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../img/hogar-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="juegos-y-juguetes">

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../img/juegos-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../img/juegos-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../img/juegos-galeria-4.png" alt="">
							</a>
						</div>
					</div>


					</div>
				</div>
			</div>
		</div>
	</nav>

	
	<main class="contenedor">
		<article>

			<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
			<script src="../js/main.js"></script>

			<div id="carousel1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<div class="carousel-item active">
						 <img src="../img/1.jpg" alt="" width="100%" height="400" >
					</div>
					<div class="carousel-item">
						 <img src="../img/4.png" alt="" width="100%" height="400" >
					</div>
					<div class="carousel-item">
						 <img src="../img/3.jpg" alt="" width="100%" height="400" >
					</div>
					<!--Controles NEXT y PREV-->
					<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
					</a>
					<!--Controles de indicadores-->
					<ol class="carousel-indicators">
							<li data-target="#carousel1" data-slide-to="0" class="active"></li>
							<li data-target="#carousel1" data-slide-to="1"></li>
							<li data-target="#carousel1" data-slide-to="2"></li>
					</ol>
				</div>
					

					







	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
			$('.carousel').carousel();
	</script>

	<div class="ofertas">
		<center>
			<h6>PUBLICACIONES RECIENTES</h6>
</center>
	</div>
	
	<div class= "container">
<div class="box1"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=18";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box2"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=17";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>

<div class="box3"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=16";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box4"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=15";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box5"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=14";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box6"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=13";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box7"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=12";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>

<div class="box8"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=11";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>

<div class="box9"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=10";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box10"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=9";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box11"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=8";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box12"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=7";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box13"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=6";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box14"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=5";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>

<div class="box15"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=4";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box16"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=3";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box17"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=2";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>


<div class="box18"><?php
	$Id="";
	$Nombre="";
	$Descripcion="";
	$Telefono="";
	$Contenido="";
	$Tipo="";
  
	require("productos/Modelo/conexion.php");
	$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
  
	if(mysqli_connect_errno()){
	echo "Fallo al conectar con la BBDD";
	exit();
	}
  
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "uft8");
  
	$consulta="SELECT * FROM PRODUCTO WHERE ID=1";
  
	$resultado=mysqli_query($conexion, $consulta);
  
	while($fila=mysqli_fetch_array($resultado)){
  
	$Id=$fila['Id'];
	$Contenido=$fila['Contenido'];
	$Nombre=$fila['Nombre'];
	$Descripcion=$fila['Descripcion'];
	$Telefono=$fila['Telefono'];
	$Tipo=$fila['Tipo'];
	}
  
  
	?>
	<div class="publicacion"><?php
	echo "Nombre: " . $Nombre . "<br>";
	echo "Caracteristicas: " . $Descripcion . "<br>";
	echo "Numero de contacto: " . $Telefono . "<br>";
	echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
	?>
</div>
</div>



</article>


	</main>
	<footer>
    <div class="content-footer">
			<div class="main center">
			<div class="icon center">
				<i><a target="_blank" href="https://www.facebook.com/Trueque-Activo-104671268581543/?ref=pages_you_manage" class="fab fa-facebook-f fa-2x"></a></i>
			</div>


			<div class="icon center">
				<i><a target="_blank" href="https://instagram.com/truequeactivo06?utm_medium=copy_link" class="fab fa-instagram fa-2x"></a></i>
			</div>

			<div class="icon center">
				<i><a target="_blank" href="https://chat.whatsapp.com/J4pPm3Xso9K8Viah0rTcOW" class="fab fa-whatsapp fa-2x"></a></i>
			</div>

			<div class="icon center">
				<i><a target="_blank" href="https://twitter.com/ActivoTrueque" class="fab fa-twitter fa-2x"></a></i>
			</div>

			<div class="icon center">
				<i><a target="_blank" href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-at gmail fa-2x"></a></i>
			</div>
			</div>
			</div>
			<h2 class="titulo-final">&copy; TRUEQUE | Grup-Trueque-Activo</h2>
	</footer>

	<script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>


</body>
</html>
