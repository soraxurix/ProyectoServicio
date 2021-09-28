<?php
session_start();

include("connection.php");
$_POST = json_decode(file_get_contents('php://input'), true);
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telef = $_POST["telef"];
$email = $_POST["email"];
$passGet = $_POST["pass"];

if (VerificarCorreo($email)) {
	$consulta = "INSERT INTO `Clientes`(`Nombre`, `Apellido`, `Telefono`, `Email`, `Pass`) VALUES('$nombre', '$apellido', '$telef', '$email','$passGet')";
	$result = mysqli_query($con, $consulta);
	if ($result) {
		echo json_encode(200);
		$_SESSION['email'] = $email;
	}else{
		echo json_encode(202);
	}
}else{
	echo json_encode(201);
}


function VerificarCorreo ($email){
	include("connection.php");
	$consulta2 = "SELECT email from Clientes where email = '$email'";
	$result = mysqli_query($con, $consulta2);

	if (mysqli_num_rows($result)!=0) {
		return false;
	}else{
		return true;
	}
}

 ?>
