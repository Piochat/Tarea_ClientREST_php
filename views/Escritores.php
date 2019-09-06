<?php
require_once("../client/ConsultasEscritor.php");
$consulta = new EscritoresVo();
$datos = $consulta->retornarDatos();
var_dump($datos);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritores</title>
    <link rel="stylesheet" href="../vendor/zurb/foundation/dist/css/foundation.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body class="principal">
<br><br>
    <div class="grid-container">
        <div class="grid-container">
            <div class="grid-x superior">
                <div class="cell"><h2 class="t_registro">Escitores Registrados</h2></div>
                <div class="cell auto"><a href="../control/escritorCrear.php"><button class="button secondary">Ingresar Animes<button></a></div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Editar</th>
                        <th>Ver</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $idK = 0;
                         $idV = '';
                         foreach ($datos as $value) {
                             echo "<tr>";
                            foreach ($value as $key => $info) {
                                if ($key == 'id') {
                                    $idK = $key;
                                    $idV = $info;
                                } 
                                echo "<td>$info </td>";
                            }
                            echo '<td><a href="../control/escritorMod.php?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/1159/1159633.svg" height="32px" width="32px"></a></td>';
                            echo '<td><a href="../control/escritorView.php?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/131/131917.svg" height="32px" width="32px"></a></td>';
                            echo '<td><a href="#?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/1214/1214428.svg" height="32px" width="32px"></a></td>';
                            echo "</tr>";
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>