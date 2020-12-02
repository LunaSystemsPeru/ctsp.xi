<?php
require_once 'Conectar.php';

class Curso
{
    private $idCurso;
    private $nombre;
    private $profesor;
    private $monto;
    private $fecha;
    private $estado;
    private $idModalidad;
    private $lugar;
    private $idUsuario;
    private $imagen;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getProfesor()
    {
        return $this->profesor;
    }

    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getIdModalidad()
    {
        return $this->idModalidad;
    }

    public function setIdModalidad($idModalidad)
    {
        $this->idModalidad = $idModalidad;
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_curso) +1, 1) as codigo from cursos";
        $this->idCurso = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into cursos values (
                           '$this->idCurso', 
                           '$this->nombre', 
                           '$this->profesor', 
                           '$this->monto', 
                           '$this->fecha', 
                           '$this->estado', 
                           '$this->idModalidad', 
                           '$this->lugar', 
                           '$this->idUsuario', 
                           '$this->imagen'
                           )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from cursos 
        where id_curso = '$this->idCurso'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->nombre = $resultado['nombre'];
        $this->profesor = $resultado['profesor'];
        $this->monto = $resultado['monto'];
        $this->fecha = $resultado['fecha'];
        $this->estado = $resultado['estado'];
        $this->idModalidad = $resultado['id_modalidad'];
        $this->lugar = $resultado['lugar'];
        $this->idUsuario = $resultado['id_usuario'];
        $this->imagen = $resultado['imagen'];
    }

    public function actualizar()
    {
        $sql = "UPDATE cursos
                SET  id_usuario = '$this->idUsuario' WHERE  id_curso = '$this->idCurso' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM cursos
                WHERE  id_curso = '$this->idCurso'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verFilas () {
        $sql = "select id_curso, nombre, profesor, monto, fecha, estado 
                from cursos ";
        return $this->c_conectar->get_Cursor($sql);
    }

}
