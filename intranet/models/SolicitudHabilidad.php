<?php


require_once 'Conectar.php';


class SolicitudHabilidad
{

    private $idSolicitud;
    private $idAsociado;
    private $fechaSolicitud;
    private $fechaUltimoPago;
    private $pago;
    private $estado;
    private $voucher;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }

    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;
    }

    public function getIdAsociado()
    {
        return $this->idAsociado;
    }

    public function setIdAsociado($idAsociado)
    {
        $this->idAsociado = $idAsociado;
    }

    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;
    }

    public function getFechaUltimoPago()
    {
        return $this->fechaUltimoPago;
    }

    public function setFechaUltimoPago($fechaUltimoPago)
    {
        $this->fechaUltimoPago = $fechaUltimoPago;
    }

    public function getPago()
    {
        return $this->pago;
    }

    public function setPago($pago)
    {
        $this->pago = $pago;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getVoucher()
    {
        return $this->voucher;
    }

    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_solicitud) +1, 1) as codigo from solicitud_habilidad";
        $this->idSolicitud = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into solicitud_habilidad values ('$this->idSolicitud', '$this->idAsociado', '$this->fechaSolicitud', '$this->fechaUltimoPago', '$this->pago', '$this->estado', '$this->voucher')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from solicitud_habilidad 
        where id_solicitud = '$this->idSolicitud'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->idAsociado = $resultado['id_asociado'];
        $this->fechaSolicitud = $resultado['fecha_solicitud'];
        $this->fechaUltimoPago = $resultado['fecha_ultimo_pago'];
        $this->pago = $resultado['pago'];
        $this->estado = $resultado['estado'];
        $this->voucher = $resultado['voucher'];
    }

    public function actualizar()
    {
        $sql = "UPDATE solicitud_habilidad
                SET  voucher = '$this->voucher' WHERE  id_solicitud = '$this->idSolicitud' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM solicitud_habilidad
                WHERE  id_solicitud = '$this->idSolicitud'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
