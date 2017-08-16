<? include 'connect_database.php'; ?>

<?
//Create all variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$job = $_POST['job'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pword = $_POST['pword'];
$adultnum = $_POST['adultnum'];
$hometype = $_POST['hometype'];
$homenoise = $_POST['homenoise'];
$love = $_POST['love'];
$petnum = $_POST['petnum'];
$badowner = $_POST['badowner'];
$worstowner = $_POST['worstowner'];

if(!$love || $badowner || $worstowner) {	
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/signup_rejected.html"</script>';
}

//Execute the query
mysqli_query($connect,"INSERT INTO accounts (fname, lname, job, address, phone, email, pword, adultnum, hometype, homenoise, love, petnum, badowner, worstowner)
		        VALUES ('$fname','$lname','$job','$address', '$phone', '$email', '$pword', '$adultnum', '$hometype', '$homenoise', '$love', '$petnum', '$badowner', '$worstowner')");
				
//Check for client success
if(mysqli_affected_rows($connect) > 0){
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/signup_successful.html"</script>';
	
} else {
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/signup_rejected.html"</script>';
	echo mysqli_error ($connect);
}

//Close database connection
$connect->close();
?>

