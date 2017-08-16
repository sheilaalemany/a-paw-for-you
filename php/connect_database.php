<?
	    //Opens connection to mySql server
	    $servername = "localhost";
	    $username = "root";
	    $password = "password";
	    $dbname = "paws4you";

	    //Create connection
	    $connect = new mysqli($servername, $username, $password, $dbname);
		
	    //Check connection
	    if ($connect->connect_error) {
	        die("Connection failed: " . $connect->connect_error);
	    } 
?>