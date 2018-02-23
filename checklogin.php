<?php
session_start();
require_once "connection.php";

if(isset($_POST["checklogin"])){
	
	$email = addslashes($_POST["email"]);
	$password = addslashes($_POST["pass"]);
	$hash_password = md5($password);

	$spot_user = "SELECT * FROM users WHERE email = '$email' AND password = '$hash_password' LIMIT 1";

	$spot_user_results = $conn->query($spot_user);
	
	if($spot_user_results->num_rows > 0){
		
			$_SESSION["authlog"] = $spot_user_results->fetch_assoc();
			
			$userid = $_SESSION["authlog"]["user_id"];
			
			$update_status = "UPDATE users SET  lastaccess = now() WHERE user_id = '$userid' LIMIT 1";
			$conn->query($update_status);
			
			$checkuser=$_SESSION["authlog"]["role"];
	if($checkuser=='1'){
	header("Location:add_business.php");
	exit();
	}
	else if($checkuser=='3'){
	
		header("Location:index.php");
		exit();
		}
		}	
		
		else{		
		
	
		
		header("Location:login.php?incorrect");
		exit();
		
	
	
	}
}
?>