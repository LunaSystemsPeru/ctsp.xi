<?php
require '../../models/Noticias.php';
require '../../models/NoticiaImagen.php';

$noticia = new Noticias();
$galeria = new NoticiaImagen();

$noticia->generarCodigo();
$noticia->setFecha(filter_input(INPUT_POST, 'input_fecha'));
$noticia->setTitulo(filter_input(INPUT_POST, 'input_titulo'));
$noticia->setContenido(filter_input(INPUT_POST, 'input_contenido'));
$noticia->insertar();

$galeria->setIdnoticia($noticia->getIdnoticias());

//ccargar galeria
$agaleria = $_FILES["filefotos"];
//var_dump($_FILES["filefotos"]);

for ($i= 0; $i < count($agaleria['name']); $i++) {
    $file = $agaleria['name'][$i];
    $file_temporal = $agaleria['tmp_name'][$i];
    $temporary = explode(".", $file);
    $file_extension = end($temporary);

    if ($agaleria["error"][$i] > 0) {
        echo "Return Code: " . $agaleria["error"][$i] . "<br/><br/>";
    } else {
        $directorio = "../../../archivos/noticias/imagenes/";
        if (!file_exists($directorio)) {
            if (!mkdir($directorio, 0777, true)) {
                die('Fallo al crear las carpetas...');
            }
        }

        $galeria->generarCodigo();
        $new_name = $galeria->getId() . '.' . $file_extension;

        if (move_uploaded_file($file_temporal, $directorio . $new_name)) {
            $galeria->setImagen($new_name);
            $galeria->insertar();
        } else {
            echo "error no se pudo copiar el archivo a la carpeta";
            //header("Location: ../reg_productos.php?error=3");
        }
    }
}
header("Location: ../contents/ver_noticias.php");