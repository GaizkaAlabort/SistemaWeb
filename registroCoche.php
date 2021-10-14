<?php 
    $user = "root";
    $pass="123456";
    $host="localhost";
    $dataBase="SistemaWeb";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }
    
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $caballos = $_POST["caballos"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
  
    
    $instruccion_SQL="INSERT INTO tablacoches (marca, modelo, caballos, matricula, telefono) VALUES ('$marca','$modelo','$caballos','$matricula','$telefono')";

    $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));

    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        echo"Te has registrado Correctamente<br>";
    }

    
?>
<html>
<a href="loginCoche.html"><input type="submit" value="Identifica tu coche"></a>

</html>

