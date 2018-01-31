<?php 
require_once "connection.php";

if(isset($_POST["submit"])){

	$bizzname = $_POST["businessname"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$category = $_POST["category"];
	$county = $_POST["county"];
    $website = $_POST["website"];
    $logo = $_POST["logo"];
    $description = $_POST["description"];
	
	

	$add_business = "INSERT INTO business_details (business_name,address,phone_number,category_id,county_code,weblink,logo,description) VALUES ('$bizzname', '$address', '$phone','$category','$county','$website','$logo','$description')";
	
	if($conn->query($add_business) === TRUE){
		
		header("Location:reg_business.php");
		exit();
	}else{
		echo "Error: " . $add_business . " ON " . $conn->error;
	}

}
?>