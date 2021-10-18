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
    
    $matricula = $_POST["matricula"];
    
    $instruccion_SQL="SELECT * FROM tablaCoches WHERE matricula='$matricula'";

    $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));
    
    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        if($resultado->num_rows == 1){
                echo"<script>window.location='modificarCoche.html'</script>";
        } else {
            echo"<script>alert('La matricula no existe'); window.location='elegirCocheParaEditar.html'</script>";
        }
    }
    
?>
