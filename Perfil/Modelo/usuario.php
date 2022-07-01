<?php

class usuario
{
    protected $conexion_db; // almacenar conexión a la bd
    private $usuario; // almacenar los proveedor
    public function __construct()
    {
        $this->conexion_db = Conectar::conexion();
        $this->usuario = array();
    }

    public function get_usuario($correo)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM usuario WHERE correo ='$correo'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
    public function get_usuario1($correo)
   {
       $consulta = $this->conexion_db->query("SELECT * FROM usuario WHERE correo = '$correo'");
       while ($filas = $consulta->fetch_assoc()) {
           $this->usuario[] = $filas;
}
       $this->conexion_db->close();
       return $this->usuario;
   }

    public function modificar_usuario($nombre_usuario, $apellido, $telefono, $correo)
    {
        $resultado = $this->conexion_db->query("UPDATE usuario set nombre_usuario = '$nombre_usuario', apellido = '$apellido', telefono = '$telefono', correo = '$correo' where correo = '$correo' ");
        
        $this->conexion_db->close();
        return $resultado;
    }
}
 ?>