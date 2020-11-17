<?php


require_once 'Conectar.php';


class ArchivosInterno
{

    private $idArchivo;
    private $nombre;
    private $file;
    private $idUsuario;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdArchivo()
    {
        return $this->idArchivo;
    }

    public function setIdArchivo($idArchivo)
    {
        $this->idArchivo = $idArchivo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_archivo) +1, 1) as codigo from archivos_internos";
        $this->idArchivo = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into archivos_internos values ('$this->idArchivo', '$this->nombre', '$this->file', '$this->idUsuario')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from archivos_internos 
        where id_archivo = '$this->idArchivo'" ;
        $resultado = $this->c_conectar->get_Row($sql);
         $this->nombre = $resultado['nombre'];
        $this->file = $resultado['file'];
        $this->idUsuario = $resultado['id_usuario'];
    }

    public function actualizar()
    {
        $sql = "UPDATE archivos_internos
                SET  id_usuario = '$this->idUsuario' WHERE  id_archivo = '$this->idArchivo' " ;
         return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM archivos_internos
                WHERE  id_archivo = '$this->idArchivo'  " ; 
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
