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

    $comprobacion_SQL="SELECT matricula FROM tablacoches WHERE matricula='$matricula'";

    $resultadoComprobacion = mysqli_query($connection, $comprobacion_SQL) or die (mysqli_error($connection));

    if($resultadoComprobacion->num_rows== 0){
        
        $resultadoComprobacion->close();
        $instruccion_SQL="INSERT INTO tablacoches (marca, modelo, caballos, matricula, telefono) VALUES ('$marca','$modelo','$caballos','$matricula','$telefono')";

        $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));
        
        if(!$resultado){
            echo"Hubo Algun Error";
        }else{
            echo"<script>alert('Se ha registrado correctamente'); window.location='mostrarCochesQueAlquilan.php'</script>";
        }
    } else {
        echo"<script>alert('Coche con esa matricula ya registrada en la web'); window.location='mostrarCochesQueAlquilan.php'</script>";
    }
   
?>