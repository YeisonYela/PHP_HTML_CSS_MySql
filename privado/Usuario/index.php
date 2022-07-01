<?php
include("../../lo/verpag.php");
 ?>
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

    <div class="table-responsive">
    <table class="table table-dark table-striped">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Nivel</th>
        <th>Modificar</th>
        <th>Eliminar</th>
    </tr>
    <tr>
    <?php
 foreach($matrizusuario as $fila){
 ?>
 </tr>
 <td height="30"> <?php echo $fila["correo"]?></td>
 <td> <?php echo $fila["nombre_usuario"]?></td>
 <td> <?php echo $fila["apellido"]?></td>
 <td> <?php echo $fila["telefono"]?></td>
 <td> <?php echo $fila["correo"]?></td>
 <td> <?php echo $fila["nivel"]?></td>

 <form action ="Controlador/Cmodificarusuario.php?correo=<?php
 echo $fila["correo"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-success"> Modificar </button>
 <?php $fila["correo"];?>
 </form>

 <form action ="Controlador/Celiminarusuario.php?correo=<?php
 echo $fila["correo"];?>" method = "post">
 <td><button type = "submit" class = "btn btn-danger"> Eliminar </button>
 <?php $fila["correo"];?>

 </form>

 <?php
 }
 ?>
 </table>
    </div>
