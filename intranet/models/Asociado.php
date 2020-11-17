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
    private $registroSunedo;

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

    public function getRegistroSunedo()
    {
        return $this->registroSunedo;
    }

    public function setRegistroSunedo($registroSunedo)
    {
        $this->registroSunedo = $registroSunedo;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_asociado) +1, 1) as codigo from asociados";
        $this->idAsociado = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into asociados values ('$this->idAsociado', '$this->dni', '$this->apellido', '$this->nombre', '$this->ctsp', '$this->centroTrabajo', '$this->fechaNac', '$this->email', '$this->celular', '$this->estado', '$this->password', '$this->ultimoPago', '$this->domicilio', '$this->fechaInscripcion', '$this->fechaCertificado', '$this->fichaInscripcion', '$this->foto', '$this->titulo', '$this->registroSunedo')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from asociados 
        where id_asociado = '$this->idAsociado'";
        $resultado = $this->c_conectar->get_Row($sql);
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
        $this->registroSunedo = $resultado['registro_sunedo'];
    }

    public function actualizar()
    {
        $sql = "UPDATE asociados
                SET  registro_sunedo = '$this->registroSunedo' WHERE  id_asociado = '$this->idAsociado' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM asociados
                WHERE  id_asociado = '$this->idAsociado'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
