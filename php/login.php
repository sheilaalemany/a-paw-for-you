<?php

include("connect_database.php");
session_start();

$login_email = $_POST['login_email'];
$login_pword = $_POST['login_pword'];

//Execute the query
$result = mysqli_query($connect, "SELECT * FROM accounts
		        WHERE email = '$login_email' and pword = '$login_pword'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count == 1) {
	$_SESSION['global_email'] = $login_email;
	
	echo '<script type="text/javascript">window.location = "http://localhost/index.php"</script>';
	
} else {
	
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/login_error.html"</script>';
}

?>