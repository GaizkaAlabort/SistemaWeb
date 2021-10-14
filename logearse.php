    <title>Cargando</title>

<?php 
    $user = "admin";
    $pass="test";
    $host="db";
    $dataBase="database";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $instruccion_SQL="SELECT * FROM tabla WHERE email='$email'";

    $resultado = mysqli_query($connection, $instruccion_SQL) or die (mysqli_error($connection));
    
    $row= mysqli_fetch_array($resultado);
    
    if(!$resultado){
        echo"Hubo Algun Error";
    }else{
        if($resultado->num_rows == 1){
            if($row[3]==$password){
                echo"<script>alert('Bienvenido $row[1]'); window.location='options.html'</script>";
            } else{
                echo"<script>alert('Ha introducido una contraseña incorrecta'); window.location='login.html'</script>";
            }
        } else {
            echo"<script>alert('La cuenta no existe o hay problemas con su cuenta'); window.location='singup.html'</script>";
        }
    }
    
?>
