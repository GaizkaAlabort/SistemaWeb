<?php 
    session_start();
    echo"<title>Cargando</title>";
   $user = "root";
   $pass="";
   $host="localhost";
   $dataBase="SistemaWeb";

   #para docker utilizar: 
    #$user = "admin";
    #$pass="test";
    #$host="db";
    #$dataBase="database";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }
    
    $matriculaModificar = $_SESSION['matricula'];
    
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $caballos = $_POST["caballos"];
    $matricula = $_POST["matricula"];
    $telefono = $_POST["telefono"];
    
    if(!empty($marca))
    {
        $marca_SQL="UPDATE tablacoches SET marca = '$marca' WHERE matricula = '$matriculaModificar'";

        $resultadomarca = mysqli_query($connection, $marca_SQL) or die (mysqli_error($connection));
    
    }
    if(!empty($modelo))
    {
        $modelo_SQL="UPDATE tablacoches SET modelo = '$modelo' WHERE matricula = '$matriculaModificar'";

        $resultadomodelo = mysqli_query($connection, $modelo_SQL) or die (mysqli_error($connection));
    
    }
    if(!empty($caballos))
    {
        $caballos_SQL="UPDATE tablacoches SET caballos = '$caballos' WHERE matricula = '$matriculaModificar'";

        $resultadocaballos = mysqli_query($connection, $caballos_SQL) or die (mysqli_error($connection));
    
    }
    if(!empty($matricula))
    {
        $matricula_SQL="UPDATE tablacoches SET matricula = '$matricula' WHERE matricula = '$matriculaModificar'";

        if (!mysqli_query($connection, $matricula_SQL)) {
            echo"<script>alert('Comprueba lo que has escrito. Puede que te hayas confundido en la matricula.');window.location='modificarCoche.html'</script>";
        }

        $resultadomatricula = mysqli_query($connection, $matricula_SQL) or die (mysqli_error($connection));
    
    }
    if(!empty($telefono))
    {
        $telefono_SQL="UPDATE tablacoches SET telefono = '$telefono' WHERE matricula = '$matriculaModificar'";

        $resultadoTelefono = mysqli_query($connection, $telefono_SQL) or die (mysqli_error($connection));
    
    }

    echo"<script>alert('Cambios realizados con éxito.');window.location='mostrarCochesQueAlquilan.php'</script>";

?>