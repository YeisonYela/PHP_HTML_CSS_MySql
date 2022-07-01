<?php

include("../../lo/verpag.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/estilosi.css">
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
<img src="../../img/LOGOV.png" alt="" width="70px" height="70px"position:relative >
			</div>
			<div class="box">
  <input type="text" name="search" placeholder="Buscar Productos" class="scr" autocomplete="off">
</div>
			<div class="enlaces">
				<a href="productos.php">Agrergar Producto</a>
				<a href="#">Perfil</a>
				<a href="queja.php">queja</a>
				<a href="#">Ayuda</a>
				<a href="../../lo/cerrar.php">Salir</a>
			</div>
		</div>

		<div class="contenedor contenedor-grid">
			<div class="grid" id="grid">
				<div class="categorias">
					<button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
					<h3 class="subtitulo">Categorias</h3>

          <a href="#" data-categoria="Empresas-Asociadas">Empresas Asociadas <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fas fa-angle-right"></i></a>
					<a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>


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
					   	<img src="../../img/tienda-banner-1.png" alt="">
						  </a>
					</div>
				</div>
					<div class="subcategoria " data-categoria="tecnologia-y-computadoras">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Tecnología y Computadoras</h3>
							<a href="#">Laptops</a>
							<a href="#">Tablets</a>
							<a href="#">Computadoras de Escritorio</a>
							<a href="#">Monitores</a>
							<a href="#">Componentes</a>
							<a href="#">Otros</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../img/tecnologia-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../img/tecnologia-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/tecnologia-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/tecnologia-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/tecnologia-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="libros">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Libros</h3>
							<a href="#">Top Sellers</a>
							<a href="#">Ciencia Ficcion</a>
							<a href="#">Fantasia</a>
							<a href="#">Miedo</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../img/libros-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../img/libros-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/libros-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/libros-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/libros-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="ropa-y-accesorios">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Ropa y Accesorios</h3>
							<a href="#">Ropa</a>
							<a href="#">Zapatos</a>
							<a href="#">Accesorios</a>
							<a href="#">Relojes</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../img/ropa-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../img/ropa-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/ropa-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/ropa-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/ropa-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="hogar-y-cocina">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Hogar y Cocina</h3>
							<a href="#">Cocina</a>
							<a href="#">Electrodomesticos</a>
							<a href="#">Limpieza</a>
							<a href="#">Baño</a>
							<a href="#">Decoracion</a>
							<a href="#">Arte</a>
							<a href="#">Manualidades</a>
							<a href="#">Jardin</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../img/hogar-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../img/hogar-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/hogar-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/hogar-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/hogar-galeria-4.png" alt="">
							</a>
						</div>
					</div>

					<div class="subcategoria" data-categoria="juegos-y-juguetes">
						<div class="enlaces-subcategoria">
							<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
							<h3 class="subtitulo">Juegos y Juguetes</h3>
							<a href="#">Juguetes</a>
							<a href="#">Juegos de Mesa</a>
							<a href="#">Aire Libre</a>
							<a href="#">Muñecas</a>
						</div>

						<div class="banner-subcategoria">
							<a href="#">
								<img src="../../img/juegos-banner-1.png" alt="">
							</a>
						</div>

						<div class="galeria-subcategoria">
							<a href="#">
								<img src="../../img/juegos-galeria-1.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/juegos-galeria-2.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/juegos-galeria-3.png" alt="">
							</a>
							<a href="#">
								<img src="../../img/juegos-galeria-4.png" alt="">
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
			<script src="../../js/main.js"></script>
      <div class="">

      </div>
<h1>PUBLICACIONES RECIENTES</h1>

      <?php

      $Id="";
      $Nombre="";
      $Descripcion="";
      $Telefono="";
      $Contenido="";
      $Tipo="";

      require("conexion.php");
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

      <?php
      echo "Id: " . $Id . "<br>";
      echo "Nombre: " . $Nombre . "<br>";
      echo "Caracteristicas: " . $Descripcion . "<br>";
      echo "Numero de contacto: " . $Telefono . "<br>";
      echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
      ?>





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<div class="ofertas">


	</div>
		</article>

	</main>
	<footer>
			<div class="content-footer">
					<div class="contenedor-foo">
							<h4>Contacto</h4>
							<p>+57 3125021065</p>
					</div>
					<div class="contenedor-foo">
							<h4>Email</h4>
							<p>truqueactivo06@gmail.com</p>
					</div>
					<div class="contenedor-foo">
							<h4>Location</h4>
							<p>Une, Cundinamarca Av3 #1-17</p>
					</div>
					<!-- <div class="contenedor-foo">
							<h4>location</h4>
							<p>1234567</p>
					</div> -->
			</div>
			<h2 class="titulo-final">&copy; TRUEQUE | Grup-Trueque-Activo</h2>
	</footer>

	<script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>


</body>
</html>
