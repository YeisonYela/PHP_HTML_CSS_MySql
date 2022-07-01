<?php
    $id_usuario = $_REQUEST ["id_usuario"];
    echo $id_usuario;

    include("../Modelo/conectar.php");
    include("../Modelo/usuario.php");

    $usuario = new usuario(); //constructor
    $matrizusuario = $usuario->eliminar_usuario($id_usuario);
    echo $matrizusuario;

    header("location:../index.php");
?>