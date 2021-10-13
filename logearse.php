    <title>Cargando</title>

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
    }
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $instruccion_SQL="SELECT * FROM tabla WHERE email='$email'";

    $resultado = mysqli_query($connection, $instruccion_SQL);
    
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
