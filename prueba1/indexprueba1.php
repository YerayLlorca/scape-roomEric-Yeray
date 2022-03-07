<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba 1</title>
    <link rel="stylesheet" href="../prueba1/stylesprueba1.css">
    <link rel="shortcut icon" href="../img/futbol-solid.svg" type="image/x-icon">
</head>

<body>
   
    <div class="fondo-principal" >
    <div id="header">
        <h1>Adivina de que escudo se trata en cada caso.</h1>
        <h2>Selecciona la opción correcta.</h2>
    </div>
    <div>


    </div>
    <div id="section-1" >     
        <div id="gallery" class="row">
            <div class="column-fot padding-s ">
                <div id="PSVescudo">

                </div>
                
                <div>

            <form action="../recibir.php">
            <br>
            <input type="radio" name="psv" value="false">
            <label for="fut">Real Betis Balompie</label>
            <br>
            <br>
            <input type="radio" name="psv" value="false">
            <label for="cin">Wolverhampton</label>
            <br>
            <br>
            <input type="radio" name="psv" value="true">
            <label for="cin">PSV</label>
            <br>
            <br>
            <input type="radio" name="psv" value="false">
            <label for="cin">Inter de Milán</label>
            <br>
            <br>


        </div>

                <div id="CABJescudo">

                </div>
            
            <br>
            <input type="radio" name="cab" value="false">
            <label for="cab">Barceloní Junior</label>
            <br>
            <br>
            <input type="radio" name="cab" value="false">
            <label for="cab">Base Joom</label>
            <br>
            <br>
            <input type="radio" name="cab" value="false">
            <label for="cab">Barcelonés Juniors</label>
            <br>
            <br>
            <input type="radio" name="cab" value="true">
            <label for="cabj">Boca Juniors</label>
            <br>
            <br>

            </div>
            
            <div class="column-fot padding-s ">

                <div id="ARSENALescudo">

                </div>

            
            <br>
            <input type="radio" name="ars" value="false">    
            <label for="ars">Manchester United</label>
            <br>
            <br>
            <input type="radio" name="ars" value="true">
            <label for="arsenal">Arsenal</label>
            <br>
            <br>
            <input type="radio" name="ars" value="false" >
            <label for="ars">Ajax</label>
            <br>
            <br>
            <input type="radio" name="ars" value="false">
            <label for="ars">Valencia</label>
            <br>
            <br>

                <div id="FIOREescudo">
            
                </div>
        
            <br>
        
            <input type="radio" name="fio" value="false">    
            <label for="fio">Benfica</label>
            <br>
            <br>
            <input type="radio" name="fio" value="true">
            <label for="fiore">Fiorentina</label>
            <br>
            <br>
            <input type="radio" name="fio" value="false">
            <label for="fio">Atlético de Madrid</label>
            <br>
            <br>
            <input type="radio" name="fio" value="false">
            <label for="fio">Paris Saint-Germain</label>
            <br>
            <br>
        </div>   
        </div>
    
        <div class="section-2" >
            <form>
                <div class="validar"> 
                   
                <input class="btnjugar" type="submit" name="boton2" value="Validar respuestas">
                    <br>
                    <br>
                    <br>

                </div>
            </form>
        </div>
    </div>
            
        
</body>

</html>