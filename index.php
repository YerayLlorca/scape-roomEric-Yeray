<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Scape Room</title>
    <link rel="shortcut icon" href="./img/futbol-solid.svg" type="image/x-icon">
</head>

<body>
    <div id="header">
        <h1>BIENVENIDO AL SCAPE ROOM DE FUTBOLEROS</h1>
        <a href="./img/estadio cam nou.jpg"></a>
    </div>
    <div id="relleno-lateral" class="fondo-principal">
        <div id="section-1" class="row">
            <h1>¿Te consideras un buen futbolero? Pon a prueba tus conocimientos con este scape room!</h1>
            <h2>En este scape room encontrarás una serie de preguntas actuales relacionadas con el mundo del fútbol y para los amantes de este.</h2>
            <div class="imgbet">
                <img src="./img/bets.png">
            </div>
        </div>
        <div id="section-2" class="row">
            <h2>INSTRUCCIONES:</h2>
            <h3>El juego tiene 6 pruebas y, no podrás saltarte una, deberas hacer todas y cada una de ellas obligatoriamente.</h3>
            <h3>Para pasar de una prueba a otra deberas completar la prueba en la que te encuentres.</h3>
            <h3>Cada vez que completes una prueba se te otorgarán una serie de puntos, contra mas rapido contestes las preguntas mas puntos obtendrás, al final del scape room habrán una serie de premios dependiendo de los puntos que hayas obtenido.</h3>
        </div>
        
       
        <form action="recibir.php" method="post">
            <div class="btn">
                <input class="btnjugar" type="submit" name="boton1" value="Empezar el juego">
            </div>
        </form>
       
    </div>
</body>

</html>