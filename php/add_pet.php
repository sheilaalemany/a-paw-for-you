<? include 'connect_database.php'; ?>

<?
//Create all variables
$pname= $_POST['pname'];
$age = $_POST['age'];
$breed = $_POST['breed'];
$color = $_POST['color'];
$sex = $_POST['sex'];
$size = $_POST['size'];
$filePath = $_POST['image'];
$dog = $_POST['dog'];
$description = $_POST['description'];

$filePath = "/Library/WebServer/Documents/images/$filePath"; //Path to upload images given the relative path

//Execute the query
mysqli_query($connect,"INSERT INTO pets (pname, age, breed, color, sex, size, image, dog, description)
		        VALUES ('$pname','$age','$breed','$color', '$sex', '$size', '" . mysql_escape_string(file_get_contents($filePath)) . "', '$dog', '$description')");
				
//Send user to adopt page if succesfully added pet
if(mysqli_affected_rows($connect) > 0) {	
	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/add_pet_successful.html"</script>';	
} else {
	echo "Pet NOT Added<br />";
	echo mysqli_error ($connect);
}

//Close database connection
$connect->close();
?>

