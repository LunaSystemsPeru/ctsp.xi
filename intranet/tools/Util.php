<?php


class Util
{

    public function __construct()
    {
        date_default_timezone_set('America/Los_Angeles');
    }

    function mesactual ()  {
        $mes = date("m");
        return $mes;
    }

    function nombremes($mes) {
        setlocale(LC_TIME, 'spanish');
        $nombre = strftime("%B", mktime(0, 0, 0, $mes, 1, 2000));
        return ucwords($nombre);
    }

    function fecha_tabla($date) {
        $to_format = 'd/m/Y';
        $from_format = 'Y-m-d';
        $date_aux = date_create_from_format($from_format, $date);
        return date_format($date_aux, $to_format);
    }

    function fecha_tabla_completa($date) {
        $to_format = 'd/m/Y H:i:s';
        $from_format = 'Y-m-d H:i:s';
        $date_aux = date_create_from_format($from_format, $date);
        return date_format($date_aux, $to_format);
    }

    function fecha_mysql($date) {
        $to_format = 'Y-m-d';
        $from_format = 'd/m/Y';
        $date_aux = date_create_from_format($from_format, $date);
        return date_format($date_aux, $to_format);
    }

    function fecha_actual_completa() {
        $fecha_actual = date("Y-m-d H:i:s");
        return $fecha_actual;
    }

    function fecha_actual_corta() {
        date_default_timezone_set('America/Los_Angeles');
        $fecha_actual = date("Y-m-d");
        return $fecha_actual;
    }

    function zerofill($valor, $longitud) {
        $res = str_pad($valor, $longitud, '0', STR_PAD_LEFT);
        return $res;
    }

    function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++) {
            $key .= $pattern{mt_rand(0, $max)};
        }
        return $key;
    }

    function calculaEdad($fechanacimiento)
    {
        list($ano, $mes, $dia) = explode("-", $fechanacimiento);
        $ano_diferencia = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia = date("d") - $dia;
        if ($mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }

}