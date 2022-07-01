<title>Usuario</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
  require_once('Modelo/conectar.php');
  require_once('Modelo/usuario.php');
  $usuario = new usuario(); //Llama al metodo constructor
  $matrizusuario = $usuario->get_usuario();

?>
<center>
<h1>Listado Usuario</h1>
</center>
    <br>
    <form action ="Vista/nuevousuario.php">
    <button  type="submit"  height="200" class="btn btn-primary">Nuevo usuario</button>
    </form>
   
    <div class="table-responsive">
    <table class="table table-dark table-striped">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    <tr>
    <?php
 foreach($matrizusuario as $fila){ 
 ?>
 </tr>
 <td height="30"> <?php echo $fila["id_usuario"]?></td>
 <td> <?php echo $fila["nombre_usuario"]?></td>
 <td> <?php echo $fila["apellido"]?></td>
 <td> <?php echo $fila["telefono"]?></td>
 <td> <?php echo $fila["correo"]?></td>
 <td> <?php echo $fila["password"]?></td>

 <form action ="Controlador/Cmodificarusuario.php?id_usuario=<?php 
 echo $fila["id_usuario"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-success"> Modificar </button>
 <?php $fila["id_usuario"];?>
 </form>

 <form action ="Controlador/Celiminarusuario.php?id_usuario=<?php 
 echo $fila["id_usuario"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-danger"> Eliminar </button>
 <?php $fila["id_usuario"];?>
 
 </form>

 <?php
 }
 ?>
 </table>
    </div>
