<?php
require_once 'Conectar.php';

class CursosParticipante
{
    private $idParticipante;
    private $apellido;
    private $nombre;
    private $nroDocumento;
    private $email;
    private $celular;
    private $idCurso;
    private $idMovimiento;
    private $centroTrabajo;
    private $voucher;
    private $verificado;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdParticipante()
    {
        return $this->idParticipante;
    }

    public function setIdParticipante($idParticipante)
    {
        $this->idParticipante = $idParticipante;
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

    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;
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

    public function getIdCurso()
    {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;
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
    public function getCentroTrabajo()
    {
        return $this->centroTrabajo;
    }

    /**
     * @param mixed $centroTrabajo
     */
    public function setCentroTrabajo($centroTrabajo)
    {
        $this->centroTrabajo = $centroTrabajo;
    }

    /**
     * @return mixed
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param mixed $voucher
     */
    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;
    }

    /**
     * @return mixed
     */
    public function getVerificado()
    {
        return $this->verificado;
    }

    /**
     * @param mixed $verificado
     */
    public function setVerificado($verificado)
    {
        $this->verificado = $verificado;
    }

    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_participante) +1, 1) as codigo from cursos_participantes";
        $this->idParticipante = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into cursos_participantes 
                values (
                        '$this->idParticipante', 
                        '$this->apellido', 
                        '$this->nombre', 
                        '$this->nroDocumento', 
                        '$this->email', 
                        '$this->celular', 
                        '$this->idCurso', 
                        '$this->idMovimiento',
                        '$this->centroTrabajo',  
                        '$this->voucher', 
                        '0'
                        )";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from cursos_participantes 
        where id_participante = '$this->idParticipante'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->apellido = $resultado['apellidos'];
        $this->nombre = $resultado['nombres'];
        $this->nroDocumento = $resultado['nro_documento'];
        $this->email = $resultado['email'];
        $this->celular = $resultado['celular'];
        $this->idCurso = $resultado['id_curso'];
        $this->idMovimiento = $resultado['id_movimiento'];
        $this->centroTrabajo = $resultado['centro_trabajo'];
        $this->voucher = $resultado['voucher'];
        $this->verificado = $resultado['verificado'];
        return json_encode($resultado);
    }

    public function actualizar()
    {
        $sql = "UPDATE cursos_participantes
                SET  id_movimiento = '$this->idMovimiento' WHERE  id_participante = '$this->idParticipante' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM cursos_participantes
                WHERE  id_participante = '$this->idParticipante'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function verParticipantes () {
        $sql = "select * from cursos_participantes where id_curso = '$this->idCurso'";
        return $this->c_conectar->get_Cursor($sql);
    }

    public function verPagaron () {
        $sql = "select * from cursos_participantes where id_curso = '$this->idCurso' and verificado = 1";
        return $this->c_conectar->get_Cursor($sql);
    }
}
