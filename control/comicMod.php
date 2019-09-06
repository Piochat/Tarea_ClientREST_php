<?php
require_once("../client/ConsultasComics.php");
require_once("../client/ConsultasDibujante.php");
require_once("../client/ConsultasEditorial.php");
require_once("../client/ConsultasEscritor.php");
$consulta = new Comics();

$id = $_GET['id'];
$datos = $consulta->retornarDato($id);

$datos = $datos[0];

var_dump($datos);

$consulta = new Comicsvo();
$editorial = $consulta->retornarDatos();
$consulta = new EscritoresVo();
$escritor = $consulta->retornarDatos();
$consulta = new DibujantesVo();
$dibujante = $consulta->retornarDatos();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="../vendor/zurb/foundation/dist/css/foundation.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<div class="grid-x login-grid grid-container align-center-middle superior">
        <div class="cell align-middle align-center small-10 medium-4 large-4 superior">
            <form class="log-in-form" method="post" action="../respuestas/updateComic.php">
                <h4 class="text-center">Actualizar</h4>
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
                <input type="text" name="ruta" value="<?php echo $datos['ruta']; ?>" >
                <input type="text" name="imgn" value="<?php echo $datos['imgn']; ?>" >
                <select name="editorial" id="editorial">
                    <?php foreach ($editorial as $value) {
                        echo "<option value=".$value['id'].">".$value['nombre']."</option>";
                    } ?>
                </select>
                <select name="escritor" id="escritor">
                    <?php foreach ($escritor as $value) {
                        echo "<option value=".$value['id'].">".$value['nombre']. " " .$value['apellido'] ."</option>";
                    } ?>
                </select>
                <select name="dibujante" id="dibujante">
                    <?php foreach ($dibujante as $value) {
                        echo "<option value=".$value['id'].">".$value['nombre']. " " .$value['apellido'] ."</option>";
                    } ?>
                </select>
                <p class="butoncito"><input type="submit" class="button expanded" value="Enviar"></p>
            </form>
        </div>
    </div>
</body>
</html>