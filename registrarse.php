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
    
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $password = $_POST["contraseña"];
    $telefono = $_POST["telefono"];
    $DNI = $_POST["dni"];
    $fecha = $_POST["FechaNacimiento"];
    
    $instruccion_SQL="INSERT INTO tabla (email, nombre, apellidos, contraseña, telefono, DNI, fecha) VALUES ('$email','$nombre','$apellidos','$password','$telefono','$DNI','$fecha')";

    $resultado = mysqli_query($connection, $instruccion_SQL);

    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        echo"<script>alert('Se ha registrado correctamente'); window.location='login.html'</script>";
    }
?>
