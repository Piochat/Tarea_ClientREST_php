<?php
require_once("../client/ConsultasEscritor.php");
$consulta = new EscritoresVo();

$escritor = ["nombre" => $_POST['nombre'], "apellido" => $_POST['apellido']];

$respuesta = $consulta->createEscritor($escritor);

if ($respuesta === "Exito") {
    echo'<script type="text/javascript">  window.location.href="../views/Escritores.php"; </script>';
} else {
    echo'<script type="text/javascript"> alert("'.$respuesta.'"); window.location.href="../views/index.html"; </script>';
}
