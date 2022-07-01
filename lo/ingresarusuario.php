<?php

// incluimos la conexion
include("conexion.php");
include("conectar.php");
include("roles.php");
// colocamos los campos del formulario en variables

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$password=$_POST["password"];

$passencry = password_hash($password, PASSWORD_DEFAULT, ["cost"=>5]);

$usuario = new UsuarioModelo(); //Llama al metodo constructor
$matrizusuario = $usuario->insertar_usuario($nombre,$apellido,$telefono,$correo,$passencry);

echo "<script>alert('Usuario registrado');window.location='login.php';</script>";
?>
