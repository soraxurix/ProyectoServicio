<?php
session_start();

include("connection.php");
// Creamos el post para que pueda tomar los valores en formato JSON
$_POST = json_decode(file_get_contents('php://input'), true);
// Inicializamos las variables con los valores obtenidos del post
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telef = $_POST["telef"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$emailSesion = $_SESSION['email'];

// Verificamos si el correo existe, si no existe se manda un error
if (VerificarCorreo($email)) { 
	// Realizamos la consulta
	// $consulta = "UPDATE `Clientes` (`Nombre`, `Apellido`, `Telefono`, `Email`, `Pass`) VALUES('$nombre', '$apellido', '$telef', '$email','$passGet')";
	$consulta = "UPDATE `Clientes` SET Nombre = '$nombre', Apellido = '$apellido', Telefono = '$telef', Email = '$email', Pass = '$pass' WHERE BINARY email = '$emailSesion'";
	$result = mysqli_query($con, $consulta);
	// Validamos si la consulta se ejecute correctamente, si no se ejecuta reotrnamos un mensaje de error.
	if ($result) {
		echo json_encode(200);
		$_SESSION['email'] = $email;
	}else{
		echo json_encode(202);
	}
}else{
	echo json_encode(201);
}

// Función para verificar el email
function VerificarCorreo ($email){
	include("connection.php");
	$consulta2 = "SELECT email from Clientes where BINARY email = '$email'";
	$result = mysqli_query($con, $consulta2);

	if (mysqli_num_rows($result)!=0) {
		return false;
	}else{
		return true;
	}
}

 ?>
