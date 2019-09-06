<?php
require_once("../client/ConsultasComics.php");
$consulta = new Comics();

$comic = ["nombre" => $_POST['nombre'], "ruta" => $_POST['ruta'] ,
"imgn" => $_POST['imgn'], "editorial" => $_POST['editorial'], "escritor" => $_POST['escritor'],
"dibujante" => $_POST['dibujante']];

$respuesta = $consulta->createComic($comic);

if ($respuesta === "Exito") {
    echo'<script type="text/javascript">  window.location.href="../views/Comics.php"; </script>';
} else {
    echo'<script type="text/javascript"> alert("'.$respuesta.'"); window.location.href="../views/index.html"; </script>';
}