<?php
// Iniciamos la sesión
session_start();
include("connection.php");
// Inicializamos el email con el que esté guardado por la sesión
$email = $_SESSION['email'];

// Realizamos la consulta
$consulta = "SELECT * from Clientes where BINARY email = '$email'";
$result = mysqli_query($con, $consulta);

// Validamos si la consulta se realizó correctamente, caso contrario enviamos un error
if($result){
  $data = array();
	while($row = mysqli_fetch_assoc($result)){
	$data[] = $row;
	}
	echo json_encode($data);
}else{
	echo json_encode(201);
}


 ?>
