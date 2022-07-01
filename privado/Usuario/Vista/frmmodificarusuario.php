<html>
<head>
  <meta charset="utf-8" />
  <title>Modificar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>


<body>
<form action="../Controlador/Cactualizarusuario.php?id_usuario=<?php echo $matrizusuario[0]['id_usuario']; ?>"  method="post" >
    <center>
      <table width="200" border="1" >

      <div class="mb-3">
        <label for="id_usuario" class="form-label"><b><i>Id</b></i></label>
        <input type="text" name="id_usuario" class="form-control" id="id_usuario" value="<?php echo $_REQUEST['id_usuario']  ?>" readonly />
    </div>
    
    <div class="mb-3">
        <label for="nombre_usuario" class="form-label"><b><i>Nombre del usuario</b></i></label>
        <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" value="<?php echo $matrizusuario [0]['nombre_usuario'];?>" />
    </div>

    <div class="mb-3">
        <label for="apellido" class="form-label"><b><i>Apellido</b></i></label>
        <input type="text" name="apellido" class="form-control" id="apellido" value="<?php echo $matrizusuario [0]['apellido'];?>" />
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label"><b><i>Telefono</b></i></label>
        <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $matrizusuario [0]['telefono'];?>" />
    </div>

    <div class="mb-3">
        <label for="correo" class="form-label"><b><i>Correo</b></i></label>
        <input type="text" name="correo" class="form-control" id="correo" value="<?php echo $matrizusuario [0]['correo'];?>" />
    </div>
        
    <tr>
          <button  class="btn btn-info">Modificar</button>
    </tr>

      </table>
    </center>
  </form>
</body>
</html>
