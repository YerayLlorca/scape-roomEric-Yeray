<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba6</title>
    <link rel="stylesheet" href="../prueba6/stylesprueba6.css">
    <link rel="shortcut icon" href="../img/futbol-solid.svg" type="image/x-icon">
</head>

<body>
    <div class="fondo-principal" >
    <div id="header">
        <h1>Adivina de que escudo se trata en cada caso.</h1>
        <h2>Selecciona la opción correcta.</h2>
    </div>

    <div id="section-1" >
        <div id="gallery" class="row">
                <div class="column-fot padding-s ">
                    <div id="NAPOLIescudo">

                    </div>
                    
                    <div>

                    <form action="../recibir.php">
                    <br>
                    <input type="radio" name="napoli" value="true">
                    <label for="napo">Napoli</label>
                    <br>
                    <br>
                    <input type="radio" name="napoli" value="false">
                    <label for="nap">inter de Milán</label>
                    <br>
                    <br>
                    <input type="radio" name="napoli" value="false">
                    <label for="nap">Juventus</label>
                    <br>
                    <br>
                    <input type="radio" name="napoli" value="false">
                    <label for="nap">Atalanta</label>
                    <br>
                    <br>


                </div>

                    <div id="BVBescudo">

                    </div>
                
                    <br>
                    <input type="radio" name="bvb" value="false">
                    <label for="bv">Machester City</label>
                    <br>
                    <br>
                    <input type="radio" name="bvb" value="true">
                    <label for="bvb">Borussia Dortmund</label>
                    <br>
                    <br>
                    <input type="radio" name="bvb" value="false">
                    <label for="bv">West Ham</label>
                    <br>
                    <br>
                    <input type="radio" name="bvb" value="false">
                    <label for="bv">Manchester United</label>
                    <br>
                    <br>

                </div>
                


                <div class="column-fot padding-s ">

                    <div id="TOTTENHAMescudo">

                    </div>

                
                    <br>
                    <input type="radio" name="tot" value="false">    
                    <label for="tot">Real Madrid</label>
                    <br>
                    <br>
                    <input type="radio" name="tot" value="false">
                    <label for="tot">Sevilla</label>
                    <br>
                    <br>
                    <input type="radio" name="tot" value="false" >
                    <label for="tot">Real Betis</label>
                    <br>
                    <br>
                    <input type="radio" name="tot" value="true">
                    <label for="tottenham">Totthenham</label>
                    <br>
                    <br>

                    <div id="AJAXescudo">
                
                </div>
            
                <br>
            
                <input type="radio" name="aja" value="true">    
                <label for="ajax">AJAX</label>
                <br>
                <br>
                <input type="radio" name="aja" value="false">
                <label for="aja">FC Twente</label>
                <br>
                <br>
                <input type="radio" name="aja" value="false">
                <label for="aja">Marseille</label>
                <br>
                <br>
                <input type="radio" name="aja" value="false">
                <label for="aja">Rennais</label>
                <br>
                <br>

            </div>
        
            </form>

            
                <div class="validar"> 
                    
                <input class="btnjugar" type="submit" name="boton7" value="Validar respuestas">
                    <br>
                    <br>
                    <br>

                </div>
            </form>
        </div>
    </div>    
      
    
</body>

</html>