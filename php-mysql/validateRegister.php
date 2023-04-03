<?php

//include_once('config.php');


$databaseHost = 'localhost';
$databaseName = 'dtbse';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if($conn->connect_error)
{
    die("Connection is failed or lost ". $conn->connect_error);
}

 

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $date = date("Y-m-d");

	if(empty($name) || empty($email) || empty($username) ) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($username)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
        }
        echo "There is an error.";
    }
    else
    {
        $result = mysqli_query($conn, "INSERT INTO tbl_user(id,username,password,name,email,dtes) VALUES('','$username','$password','$name','$email','$date')");
        echo "<font color='green'>Data added successfully.";
        header("refresh:3; ../  ");
        //echo "<br/><a href='../index.php' style='text-decoration:none;'>Go Back</a>";
       // $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
    }



}
?>