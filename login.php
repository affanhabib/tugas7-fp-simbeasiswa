<?php
   	include("database.php");
   	session_start();
   
   	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  	$username=test_input($_POST["username"]);
	 	$password=test_input($_POST["password"]);
	  
	}
	function test_input($data) 
	{
	  	$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}

    if ($_POST["username"]=="admin" && $_POST['password']=="1234") 
    {
        $_SESSION["valid"] = true;
        $_SESSION["timeout"] = time();
        $_SESSION["username"]="admin";
        header("location: index.html");
    }
    else 
    {
        echo "Username or Password is incorrect";
        header("location: ADMIN.html");
    }
            
?>