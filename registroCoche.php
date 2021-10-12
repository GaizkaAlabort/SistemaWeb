<?php 
    $user = "root";
    $pass="123456";
    $host="localhost";
    $dataBase="SistemaWeb";
    
    $connection = @mysqli_connect($host, $user, $pass, $dataBase);
    
    if(!$connection){
        echo "No se ha podido conectar"; 
    }else{
        $datab = "SistemaWeb";
        $db = mysqli_select_db($connection,$datab);
    
        if(!$db){
    
            echo "No se ha podido encontrar la tabla";
        }
        else{
            echo"<title>Confirmacion</title>
            <h3>Tabla seleccionada: </h3>";
        }
    }
    
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $caballos = $_POST["caballos"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
  
    
    $instruccion_SQL="INSERT INTO tablacoches (marca, modelo, caballos, matricula, telefono) VALUES ('$marca','$modelo','$caballos','$matricula','$telefono')";

    $resultado = mysqli_query($connection, $instruccion_SQL);

    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        echo"Te has registrado Correctamente<br>";
    }

    
?>
<html>
<a href="modificarCoche.html"><input type="submit" value="Modificar coche"></a>
</html>

