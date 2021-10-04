<?php

$user = "root";
$pass="";
$host="localhost";
$dataBase="SistemaWeb";

$connection = mysqli_connect($host, $user, $pass, $dataBase);

$email = $_POST["email"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$password = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$DNI = $_POST["DNI"];
$fecha = $_POST["Fecha"];

if($connection){
    echo "No se ha podido conectar"; 
}

    else{
        echo"<b><h3>Hemos conectado al servidor</h3></b>";
    }
    $datab = "SistemaWeb";
    $db = mysqli_select_db($connection,$datab);

    if(!$db){

        echo "No se ha podido encontrar la tabla";
    }
    else{
        echo"<h3>Tabla seleccionada: </h3>";
    }


    $instruccion_SQL="INSERT INTO tabla (email, nombre, apellidos, contraseña, telefono, DNI, fecha)
                                        VALUES ($email, $nombre,$apellidos, $password, $telefono, $DNI, $fecha)";

    
    $resultado = mysqli_query($connection, $instruccion_SQL);

    $consulta = "SELECT * FROM tabla"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="PaginaEleccionDeCoches.html">ConcesionarioGajo</a>
    
</body>
</html>