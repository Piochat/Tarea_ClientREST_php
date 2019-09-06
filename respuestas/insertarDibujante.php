<?php
require_once("../client/ConsultasDibujante.php");
$consulta = new DibujantesVo();

$dibujante = ["nombre" => $_POST['nombre'], "apellido" => $_POST['apellido']];

$respuesta = $consulta->createDibujante($dibujante);

if ($respuesta === "Exito") {
    echo'<script type="text/javascript">  window.location.href="../views/Dibujantes.php"; </script>';
} else {
    echo'<script type="text/javascript"> alert("'.$respuesta.'"); window.location.href="../views/index.html"; </script>';
}