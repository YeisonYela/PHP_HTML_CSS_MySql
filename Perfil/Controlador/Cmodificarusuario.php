<?php
    $correo = $_REQUEST ["correo"];

    require_once("../Modelo/conectar.php");
    include("../Modelo/usuario.php");

    $usuario = new usuario(); //constructor
    $matrizusuario = $usuario->get_usuario1($correo);  
    //var_dump($matrizusuario);
    //exit();
    include("../Vista/frmmodificarusuario.php");
?>