<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba4</title>
    <link rel="stylesheet" href="../prueba3/stylesprueba3.css">
    <link rel="shortcut icon" href="../img/futbol-solid.svg" type="image/x-icon">
</head>

<body>
    <div>
        <div id="header" class="row">
            <h1>Pregunta general del mundo del fútbol</h1>
            <h2>¿Quien marcó el gol que le dió la victoria a España en el mundial de Sudáfrica de 2010?</h2>
        </div>
        <div class="centrar">
            <img src="../img/españa.jpg" alt="españa">
        </div>
        <form action="../recibir.php">
        <div id="section-1" class="row">
            <div class="column-50">
                <br>
                <input type="radio" name="iniesta" value="true">
                <label for="iniesta">Andrés Iniesta</label>
                <br>
                <br>
                <input type="radio" name="iniesta" value="false">
                <label for="ini">Xavi Simons</label>
                <br>
                <br>
                <input type="radio" name="iniesta" value="false">
                <label for="ini">Pepe Reina</label>
            </div>
            <div class="column-50">
                <div class="validar">
                    <input class="btnjugar" type="submit" name="boton5" value="Validar">
                </div>

            </div>
        </div>
        </form>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>