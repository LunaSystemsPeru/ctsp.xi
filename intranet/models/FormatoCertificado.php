<?php


require_once 'Conectar.php';


class FormatoCertificado
{

    private $idFormato;
    private $titulo;
    private $contenido;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdFormato()
    {
        return $this->idFormato;
    }

    public function setIdFormato($idFormato)
    {
        $this->idFormato = $idFormato;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_formato) +1, 1) as codigo from formato_certificados";
        $this->idFormato = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into formato_certificados values ('$this->idFormato', '$this->titulo', '$this->contenido')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from formato_certificados 
        where id_formato = '$this->idFormato'" ;
        $resultado = $this->c_conectar->get_Row($sql);
         $this->titulo = $resultado['titulo'];
        $this->contenido = $resultado['contenido'];
    }

    public function actualizar()
    {
        $sql = "UPDATE formato_certificados
                SET  contenido = '$this->contenido' WHERE  id_formato = '$this->idFormato' " ;
         return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM formato_certificados
                WHERE  id_formato = '$this->idFormato'  " ; 
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
