<?
include('connect_database.php');
include('session.php');

//Create all variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$job = $_POST['job'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$pword = $_POST['pword'];
$adultnum = $_POST['adultnum'];
$hometype = $_POST['hometype'];
$homenoise = $_POST['homenoise'];
$love = $_POST['love'];
$petnum = $_POST['petnum'];
$badowner = $_POST['badowner'];
$worstowner = $_POST['worstowner'];

//Execute the query
mysqli_query($connect,"UPDATE accounts SET fname='$fname', lname='$lname', job='$job', address='$address', phone='$phone', pword='$pword', adultnum='$adultnum', 
						hometype='$hometype', homenoise='$homenoise', love='$love', petnum='$petnum', badowner='$badowner', worstowner='$worstowner' WHERE email='$login_session'");        
				
//Check for client success
if(mysqli_affected_rows($connect) > 0){
	
	echo '<script type="text/javascript">
	           window.location = "http://localhost/main-pages/modify_profile_successful.html"
	      </script>';
	
} else {
	echo "Client NOT Added<br />";
	echo mysqli_error ($connect);
}

//Close database connection
$connect->close();
?>

