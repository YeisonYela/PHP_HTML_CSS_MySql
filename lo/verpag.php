<?php
session_start();
$usuarioreg = $_SESSION["correo"];
if (!isset($usuarioreg)){
session_unset();
session_destroy();
header("location:../HTML/index.html");
}
?>
