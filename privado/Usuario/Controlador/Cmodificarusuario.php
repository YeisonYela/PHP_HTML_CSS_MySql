<?php
    $id_usuario = $_REQUEST ["id_usuario"];

    require_once("../Modelo/conectar.php");
    include("../Modelo/usuario.php");

    $usuario = new usuario(); //constructor
    $matrizusuario = $usuario->get_usuario1($id_usuario);  
    //var_dump($matrizusuario);
    //exit();
    include("../Vista/frmmodificarusuario.php");
?>