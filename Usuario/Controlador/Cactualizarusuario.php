<?php 
    $id_usuario = $_REQUEST['id_usuario'];
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $apellido = $_REQUEST['apellido'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    

  require_once('../Modelo/conectar.php');
  include('../Modelo/usuario.php');
  $usuario = new usuario(); //Llama al metodo constructor
  $resultado = $usuario->modificar_usuario($id_usuario, $nombre_usuario, $apellido, $telefono, $correo);
  header("location:../index.php");
  ?>
