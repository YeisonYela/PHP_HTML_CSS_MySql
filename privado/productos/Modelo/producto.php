<?php

class ProductoModelo 
{
    protected $conexion_db; // almacenar conexión a la bd
    private $producto; // almacenar los proveedor
    public function __construct()
    {
        $this->conexion_db = Conectar::conexion();
        $this->producto = array();
    }

    public function get_producto()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
    public function get_producto_perfil($correo)
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE  correo = 
        '$correo' ");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
        
    public function get_producto1()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE CATEGORIA = 'Libros'
        AND Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
    
    public function get_producto2()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE CATEGORIA = 'Ropa y accesorios'
        AND Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }

    public function get_producto3()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE CATEGORIA = 'Hogar y cocina' 
        AND Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }

    public function get_producto4()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE CATEGORIA = 'Juegos y juguetes'
        AND Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }

    public function get_producto5()
    {
      

if(!isset($_POST["search"])){

    $_POST["search"] = "";

    $buscar = $_POST["search"];
}
$buscar = $_POST["search"];

        $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE CATEGORIA = 'Tecnologia y computadoras'
        AND Nombre LIKE '%".$buscar."%'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }


public function get_producto20($Id)
   {
       $consulta = $this->conexion_db->query("SELECT * FROM producto WHERE Id = '$Id'");
       while ($filas = $consulta->fetch_assoc()) 
        {
           $this->producto[] = $filas;
          }
       $this->conexion_db->close();
       return $this->producto;
   }

}
 ?>