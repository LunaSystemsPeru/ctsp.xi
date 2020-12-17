<?php
require_once 'Conectar.php';


class Asociado
{
    private $idAsociado;
    private $dni;
    private $apellido;
    private $nombre;
    private $ctsp;
    private $centroTrabajo;
    private $fechaNac;
    private $email;
    private $celular;
    private $estado;
    private $password;
    private $ultimoPago;
    private $domicilio;
    private $fechaInscripcion;
    private $fechaCertificado;
    private $fichaInscripcion;
    private $foto;
    private $titulo;
    private $registroSunedu;
    private $tipo_documento;
    private $tipo_registro;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdAsociado()
    {
        return $this->idAsociado;
    }

    public function setIdAsociado($idAsociado)
    {
        $this->idAsociado = $idAsociado;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCtsp()
    {
        return $this->ctsp;
    }

    public function setCtsp($ctsp)
    {
        $this->ctsp = $ctsp;
    }

    public function getCentroTrabajo()
    {
        return $this->centroTrabajo;
    }

    public function setCentroTrabajo($centroTrabajo)
    {
        $this->centroTrabajo = $centroTrabajo;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getUltimoPago()
    {
        return $this->ultimoPago;
    }

    public function setUltimoPago($ultimoPago)
    {
        $this->ultimoPago = $ultimoPago;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }

    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;
    }

    public function getFechaCertificado()
    {
        return $this->fechaCertificado;
    }

    public function setFechaCertificado($fechaCertificado)
    {
        $this->fechaCertificado = $fechaCertificado;
    }

    public function getFichaInscripcion()
    {
        return $this->fichaInscripcion;
    }

    public function setFichaInscripcion($fichaInscripcion)
    {
        $this->fichaInscripcion = $fichaInscripcion;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getRegistroSunedu()
    {
        return $this->registroSunedu;
    }

    public function setRegistroSunedu($registroSunedu)
    {
        $this->registroSunedu = $registroSunedu;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * @param mixed $tipo_documento
     */
    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;
    }

    /**
     * @return mixed
     */
    public function getTipoRegistro()
    {
        return $this->tipo_registro;
    }

    /**
     * @param mixed $tipo_registro
     */
    public function setTipoRegistro($tipo_registro)
    {
        $this->tipo_registro = $tipo_registro;
    }

    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_asociado) +1, 1) as codigo from asociados";
        $this->idAsociado = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into asociados 
                values (
                        '$this->idAsociado', 
                        '$this->dni', 
                        '$this->apellido', 
                        '$this->nombre', 
                        '$this->ctsp', 
                        '$this->centroTrabajo', 
                        '$this->fechaNac', 
                        '$this->email', 
                        '$this->celular', 
                        '$this->estado', 
                        '$this->password', 
                        '$this->ultimoPago', 
                        '$this->domicilio', 
                        '$this->fechaInscripcion', 
                        '$this->fechaCertificado', 
                        '$this->fichaInscripcion', 
                        '$this->foto', 
                        '$this->titulo', 
                        '$this->registroSunedu',
                        '$this->tipo_documento',
                        '$this->tipo_registro'
                )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from asociados 
        where id_asociado = '$this->idAsociado'";
        $resultado = $this->c_conectar->get_Row($sql);
        if ($resultado) {
        $this->dni = $resultado['dni'];
        $this->apellido = $resultado['apellidos'];
        $this->nombre = $resultado['nombres'];
        $this->ctsp = $resultado['ctsp'];
        $this->centroTrabajo = $resultado['centro_trabajo'];
        $this->fechaNac = $resultado['fecha_nac'];
        $this->email = $resultado['email'];
        $this->celular = $resultado['celular'];
        $this->estado = $resultado['estado'];
        $this->password = $resultado['password'];
        $this->ultimoPago = $resultado['ultimo_pago'];
        $this->domicilio = $resultado['domicilio'];
        $this->fechaInscripcion = $resultado['fecha_inscripcion'];
        $this->fechaCertificado = $resultado['fecha_certificado'];
        $this->fichaInscripcion = $resultado['ficha_inscripcion'];
        $this->foto = $resultado['foto'];
        $this->titulo = $resultado['titulo'];
        $this->registroSunedu = $resultado['registro_sunedu'];
        $this->tipo_documento = $resultado['id_tipo_documento'];
        $this->tipo_registro = $resultado['id_tipo_inscripcion'];
        }
    }

    public function validarCTSP()
    {
        $sql = "select id_asociado 
        from asociados 
        where ctsp = '$this->ctsp'";
        $resultado = $this->c_conectar->get_Row($sql);
        if ($resultado) {
            $this->idAsociado = $resultado['id_asociado'];
        }
    }

    public function actualizar()
    {
        $sql = "UPDATE asociados
                SET  registro_sunedu = '$this->registroSunedu' WHERE  id_asociado = '$this->idAsociado' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM asociados
                WHERE  id_asociado = '$this->idAsociado'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verAsociados () {
        $sql = "select a.id_asociado, a.apellidos, a.nombres, a.centro_trabajo, a.fecha_nac, a.fecha_inscripcion, a.ultimo_pago, pdr.nombre as tipo_registro, a.estado, a.email, a.id_tipo_inscripcion
                from asociados as a 
                inner join parametros_detalles as pdd on pdd.id_detalle = a.id_tipo_documento 
                inner join parametros_detalles as pdr on pdr.id_detalle = a.id_tipo_inscripcion 
                where a.estado = '$this->estado'";
        return $this->c_conectar->get_Cursor($sql);
    }

    public function getAsociadosJson ($termino) {
        $sql = "select a.id_asociado, a.apellidos, a.nombres, a.centro_trabajo, a.fecha_nac, a.fecha_inscripcion, a.ultimo_pago, pdr.nombre as tipo_registro, a.estado, a.email, a.id_tipo_inscripcion  
                from asociados as a 
                inner join parametros_detalles as pdd on pdd.id_detalle = a.id_tipo_documento 
                inner join parametros_detalles as pdr on pdr.id_detalle = a.id_tipo_inscripcion 
                where a.estado = '$this->estado' and concat(a.apellidos, ' ', a.nombres) like '%$termino%' ";
        return $this->c_conectar->get_Cursor($sql);
    }

    public function buscarAsociado () {
        $sql = "select a.dni, a.apellidos, a.nombres, a.centro_trabajo, a.fecha_nac, a.fecha_inscripcion, a.ultimo_pago, a.ctsp, pdr.nombre as tipo_registro, a.celular, a.estado, a.email, a.id_tipo_inscripcion
                from asociados as a 
                inner join parametros_detalles as pdd on pdd.id_detalle = a.id_tipo_documento 
                inner join parametros_detalles as pdr on pdr.id_detalle = a.id_tipo_inscripcion 
                where a.apellidos like '%".$this->apellido."%' or a.nombres like '%".$this->nombre."%' or a.ctsp = '".$this->ctsp."'";
                return $this->c_conectar->get_Cursor($sql);
    }

}
