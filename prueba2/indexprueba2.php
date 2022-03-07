<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba2</title>
    <link rel="stylesheet" href="stylesprueba2.css">
    <link rel="shortcut icon" href="../img/futbol-solid.svg" type="image/x-icon">
</head>

<body>
    <div class="row">
        <div id="header">
            <h1>Adivina el jugador</h1>
            <h3>Tienes que escribir el nombre y apellido del siguiente jugador</h3>
            <img class="img" src="../img/vidal.jpg" alt="vidal">

        </div>

        <form action="../recibir.php" method="post">
            <div class="centrar">
            <input class="respuestatexto1" type="text" name="Respuesta2" placeholder="Escribe tu respuesta...">
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="centrar">
                <input class="btnjugar" type="submit" name="boton3" value="Validar respuesta">
            </div>
            <br>
            <br>
            <br>
        </form>
    </div>


</body>

</html>