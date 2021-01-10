<?php
require_once 'Conectar.php';

class Usuario
{

    private $idUsuario;
    private $usuario;
    private $password;
    private $dato;
    private $email;
    private $celular;
    private $estado;
    private $ultimoIngreso;

    private $c_conectar;


    public function __construct()
    {
        $this->c_conectar = Conectar::getInstancia();
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getDato()
    {
        return $this->dato;
    }

    public function setDato($dato)
    {
        $this->dato = $dato;
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

    public function getUltimoIngreso()
    {
        return $this->ultimoIngreso;
    }

    public function setUltimoIngreso($ultimoIngreso)
    {
        $this->ultimoIngreso = $ultimoIngreso;
    }


    public function generarCodigo()
    {
        $sql = "select ifnull(max(id_usuario) +1, 1) as codigo from usuarios";
        $this->idUsuario = $this->c_conectar->get_valor_query($sql, "codigo");
    }

    public function insertar()
    {
        $sql = "insert into usuarios values ('$this->idUsuario', '$this->usuario', '$this->password', '$this->dato', '$this->email', '$this->celular', '$this->estado', '$this->ultimoIngreso')";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function obtenerDatos()
    {
        $sql = "select * from usuarios 
        where id_usuario = '$this->idUsuario'";
        $resultado = $this->c_conectar->get_Row($sql);
        $this->usuario = $resultado['usuario'];
        $this->password = $resultado['password'];
        $this->dato = $resultado['datos'];
        $this->email = $resultado['email'];
        $this->celular = $resultado['celular'];
        $this->estado = $resultado['estado'];
        $this->ultimoIngreso = $resultado['ultimo_ingreso'];
    }

    public function validarUsuario()
    {
        $sql = "select * from usuarios 
        where usuario = '$this->usuario'";
        $resultado = $this->c_conectar->get_Row($sql);
        if ($resultado) {
            $this->idUsuario = $resultado['id_usuario'];
            return true;
        } else {
            return false;
        }
    }

    public function actualizar()
    {
        $sql = "UPDATE usuarios
                SET  ultimo_ingreso = '$this->ultimoIngreso' WHERE  id_usuario = '$this->idUsuario' ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM usuarios
                WHERE  id_usuario = '$this->idUsuario'  ";
        return $this->c_conectar->ejecutar_idu($sql);
    }

}
