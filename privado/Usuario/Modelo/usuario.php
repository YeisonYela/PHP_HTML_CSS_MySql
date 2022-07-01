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
    public function get_usuario1($id_usuario)
   {
       $consulta = $this->conexion_db->query("SELECT * FROM usuario WHERE id_usuario = '$id_usuario'");
       while ($filas = $consulta->fetch_assoc()) {
           $this->usuario[] = $filas;
}
       $this->conexion_db->close();
       return $this->usuario;
   }
    public function insertar_usuario($id_usuario, $nombre_usuario, $apellido, $telefono, $correo, $password)
    {
        $resultado = $this->conexion_db->query("INSERT INTO usuario (id_usuario, nombre_usuario, apellido, telefono, correo, password) 
        VALUES ('$id_usuario', '$nombre_usuario', '$apellido', '$telefono', '$correo', '$password')");
        
        $this->conexion_db->close();
        return $resultado;
    }
    public function eliminar_usuario($id_usuario)
    {
        $resultado = $this->conexion_db->query("DELETE FROM usuario WHERE id_usuario = '$id_usuario'");
        
        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_usuario($id_usuario, $nombre_usuario, $apellido, $telefono, $correo)
    {
        $resultado = $this->conexion_db->query("UPDATE usuario set nombre_usuario = '$nombre_usuario', apellido = '$apellido', telefono = '$telefono', correo = '$correo' where id_usuario = '$id_usuario' ");
        
        $this->conexion_db->close();
        return $resultado;
    }
}
 ?>