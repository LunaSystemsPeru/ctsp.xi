<?php
require_once 'Conectar.php';

class Evento
{
    private $id;
    private $anio;
    private $video;
    private $programa;
    private $id_tipo_evento;
    private $c_conectar;

    /**
     * Evento constructor.
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
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * @param mixed $anio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * @param mixed $programa
     */
    public function setPrograma($programa)
    {
        $this->programa = $programa;
    }

    /**
     * @return mixed
     */
    public function getIdTipoEvento()
    {
        return $this->id_tipo_evento;
    }

    /**
     * @param mixed $id_tipo_evento
     */
    public function setIdTipoEvento($id_tipo_evento)
    {
        $this->id_tipo_evento = $id_tipo_evento;
    }

    public function generarCodigo()
    {
        $sql = "select ifnull(max(idevento) +1, 1) as codigo from eventos";
        $this->id = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function obtenerDatos()
    {
        $sql = "select * from eventos 
        where idevento = '$this->id'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->anio = $resultado['anio'];
        $this->id_tipo_evento = $resultado['id_tipo_evento'];
        $this->programa = $resultado['programapdf'];
        $this->video = $resultado['video'];

    }

    public function obtenerDatosporTipo()
    {
        $sql = "select idevento from eventos 
        where id_tipo_evento = '$this->id_tipo_evento' and anio = '$this->anio' ";
        $resultado = $this->c_conectar->get_Row($sql);
        if ($resultado) {
            $this->id = $resultado['idevento'];
        }

    }

    public function insertar()
    {
        $sql = "insert into eventos     
                values (
                        '$this->id', 
                        '$this->anio', 
                        '$this->video',
                        '$this->programa',
                        '$this->id_tipo_evento'
                )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM eventos
                WHERE  idevento = '$this->id'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verEventos()
    {
        $sql = "select * from eventos 
                where anio = '$this->anio'";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);

    }

    public function verEventosegunAnioTipo()
    {
        $sql = "select * from eventos 
                where anio = '$this->anio' and id_tipo_evento = '$this->id_tipo_evento'";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);

    }

}