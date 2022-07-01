<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="../css/estilos1.css">

<?php
session_start();
$correo = $_SESSION["correo"];

  require_once('Modelo/conectar.php');
  require_once('Modelo/usuario.php');
  $usuario = new usuario(); //Llama al metodo constructor
  $matrizusuario = $usuario->get_usuario($correo);

?>

    <article class="login">
    <b><i><h2>Informacion Personal</h2><i><b>
    <?php
    foreach($matrizusuario as $fila){ 
    ?>
    <label for="nombre_usuario" ><b><i>Nombre del usuario</b></i></label>
    <input type="text"  value="<?php echo $fila["nombre_usuario"]?>"readonly/> <br>
    <label for="apellido"> <b><i>Apellido</b></i></label>
    <input type="text"  value="<?php echo $fila["apellido"]?>"readonly/> <br>
    <label for="telefono" ><b><i>Telefono</b></i></label>
    <input type="text"  value="<?php echo $fila["telefono"]?>"readonly/> <br>
    <label for="correo"><b><i>Correo</b></i></label>
    <input type="text"  value="<?php echo $fila["correo"]?>"readonly/> <br>
    <label for="password"><b><i>contraseña</b></i></label>
    <input type="text"  value="<?php echo $fila["password"]?>"readonly/> <br>
   
   <!-- <td> <?php echo $fila["password"]?></td> <br> -->
    
 <center>
  <form action ="Controlador/Cmodificarusuario.php?correo=<?php echo $fila["correo"];?>" method = "post">
  <button type = "submit" class = "btn btn-success"> Editar </button> <?php $fila["correo"];?> 
  <?php
 }
 ?>
<a href="../privado/index1.php" button type="button" button style="margin:5px" class="btn btn-success">Volver</button></a><br>
</center>

 <!-- <td><a href="Vista/frmmodicarcontraseña.php"> 
 Cambiar contraseña</a> <STYLE>A {text-decoration: none;} </STYLE>  -->

    </form>
      </article>
  </body>
</html>