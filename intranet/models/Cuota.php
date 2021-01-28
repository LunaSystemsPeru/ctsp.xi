<?php


require_once 'Conectar.php';


class Cuota
{

    private $idCuota;
    private $idAsociado;
    private $fecha;
    private $monto;
    private $nota;
    private $imgdeposito;
    private $idMovimiento;
    private $nrocuotas;
    private $periodo_inicial;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdCuota()
    {
        return $this->idCuota;
    }

    public function setIdCuota($idCuota)
    {
        $this->idCuota = $idCuota;
    }

    public function getIdAsociado()
    {
        return $this->idAsociado;
    }

    public function setIdAsociado($idAsociado)
    {
        $this->idAsociado = $idAsociado;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function getImgdeposito()
    {
        return $this->imgdeposito;
    }

    public function setImgdeposito($imgdeposito)
    {
        $this->imgdeposito = $imgdeposito;
    }

    public function getIdMovimiento()
    {
        return $this->idMovimiento;
    }

    public function setIdMovimiento($idMovimiento)
    {
        $this->idMovimiento = $idMovimiento;
    }

    /**
     * @return mixed
     */
    public function getNrocuotas()
    {
        return $this->nrocuotas;
    }

    /**
     * @param mixed $nrocuotas
     */
    public function setNrocuotas($nrocuotas)
    {
        $this->nrocuotas = $nrocuotas;
    }

    /**
     * @return mixed
     */
    public function getPeriodoInicial()
    {
        return $this->periodo_inicial;
    }

    /**
     * @param mixed $periodo_inicial
     */
    public function setPeriodoInicial($periodo_inicial)
    {
        $this->periodo_inicial = $periodo_inicial;
    }

    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_cuota) +1, 1) as codigo from cuotas";
        $this->idCuota = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into cuotas values ('$this->idCuota', '$this->idAsociado', '$this->fecha', '$this->monto', '$this->nota', '$this->imgdeposito', '$this->idMovimiento', '$this->nrocuotas', '$this->periodo_inicial')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from cuotas 
        where id_cuota = '$this->idCuota'" ;
        $resultado = $this->c_conectar->get_Row($sql);
         $this->idAsociado = $resultado['id_asociado'];
        $this->fecha = $resultado['fecha'];
        $this->monto = $resultado['monto'];
        $this->nota = $resultado['nota'];
        $this->imgdeposito = $resultado['imgdeposito'];
        $this->idMovimiento = $resultado['id_movimiento'];
        $this->nrocuotas = $resultado['nrocuotas'];
        $this->periodo_inicial = $resultado['periodo_inicio'];
    }

    public function actualizar()
    {
        $sql = "UPDATE cuotas
                SET  periodo = '$this->periodo' WHERE  id_cuota = '$this->idCuota' " ;
         return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM cuotas
                WHERE  id_cuota = '$this->idCuota'  " ; 
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verPagos()
    {
        $sql = "select fecha, monto, nrocuotas, periodo_inicio, date_add(periodo_inicio, interval nrocuotas month) as pagado 
                from cuotas 
                where id_asociado = '$this->idAsociado' 
                order by fecha asc";
        return $this->c_conectar->get_Cursor($sql);
    }

}
