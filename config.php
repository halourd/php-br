<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "finalexam";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed" . mysqli_connect());

}else{
    // echo "Connection successfully";
}

?>