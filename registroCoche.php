<title>Cargando</title>

<?php 
    $user = "root";
    $pass="";
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

    if (!mysqli_query($connection, $instruccion_SQL)) {
        echo"<script>alert('Comprueba lo que has escrito. Puede que te hayas confundido de matricula porque esa ya existe en la lista.');window.location='registraTuCoche.html'</script>";
    }

    $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));
    
    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        echo"<script>alert('Se ha registrado correctamente'); window.location='index.html'</script>";
    }

    
?>