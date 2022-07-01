<?php
require_once("conexion.php");
$correo = $_POST["correo"];
$password = $_POST["password"];
$numusu = 0;

$consulta ="SELECT * FROM usuario WHERE correo = '$correo'";
$resultado = $conexion -> query($consulta);

while ($fila = $resultado->fetch_assoc()) {
  
    if(password_verify($password, $fila['password']))
          {
            //var_dump ($fila); exit();
            
            session_start();
             @$_SESSION["correo"] = $fila["correo"];
  
             switch ($fila["nivel"]) {
              case '1':
                header("location:../privado/index1.php"); exit();
                break;
              case '2':
                header("location:../privado/index2.php"); exit();
                break;
              default:
                echo "hay un error"; exit();
                break;
            }
          }           
        }   
      echo "<script>alert('Usuario o contraseña incorrecta');window.location='../lo/login.php';</script>";
  ?>
