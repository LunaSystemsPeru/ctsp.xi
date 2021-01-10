<?php
require_once 'Conectar.php';

class EventoDetalle
{
    private $id;
    private $idevento;
    private $imagen;
    private $c_conectar;

    /**
     * EventoDetalle constructor.
     */
    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
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
    public function getIdevento()
    {
        return $this->idevento;
    }

    /**
     * @param mixed $idevento
     */
    public function setIdevento($idevento)
    {
        $this->idevento = $idevento;
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
        $sql = "select ifnull(max(ideventos_fotos) +1, 1) as codigo from eventos_fotos";
        $this->id = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into eventos_fotos 
                values (
                        '$this->id', 
                        '$this->imagen', 
                        '$this->idevento'                      
                )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

        public function eliminar()
    {
        $sql = "DELETE FROM eventos_fotos
                WHERE  idevento = '$this->idevento'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verImagenes()
    {
        $sql = "select * from eventos_fotos 
where idevento = '$this->idevento'";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);

    }
}