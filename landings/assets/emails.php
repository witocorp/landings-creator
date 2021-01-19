<?php 

	$servername = "db5001390736.hosting-data.io";
	$username = "dbu420805";
	$password = "Landing2020!";
	$dbname = "dbs1175525";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO emails (id, nombre, apellido, telefono, email, direccion, idLanding,fecha,fnacimiento,opciones)
	VALUES ('', '".htmlspecialchars($_POST['nombre'])."', '".htmlspecialchars($_POST['apellido'])."', '".
	htmlspecialchars($_POST['telefono'])."', '".htmlspecialchars($_POST['email'])."'
	, '".htmlspecialchars($_POST['direccion'])."', ".$_POST['idLanding'].", '".date("Y-m-d")."', '".
	$_POST['fnacimiento']."','".$_POST['opciones']."')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>