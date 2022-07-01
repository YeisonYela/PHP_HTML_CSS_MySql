<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/gestion.css">
	<title>Menu de Navegacion Trueque Activo </title>

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
    <a href="../privado/productos/productos.php">Agrergar_Producto</a>
    <a href="../../privado/queja.php">queja</a>
    <a href="../index1.php">volver</a>
    <a href="../../lo/cerrar.php">Salir</a>
  </div>

</header>

<article id
="contenedor">
    <div class="caja"><?php

    $Id="";
    $Nombre="";
    $Descripcion="";
    $Telefono="";
    $correo="";
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
    $correo=$fila['correo'];
    $Tipo=$fila['Tipo'];
    }


    ?>

    <?php
    echo "Id: " . $Id . "<br>";
    echo "Nombre: " . $Nombre . "<br>";
    echo "Caracteristicas: " . $Descripcion . "<br>";
    echo "Numero de contacto: " . $Telefono . "<br>";
    echo "correo: " . $correo . "<br>";
    echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
    ?>

</div>








    <div class="caja"><?php

    $Id="";
    $Nombre="";
    $Descripcion="";
    $Telefono="";
    $correo= "";
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

    $consulta="SELECT * FROM PRODUCTO WHERE ID=17";

    $resultado=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultado)){

    $Id=$fila['Id'];
    $Contenido=$fila['Contenido'];
    $Nombre=$fila['Nombre'];
    $Descripcion=$fila['Descripcion'];
    $Telefono=$fila['Telefono'];
    $correo=$fila['correo'];
    $Tipo=$fila['Tipo'];
    }


    ?>

    <?php
    echo "Id: " . $Id . "<br>";
    echo "Nombre: " . $Nombre . "<br>";
    echo "Caracteristicas: " . $Descripcion . "<br>";
    echo "Numero de contacto: " . $Telefono . "<br>";
    echo "correo: " . $correo . "<br>";
    echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
    ?>

</div>








    <div class="caja"><?php

    $Id="";
    $Nombre="";
    $Descripcion="";
    $Telefono="";
    $correo="";
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

    $consulta="SELECT * FROM PRODUCTO WHERE ID=18";

    $resultado=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultado)){

    $Id=$fila['Id'];
    $Contenido=$fila['Contenido'];
    $Nombre=$fila['Nombre'];
    $Descripcion=$fila['Descripcion'];
    $Telefono=$fila['Telefono'];
    $correo=$fila['correo'];
    $Tipo=$fila['Tipo'];
    }


    ?>

    <?php
    echo "Id: " . $Id . "<br>";
    echo "Nombre: " . $Nombre . "<br>";
    echo "Caracteristicas: " . $Descripcion . "<br>";
    echo "Numero de contacto: " . $Telefono . "<br>";
    echo "correo: " . $correo . "<br>";
    echo "<img src='data:image/png; base64, " . base64_encode($Contenido) .   "'>"  ;
    ?>
</div>







    <div class="caja"><?php

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

    $consulta="SELECT * FROM PRODUCTO WHERE ID=19";

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
</div>









    <div class="caja"><?php

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

    $consulta="SELECT * FROM PRODUCTO WHERE ID=20";

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
</div>









    <div class="caja"><?php

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

    $consulta="SELECT * FROM PRODUCTO WHERE ID=21";

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
</div>









    <div class="caja">
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
      $consulta="SELECT * FROM PRODUCTO WHERE ID=22";

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
      ?></div>









    <div class="caja"><?php
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
    $consulta="SELECT * FROM PRODUCTO WHERE ID=23";

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
    ?></div>







    <div class="caja"><?php
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
    $consulta="SELECT * FROM PRODUCTO WHERE ID=24";

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
    ?></div>







    <div class="clearfix"></div>
</article>

<footer>

<p>   <div class="content-footer">
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
  </div></p>

</footer>
