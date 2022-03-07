<?php
//boton pantalla principal empezar a jugar para cambiar a pantalla 1
if (isset($_POST['boton1'])){
    header('Location: ./prueba1/indexprueba1.php');
}

//recoger respuestas prueba 1 (RADIO BUTTONS)

if (isset($_REQUEST['boton2']) && ($_REQUEST['psv'])=="true" && ($_REQUEST['cab'])=="true" && ($_REQUEST['ars'])=="true" && ($_REQUEST['fio'])=="true"){
    header('Location: ./prueba2/indexprueba2.php');
}else if (isset($_REQUEST['boton2']) && ($_REQUEST['psv'])=="false" && ($_REQUEST['cab'])=="false" && ($_REQUEST['ars'])=="false" && ($_REQUEST['fio'])=="false"){
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba1/indexprueba1.php");</script>';  
}


//Recoger datos prueba 2 (CUADRO DE TEXTO)

if (isset($_POST['boton3']) && strtolower($_POST['Respuesta2'])=="arturo vidal"){
    header('Location: ./prueba3/indexprueba3.php');
}else if (isset($_POST['boton3'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba2/indexprueba2.php");</script>';  
}  

//Recoger datos prueba 3 (CUADRO DE TEXTO)
if (isset($_REQUEST['boton4']) && ($_REQUEST['campnou2'])=="true"){
    header('Location: ./prueba4/indexprueba4.php');
}else if (isset($_REQUEST['boton4']) && ($_REQUEST['campnou2'])=="false"){
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba3/indexprueba3.php");</script>';  
}

 //Recoger datos prueba 4 (CUADRO DE TEXTO)
if (isset($_REQUEST['boton5']) && ($_REQUEST['iniesta'])=="true"){
    header('Location: ./prueba5/indexprueba5.php');
}else if (isset($_REQUEST['boton5']) && ($_REQUEST['iniesta'])=="false"){
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba3/indexprueba3.php");</script>';  
} 

//Recoger datos prueba 5 (CUADRO DE TEXTO)
if (isset($_POST['boton6']) && strtolower($_POST['Respuesta5'])=="frenkie de jong"){
    header('Location: ./prueba6/indexprueba6.php');
}else if (isset($_POST['boton6'])){
    //echo "<script>alert('Tienes que poner un nombre para continuar')</script>"; 
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba5/indexprueba5.php");</script>';  
}  

//recoger respuestas prueba 6 (RADIO BUTTONS)
if (isset($_REQUEST['boton7']) && ($_REQUEST['napoli'])=="true" && ($_REQUEST['bvb'])=="true" && ($_REQUEST['tot'])=="true" && ($_REQUEST['aja'])=="true"){
    header('Location: ./zfinal/zfinal.php');
}else if (isset($_REQUEST['boton2']) && ($_REQUEST['napoli'])=="false" && ($_REQUEST['bvb'])=="false" && ($_REQUEST['tot'])=="false" && ($_REQUEST['aja'])=="false"){
    echo '<script type="text/javascript">alert("La respuesta es incorrecta. Vuelve a intentarlo otra vez.");window.location.assign("./prueba6/indexprueba6.php");</script>';  
}   

//boton final a inicio
if (isset($_REQUEST['botonf'])){
    header('Location: ./index.php');
}