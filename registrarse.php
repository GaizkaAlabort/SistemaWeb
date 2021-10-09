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
        echo"Te has registrado Correctamente<br>";
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta  charset="utf-8">
    <title>Identificaci&oacute;n</title>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
   
<body>
    
     <header>
        <a href="index.html">Concesionario Gajo</a>
    </header> 
   
    <section>
        <div>
            
            </div class="ImagenLogin">
               
                <image src="Imagenes/Imagen login.jpg" width="1920" height="1080" ></image>
                
                <div class="formularioLogin">
                    <div class="Identificate"><h1 >Identificate</h1></div>
                    
                    <form action="PaginaEleccionDeCoches.html" method="POST">
                        <input type="text" name="email" placeholder="Introduce email" pattern="[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})"required>
                        <input type="password" name="password" placeholder="Introduce la contraseña"required>
                     <a href="PaginaEleccionDeCoches.html"><input type="submit" value="Enviar"></a>
                     </form>
                     
            </div>
         </div> 
        <div>
    </section>
    <span>o <a href="singup.html">Registrate</a></span>
</body>
</html>

