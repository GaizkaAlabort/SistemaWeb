<?php 
 echo "<link rel=stylesheet href=css/styles.css>";
    $user = "root";
    $pass="123456";
    $host="localhost";
    $dataBase="database";
    
    #para docker utilizar: 
    #$user = "admin";
    #$pass="test";
    #$host="db";
    
    $connection = mysqli_connect($host,$user,$pass,$dataBase);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }

    $query= mysqli_query($connection, "SELECT * FROM tablaCoches") or die(mysqli_error($connection));
?>


<html>
<body>
    



        <table class="tabla">
  		
		    <tr class="tablaMostrarCoches">
			    <th>Marca</th>
			    <th>Modelo</th>
			    <th>Caballos</th>
			    <th>Matricula</th>
			    <th>Telefono</th>
	        </tr>



            <?php

    while($row = mysqli_fetch_array($query)){
    ?>

       
        <tr>
             <td> <?php echo $row["marca"]?> </td>
             <td> <?php echo $row["modelo"]?> </td>
             <td> <?php echo $row["caballos"]?> </td>
             <td> <?php echo $row["matricula"]?> </td>
             <td> <?php echo $row["telefono"]?> </td>
   
             </tr>
    
<?php
    }
    
?>
</table>

<a href="index.html"><input type="submit" value="Volver al menu"></a><br>
<a href="elegirCocheParaEditar.html"><input type="submit" value="Modificar coche"></a>
</body>
</html>






