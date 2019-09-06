<?php
require_once("../client/ConsultasEscritor.php");
$consulta = new EscritoresVo();

$id = $_GET['id'];
$datos = $consulta->retornarDato($id);
$datos = $datos[0];

$datos = ($datos['nombre'].'_'. $datos['apellido']);
$este = "https://es.wikipedia.org/wiki/$datos";
echo'<script type="text/javascript">  window.location.href="'.$este.'"; </script>';