<?php

class UsuarioModelo
{
    protected $conexion_db; // almacenar conexión a la bd
    private $usuario; // almacenar los proveedor
    public function __construct()
    {
        $this->conexion_db = Conectar::conexion();
        $this->logueo = array();
    }

    public function get_usuario()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM usuario");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
    public function get_usuario1($usuario)
   {
       $consulta = $this->conexion_db->query("SELECT * FROM usuario WHERE usuario = '$usuario'");
       while ($filas = $consulta->fetch_assoc()) {
           $this->usuario[] = $filas;
}
       $this->conexion_db->close();
       return $this->usuario;
   }
   public function insertar_usuario($nombre,$apellido,$telefono,$correo,$passencry)
   {
    $resultado = $this->conexion_db->query("INSERT INTO usuario (nombre_usuario,apellido,telefono,correo,
     password ,nivel ) VALUES ('$nombre','$apellido','$telefono','$correo','$passencry','1' )");
       $this->conexion_db->close(); 
       return $resultado;
   }
    public function eliminar_usuario($usuarios)
    {
        $resultado = $this->conexion_db->query("DELETE FROM usuario WHERE usuario = '$usuarios'");
        
        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_usuario($usuarios, $nivel)
    {
        $resultado = $this->conexion_db->query("UPDATE usuario set usuario = 
        '$usuarios', nivel = '$nivel'
        WHERE usuario = '$usuarios'");
        
        $this->conexion_db->close();
        return $resultado;
    }
    public function get_usuario2($id)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM usuario WHERE id = '$id'");
        while ($filas = $consulta->fetch_assoc()) 
        {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
}
 ?>