<!DOCTYPE html>
  <html lang="en" dir="ltr">
  <link rel="stylesheet" href="../../css/estilos1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <form action="../Controlador/Cactualizarusuario.php?correo=<?php echo $matrizusuario[0]['correo']; ?>"  method="post" >
</head>
  <body>
    <article class="login">
    <b><i><h2>Informacion Personal</h2><i><b>
    
    <label for="nombre_usuario" ><b><i>Nombre del usuario</b></i></label>
        <input type="text" name="nombre_usuario"  id="nombre_usuario" value="<?php echo $matrizusuario [0]['nombre_usuario'];?>" />
    <br>
    <label for="apellido"> <b><i>Apellido</b></i></label>
        <input type="text" name="apellido"  id="apellido" value="<?php echo $matrizusuario [0]['apellido'];?>" />
    <br>
    <label for="telefono" ><b><i>Telefono</b></i></label>
        <input type="text" name="telefono"  id="telefono" value="<?php echo $matrizusuario [0]['telefono'];?>" />
    <br>
    <label for="correo"><b><i>Correo</b></i></label>
        <input type="text" name="correo"  id="correo" value="<?php echo $matrizusuario [0]['correo'];?>" readonly />
    <br>
      <center>  
    <a href="../index.php" button type="button" button style="margin: 10px" class="btn btn-info">Volver</button></a>
    <button  class="btn btn-info">Guardar</button>
      </center>  
          
        </form>
      </article>
  </body>
</html>