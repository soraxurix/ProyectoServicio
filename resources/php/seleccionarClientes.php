<?php
session_start();
include("connection.php");
$email = $_SESSION['email'];

$consulta = "SELECT * from Clientes where email = '$email'";
$result = mysqli_query($con, $consulta);
// echo json_encode($consulta);
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
