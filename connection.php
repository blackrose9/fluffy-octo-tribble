<?php 
$server="localhost";
$user="root";
$password="";
$db="edirectory";

$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn){
    echo "Error";
}

?>

