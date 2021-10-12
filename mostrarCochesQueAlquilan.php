<?php 
    $user = "root";
    $pass="123456";
    $host="localhost";
    $dataBase="SistemaWeb";
    
    $connection = @mysqli_connect($host, $user, $pass, $dataBase);
    
    if($connection->connect_error){
    die("Datanase connection failed: " . $conn->coonect_error);
}

$query= mysqli_query($connection, "SELECT * FROM tablaCoches")
    or die(mysqli_error($connection));
?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Caballos</th>
			<th>Matricula</th>
			<th>Telefono</th>
		</tr>
		</thead>

<?php
    while($row = mysqli_fetch_array($query)){
        echo
        "<tr>
        <br></br><td>{$row["marca"]}</td>
        <br></br><td>{$row["modelo"]}</td>
        <br></br><td>{$row["caballos"]}</td>
        <br></br><td>{$row["matricula"]}</td>
        <br></br> <td>{$row["telefono"]}</td>
        </td>";
    }
?>
<html>
<a href="index.html"><input type="submit" value="Volver al menu"></a>
</html>
