<?php

header('Content-type: application/vnd.ms-excel;charset=UTF-8');
header('Content-Disposition: attachment; filename=participantes.xls');

if (filter_input(INPUT_GET, 'id_curso')) {
    $idcurso = filter_input(INPUT_GET, 'id_curso');
}else{
    header("location: ../contents/ver_cursos.php");//en caso no reciba valor, regresar a cursos

}
require '../../models/CursosParticipante.php';
$participante  = new CursosParticipante();
$participante->setIdCurso($idcurso);//asignar el valor del idcurso

?>
<table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>NroDoc.</th>
                        <th>Celular</th>
                        <th>Centro de Trabajo</th>
                        <th>Estado Pago</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $a_participante = $participante->verParticipantes();
                    foreach ($a_participante as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['apellidos']?></td>
                            <td><?php echo $fila['nombres'] ?></td>
                            <td><?php echo $fila['nro_documento'] ?></td>
                            <td><?php echo $fila['celular']?></td>
                            <td><?php echo $fila['centro_trabajo'] ?></td>
                            <td><?php echo $fila['verificado'] ?></td>

                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>

                </table>


