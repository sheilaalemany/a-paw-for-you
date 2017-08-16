<?
include('connect_database.php');
include('session.php');

$pet = $_SERVER['QUERY_STRING'];
$token = strtok($pet, "&");

//Get all arguments from the URL
$index = 1;
while($token !== false) {
	
	if($index == 1) {
		$petname = $token;
		$token = strtok("&");
		
	} else if($index == 2) {
		$adopted = $token;
		$token = strtok("&");
		
	} else {
		$email = $token;
		$token = strtok("&");
	}
	$index = $index+1;
}

if($row['petnum'] > 4) {
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/adopt_rejected.html"</script>';
}

if($adopted && $row['petnum'] <= 4) {
	mysqli_query($connect, "UPDATE pets SET adopted=1 WHERE pname='$petname'");	
	mysqli_query($connect, "UPDATE accounts SET petnum=petnum+1 WHERE email='$email'");	
	
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/adopt_successful.html"</script>';
}

?>

