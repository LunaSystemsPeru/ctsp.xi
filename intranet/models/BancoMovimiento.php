<?php
require_once 'Conectar.php';

class BancoMovimiento
{

    private $idMovimiento;
    private $fecha;
    private $ingresa;
    private $sale;
    private $concepto;
    private $idBanco;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdMovimiento()
    {
        return $this->idMovimiento;
    }

    public function setIdMovimiento($idMovimiento)
    {
        $this->idMovimiento = $idMovimiento;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getIngresa()
    {
        return $this->ingresa;
    }

    public function setIngresa($ingresa)
    {
        $this->ingresa = $ingresa;
    }

    public function getSale()
    {
        return $this->sale;
    }

    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    public function getConcepto()
    {
        return $this->concepto;
    }

    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;
    }

    public function getIdBanco()
    {
        return $this->idBanco;
    }

    public function setIdBanco($idBanco)
    {
        $this->idBanco = $idBanco;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_movimiento) +1, 1) as codigo from banco_movimientos";
        $this->idMovimiento = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into banco_movimientos values ('$this->idMovimiento', '$this->fecha', '$this->ingresa', '$this->sale', '$this->concepto', '$this->idBanco')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from banco_movimientos 
        where id_movimiento = '$this->idMovimiento'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->fecha = $resultado['fecha'];
        $this->ingresa = $resultado['ingresa'];
        $this->sale = $resultado['sale'];
        $this->concepto = $resultado['concepto'];
        $this->idBanco = $resultado['id_banco'];
    }

    public function actualizar()
    {
        $sql = "UPDATE banco_movimientos
                SET  id_banco = '$this->idBanco' WHERE  id_movimiento = '$this->idMovimiento' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM banco_movimientos
                WHERE  id_movimiento = '$this->idMovimiento'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verAnios()
    {
        $sql = "select year(fecha) as periodo 
                from banco_movimientos 
                where id_banco = '$this->idBanco'
                group by year(fecha)";
        return $this->c_conectar->get_Cursor($sql);
    }

    public function verPeriodos($year)
    {
        $sql = "select concat(year(fecha), '-', LPAD(month(fecha),2,'00')) as periodo 
                from banco_movimientos
                where year(fecha) = '$year'
                group by month(fecha)";
        return $this->c_conectar->get_Cursor($sql);
    }


    public function obtenerSaldo($fecha)
    {
        $saldo = 0;
        $sql = "select ifnull(sum(ingresa - sale), 0) as saldo 
                from banco_movimientos
                where fecha < '$fecha' and id_banco = '$this->idBanco'";
        $saldo = $this->c_conectar->get_valor_query($sql, "saldo");
        return $saldo;
    }

    public function verFilas($periodo)//$periodo
    {
        $sql = "select bm.fecha, bm.concepto, bm.id_movimiento, bm.ingresa, bm.sale 
                from banco_movimientos as bm 
                where bm.id_banco = '$this->idBanco' and concat(year(bm.fecha),'-',LPAD(month(bm.fecha), 2, '0'))  = '$periodo'
                order by bm.fecha asc";
        //echo $sql;
        return $this->c_conectar->get_Cursor($sql);
    }

    public function obtenerResumenMensual () {
        $sql = 'select month(fecha) as mes, sum(ingresa) as totingreso, sum(sale) as totegreso 
                from banco_movimientos as bm 
                where year(fecha) = year(current_date()) group by month(fecha)';
        return $this->c_conectar->get_json_rows($sql);
    }

}
//'$this->idBanco'