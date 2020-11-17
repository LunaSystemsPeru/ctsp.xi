<?php


require_once 'Conectar.php';


class BolsaLaboral
{

    private $idTrabajo;
    private $empresa;
    private $descripcion;
    private $puesto;
    private $sueldo;
    private $jornadal;
    private $sedeTrabajo;
    private $estado;
    private $fechaPublicacion;
    private $idUsuario;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdTrabajo()
    {
        return $this->idTrabajo;
    }

    public function setIdTrabajo($idTrabajo)
    {
        $this->idTrabajo = $idTrabajo;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPuesto()
    {
        return $this->puesto;
    }

    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getJornadal()
    {
        return $this->jornadal;
    }

    public function setJornadal($jornadal)
    {
        $this->jornadal = $jornadal;
    }

    public function getSedeTrabajo()
    {
        return $this->sedeTrabajo;
    }

    public function setSedeTrabajo($sedeTrabajo)
    {
        $this->sedeTrabajo = $sedeTrabajo;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_trabajo) +1, 1) as codigo from bolsa_laboral";
        $this->idTrabajo = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into bolsa_laboral values ('$this->idTrabajo', '$this->empresa', '$this->descripcion', '$this->puesto', '$this->sueldo', '$this->jornadal', '$this->sedeTrabajo', '$this->estado', '$this->fechaPublicacion', '$this->idUsuario')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from bolsa_laboral 
        where id_trabajo = '$this->idTrabajo'" ;
        $resultado = $this->c_conectar->get_Row($sql);
         $this->empresa = $resultado['empresa'];
        $this->descripcion = $resultado['descripcion'];
        $this->puesto = $resultado['puesto'];
        $this->sueldo = $resultado['sueldo'];
        $this->jornadal = $resultado['jornadal'];
        $this->sedeTrabajo = $resultado['sede_trabajo'];
        $this->estado = $resultado['estado'];
        $this->fechaPublicacion = $resultado['fecha_publicacion'];
        $this->idUsuario = $resultado['id_usuario'];
    }

    public function actualizar()
    {
        $sql = "UPDATE bolsa_laboral
                SET  id_usuario = '$this->idUsuario' WHERE  id_trabajo = '$this->idTrabajo' " ;
         return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM bolsa_laboral
                WHERE  id_trabajo = '$this->idTrabajo'  " ; 
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
