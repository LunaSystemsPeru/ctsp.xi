<?php
require_once 'Conectar.php';

class ParametrosDetalle
{

    private $idDetalle;
    private $nombre;
    private $valor;
    private $idParametro;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdDetalle()
    {
        return $this->idDetalle;
    }

    public function setIdDetalle($idDetalle)
    {
        $this->idDetalle = $idDetalle;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getIdParametro()
    {
        return $this->idParametro;
    }

    public function setIdParametro($idParametro)
    {
        $this->idParametro = $idParametro;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_detalle) +1, 1) as codigo from parametros_detalles";
        $this->idDetalle = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into parametros_detalles values ('$this->idDetalle', '$this->nombre', '$this->valor', '$this->idParametro')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from parametros_detalles 
        where id_detalle = '$this->idDetalle'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->nombre = $resultado['nombre'];
        $this->valor = $resultado['valor'];
        $this->idParametro = $resultado['id_parametro'];
    }

    public function actualizar()
    {
        $sql = "UPDATE parametros_detalles
                SET  id_parametro = '$this->idParametro' WHERE  id_detalle = '$this->idDetalle' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM parametros_detalles
                WHERE  id_detalle = '$this->idDetalle'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verFilas()
    {
        $sql = "select * from parametros_detalles
                where id_parametro = '$this->idParametro'";
        return $this->c_conectar->get_Cursor($sql);
    }

}
