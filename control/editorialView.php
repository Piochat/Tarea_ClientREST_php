<?php
require_once("../client/ConsultasEditorial.php");
$consulta = new Comicsvo();

$id = $_GET['id'];
$datos = $consulta->retornarDato($id);

$datos = $datos[0];

$datos = str_replace(' ','_', $datos['nombre']);
$este = "https://es.wikipedia.org/wiki/$datos";
echo'<script type="text/javascript">  window.location.href="'.$este.'"; </script>';