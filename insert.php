<?php 
require_once "connection.php";

if(isset($_POST["submit"])){



	$bizzname = addslashes($_POST["businessname"]);
	$address = addslashes($_POST["address"]);
	$phone = addslashes($_POST["phone"]);
	$category = addslashes($_POST["category"]);
	$county = addslashes($_POST["county"]);
    $website = addslashes($_POST["website"]);
    //$logo = addslashes($_POST["logo"]);
    $description =addslashes($_POST["description"]);
	
	$_SESSION["bizzname"] = ucwords(strtolower($bizzname));
	$_SESSION["address"] =$address;
	$_SESSION["phone"] =$phone;
	$_SESSION["category"] = ucwords(strtolower($category));
	$_SESSION["county"] = ucwords(strtolower($county));
	$_SESSION["website"] =strtolower($website);
	//$_SESSION["logo"] =$logo;
	$_SESSION["description"] =$description;

	$bizzname=$_SESSION["bizzname"];
	$address=$_SESSION["address"];
	$phone=$_SESSION["phone"];
	$category=$_SESSION["category"];
	$county=$_SESSION["county"];
	$website=$_SESSION["website"];
	//$logo=$_SESSION["logo"];
	$description=$_SESSION["description"];

	if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "uploaded/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {
                	$files[] = $shortname;
                	//$addfile="insert into business_details(logo)values('$filePath')";
                	$add_business = "INSERT INTO business_details (business_name,address,phone_number,category_name,county_name,weblink,description,logo) VALUES ('$bizzname', '$address', '$phone','$category','$county','$website','$description','$filePath')";
	


if($conn->query($add_business) === TRUE){
		
		header("Location:add_business.php?success");
		
	}
	else{
		echo "Error: " . $add_business . " ON " . $conn->error;
	}

                    
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
    }
}


	


	
	/*else{
		echo "Error: " . $add_business . " ON " . $conn->error;
	}

}
*/



if(isset($_POST["submit_categories"])){

	$categoryname = addslashes($_POST["categoryname"]);
	$_SESSION["categoryname"]=ucwords($categoryname);
	$categoryname=$_SESSION["categoryname"];
	
	$add_category = "INSERT INTO categories (category_name) VALUES ('$categoryname')";
	
	if($conn->query($add_category) === TRUE){
		
		header("Location:view_categories.php");
		exit();
	}else{
		echo "Error: " . $add_category . " ON " . $conn->error;
	}

}

if(isset($_POST["submit_counties"])){

	$countyname = addslashes($_POST["countyname"]);
	$_SESSION["countyname"]=ucwords($countyname);
	$countyname=$_SESSION["countyname"];
	
	$add_county = "INSERT INTO counties (county_name) VALUES ('$countyname')";
	
	if($conn->query($add_county) === TRUE){
		
		header("Location:view_counties.php");
		exit();
	}else{
		echo "Error: " . $add_county . " ON " . $conn->error;
	}

}

if(isset($_POST["submit_user"])){

	$fullname = addslashes($_POST["fullname"]);
	$email = addslashes($_POST["email"]);
	$psd = addslashes($_POST["password"]);
	$psd1 = addslashes($_POST["password2"]);
	if($psd!==$psd1){
	header("location:register.php?pwd");
	exit();
	}
	else{

	$_SESSION["fullname"] = ucwords(strtolower($fullname));
	$_SESSION["email"] = strtolower($email);
	$_SESSION["psd"] = md5($psd);

	$fullname = $_SESSION["fullname"];
	$email = $_SESSION["email"];
	$psd=$_SESSION["psd"];


	$add_user = "INSERT INTO users (fullname,email,password) VALUES ('$fullname', '$email', '$psd')";
	
	if($conn->query($add_user) === TRUE){
	
		
	unset( $_SESSION["fullname"]);
	unset($_SESSION["email"]);
	unset($_SESSION["psd"]);
			
	header("Location: login.php?success");
		exit();
	}else{
		echo "Error: " . $add_user . " ON " . $conn->error;
	}

}
}
?>