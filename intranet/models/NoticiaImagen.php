<?php
require_once 'Conectar.php';

class NoticiaImagen
{
    private $idnoticia;
    private $id;
    private $imagen;
    private $c_conectar;

    /**
     * NoticiaImagen constructor.
     */
    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    /**
     * @return mixed
     */
    public function getIdnoticia()
    {
        return $this->idnoticia;
    }

    /**
     * @param mixed $idnoticia
     */
    public function setIdnoticia($idnoticia)
    {
        $this->idnoticia = $idnoticia;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
        $sql = "select ifnull(max(id_imagenes) +1, 1) as codigo from noticias_imagenes";
        $this->id = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into noticias_imagenes 
                values (
                        '$this->id', 
                        '$this->idnoticia', 
                        '$this->imagen'
                )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function EliminarFoto()
    {
        $sql = "delete from noticias_imagenes where id_imagenes = '$this->id'";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminarTodo ()
    {
        $sql = "DELETE FROM noticias_imagenes
                WHERE  idnoticias = '$this->idnoticia'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verImagenes ()
    {
        $sql = "select *  
                from noticias_imagenes where idnoticias = '$this->idnoticia' ";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);

    }
}