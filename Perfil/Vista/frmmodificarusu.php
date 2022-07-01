<?php

include('../../lo/verpag.php');
require_once('../../privado/productos/Modelo/conectar.php');
require_once('../../privado/productos/Modelo/conexion.php');
require_once('../../privado/productos/Modelo/producto.php');

$Id = $_REQUEST ["Id"];

$producto = new ProductoModelo(); //Llama al metodo constructor
$matrizproducto = $producto->get_producto20($Id);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../../css/productos.css">
  <head>
    <meta charset="utf-8">
    <title>Modificar</title>

  </head>
  <body>
    <article class="login">



    <center>
      <h1>MODIFICAR PRODUCTO</h1>
      <form action="../Controlador/modificarprodusu.php" method="post" enctype="multipart/form-data" >
      <input type="text" name="Id" placeholder="Id" value="<?php echo $_REQUEST['Id']  ?>"readonly/>
        <br>
        <input type="text" name="nombre" placeholder="NOMBRE DEL PRODUCTO" value="<?php echo $matrizproducto [0]['Nombre'];?>"required/>
        <br>
        <input class="des" type="text" name="Descripcion" placeholder="CARACTERISTICAS" value="<?php echo $matrizproducto [0]['Descripcion'];?>"required/>
        <br>
        <input type="text" name="Telefono" placeholder="NUMERO DE CONTACTO" value="<?php echo $matrizproducto [0]['Telefono'];?>" required/>
        <br>
        <br>
        
        <h2>CATEGORIA</h2>
        <select name="Categoria" id="Categoria" value="">
          <br>
          <optgroup label="Categoria">
        <option value="Tecnologia y computadoras">Tecnologia y computadoras</option>
        <option value="Libros">Libros</option>
        <option value="Ropa y accesorios">Ropa y accesorios</option>
        <option value="Hogar y cocina">Hogar y cocina</option>
        <option value="Juegos y juguetes">Juegos y juguetes</option>
      </select>
      <br>
      <br>
      <h2>IMAGEN/FOTO</h2>
        <table>
          <tr>
            <td>

        <label for="imagen"></label><br></td><br>
        <td><input type="file" name="imagen" size="20" value=""></td></tr>
        <tr><td colspan="2" style="text-aling:center"><input type="submit" value="Modificar"class="button"></td></tr></table>



      </form>
    </center>
    </article>
  </body>
</html>
