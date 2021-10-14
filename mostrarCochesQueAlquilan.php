<?php 
 echo "<link rel=stylesheet href=css/styles.css>";
    $user = "admin";
    $pass="test";
    $host="db";
    $dataBase="database";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }

    $query= mysqli_query($connection, "SELECT * FROM tablaCoches") or die(mysqli_error($connection));
?>


<html>



        <table class="table">
  		
		    <tr class="tablaMostrarCoches">
			    <th>Marca</th>
			    <th>Modelo</th>
			    <th>Caballos</th>
			    <th>Matricula</th>
			    <th>Telefono</th>
	        </tr>



            <?php

    while($row = mysqli_fetch_array($query)){
        echo
        "
        <div = modificarTabla> 
        <tr>
        <td>{$row["marca"]}</td>
       <td>{$row["modelo"]}</td>
       <td>{$row["caballos"]}</td>
        <td>{$row["matricula"]}</td>
        <td>{$row["telefono"]}</td>
        </tr>
        </div>"
        ;
    }
    
?>

<a href="index.html"><input type="submit" value="Volver al menu"></a><br>
<b href="elegirCocheParaEditar.html"><input type="submit" value="Identifica el coche que quieras para poder modificarlo"></b>

</html>






