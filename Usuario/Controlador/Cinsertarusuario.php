<?php
    $nombre_usuario = $_REQUEST['nombre_usuario'];
    $apellido = $_REQUEST['apellido'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    $password = $_REQUEST['password'];

$passencry = password_hash($clave, PASSWORD_DEFAULT, ['cost'=>5]);

require_once("../Modelo/conectar.php");
include("../Modelo/usuario.php");

$usuario = new usuario(); //Llama al metodo constructor
$matrizusuario = $usuario->insertar_usuario($id_usuario, $nombre_usuario, $apellido, $telefono,$correo,$passencry);
header("location:../index.php");

?>
