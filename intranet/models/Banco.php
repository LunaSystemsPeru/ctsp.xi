<?php


require_once 'Conectar.php';


class Banco
{

    private $idBanco;
    private $nombre;
    private $monto;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdBanco()
    {
        return $this->idBanco;
    }

    public function setIdBanco($idBanco)
    {
        $this->idBanco = $idBanco;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto)
    {
        $this->monto = $monto;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_banco) +1, 1) as codigo from bancos";
        $this->idBanco = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into bancos values ('$this->idBanco', '$this->nombre', '$this->monto')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from bancos 
        where id_banco = '$this->idBanco'" ;
        $resultado = $this->c_conectar->get_Row($sql);
         $this->nombre = $resultado['nombre'];
        $this->monto = $resultado['monto'];
    }

    public function actualizar()
    {
        $sql = "UPDATE bancos
                SET  monto = '$this->monto' WHERE  id_banco = '$this->idBanco' " ;
         return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM bancos
                WHERE  id_banco = '$this->idBanco'  " ; 
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
