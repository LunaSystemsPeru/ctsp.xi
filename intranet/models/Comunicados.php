<?php
require_once 'Conectar.php';

class Comunicado
{

    private $idcomunicado;
    private $titulo;
    private $imagen;
    private $fecha;
    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdcomunicado()
    {
        return $this->idcomunicado;
    }

    public function setIdcomunicado($idcomunicado)
    {
        $this->idcomunicado = $idcomunicado;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(idcomunicado) +1, 1) as codigo from comunicados";
        $this->idcomunicado = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into comunicados values ('$this->idcomunicado', '$this->titulo', '$this->imagen', '$this->fecha')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from comunicados 
        where idcomunicado = '$this->idcomunicado'" ;
        $resultado = $this->c_conectar->get_Row($sql);
        $this->titulo = $resultado['titulo'];
        $this->imagen = $resultado['imagen'];
        $this->fecha = $resultado['fecha'];
    }

    public function actualizar()
    {
        $sql = "UPDATE comunicados
                SET  titulo = '$this->titulo' WHERE  idcomunicado = '$this->idcomunicado' " ;
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM comunicados
                WHERE  idcomunicado = '$this->idcomunicado'  " ;
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verComunicados ($limit = 20) {
        $sql = "select idcomunicado, fecha,titulo, imagen 
                from comunicados 
                order by fecha desc 
                limit $limit";
        return $this->c_conectar->get_Cursor($sql);
    }

}
