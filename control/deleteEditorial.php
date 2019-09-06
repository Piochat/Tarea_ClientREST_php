<?php
require_once("../client/ConsultasEditorial.php");

$consulta = new Comicsvo();

$editorial = ["id" => $_POST['id'], "nombre" => $_POST['nombre']];

$respuesta = $consulta->deleteEditorial($editorial);

if ($respuesta === "Exito") {
    echo'<script type="text/javascript">  window.location.href="../views/Editoriales.php"; </script>';
} else {
    echo'<script type="text/javascript"> alert("'.$respuesta.'"); window.location.href="../views/index.html"; </script>';
}