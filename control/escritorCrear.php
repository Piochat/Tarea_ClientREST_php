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
            <form class="log-in-form" method="post" action="../respuestas/insertEscritor.php">
                <h4 class="text-center">Insertar</h4>
                <input type="text" name="nombre" placeholder="Nombre del Escritor" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <p class="butoncito"><input type="submit" class="button expanded" value="Enviar"></p>
            </form>
        </div>
    </div>
</body>
</html>