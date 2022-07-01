<?php

include("../../lo/verpag.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../../css/productos.css">
  <head>
    <meta charset="utf-8">
    <title>imagen</title>

  </head>
  <body>
    <article class="login">


    <center>
      <h1>AGREGAR PRODUCTO</h1>
      <form action="datosarchi.php" method="post" enctype="multipart/form-data" >
        <input type="text" name="nombre" placeholder="NOMBRE DEL PRODUCTO" value="" required/>
        <br>
        <input class="des" type="text" name="Descripcion" placeholder="CARACTERISTICAS" value="" required/>
        <br>
        <input type="text" name="Telefono" placeholder="NUMERO DE CONTACTO" value="" required/>
        <br>
        <br>
        <br>
        <h2>CATEGORIA</h2>
        <select name="Categoria" id="Categoria" >
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
        <td><input type="file" name="imagen" size="20"></td></tr>
        <tr><td  colspan="2" style="text-aling:center"><input type="submit" value="SUBIR"class="button"></td></tr></table>

      </form>
      <form action="../index1.php" method="post" enctype="multipart/form-data" >
        <tr><td colspan="2" style="text-aling:center"><input type="submit" value="VOLVER"class="button"></td></tr></table>
        </form>
    </center>
    </article>
  </body>
</html>
