<?php

require_once 'Conectar.php';

class noticias
{
    private $idnoticias;
    private $fecha;
    private $titulo;
    private $contenido;
    private $imagen;
    private $c_conectar;

    /**
     * noticias constructor.
     */
    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    /**
     * @return mixed
     */
    public function getIdnoticias()
    {
        return $this->idnoticias;
    }

    /**
     * @param mixed $idnoticias
     */
    public function setIdnoticias($idnoticias)
    {
        $this->idnoticias = $idnoticias;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
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
        $sql = "select ifnull(max(idnoticias) +1, 1) as codigo from noticias";
        $this->idnoticias = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into noticias 
                values (
                        '$this->idnoticias', 
                        '$this->fecha', 
                        '$this->titulo', 
                        '$this->contenido', 
                        '$this->imagen' 
                      
                )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from noticias 
        where idnoticias = '$this->idnoticias'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->fecha = $resultado['fecha'];
        $this->titulo = $resultado['titulo'];
        $this->contenido = $resultado['contenido'];
        $this->imagen = $resultado['imagen'];

    }

    public function actualizar()
    {
        $sql = "UPDATE noticias
                SET  titulo= '$this->titulo', contenido=$this->contenido WHERE  idnoticias = '$this->idnoticias' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM noticias
                WHERE  idnoticias = '$this->idnoticias'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verNoticias()
    {
        $sql = "select idnoticias,titulo, fecha  
                from noticias 
                order by fecha desc";
        return $this->c_conectar->get_Cursor($sql);

    }

    public function verNoticiasEncabezado($mes, $anio)
    {
        $sql = "select idnoticias, fecha,titulo, imagen 
                from noticias where year(fecha)=$anio and month(fecha)=$mes ";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);

    }


}