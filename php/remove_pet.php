<?
include('connect_database.php');
include('session.php');

$pet = $_SERVER['QUERY_STRING'];

mysqli_query($connect, "DELETE FROM pets WHERE pname='$pet'");	
	
echo '<script type="text/javascript">window.location = "http://localhost/main-pages/adopt_successful.html"</script>';

?>

