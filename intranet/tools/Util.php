<?php


class Util
{
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