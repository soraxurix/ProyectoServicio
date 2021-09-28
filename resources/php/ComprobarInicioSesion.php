<?php 
session_start();
	
include("connection.php");
$_POST = json_decode(file_get_contents('php://input'), true);
$email = $_POST["email"];
$passGet = $_POST["pass"];

$consulta = "SELECT Pass from Clientes where Email = '$email'";
$result = mysqli_query($con, $consulta); 

if(mysqli_num_rows($result)===1){

	$array = mysqli_fetch_array($result);
  	$passOrginal = $array['Pass'];

  	if($passOrginal === $passGet){
  		echo json_encode(200);
  		$_SESSION['email'] = $email;
  	}else{
  		echo json_encode(202);
  	}
	// echo json_encode();
}else{
	echo json_encode(201);
}
 ?>