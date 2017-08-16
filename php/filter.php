<?php

$string = "";

//Cat or Dog? filter is toggled
if(!empty($_POST['dog'])) {
	
	foreach($_POST['dog'] as $selected) {
	   $string .= $selected."&";
   	}
}

//Pet age filter is toggled
if(!empty($_POST['age'])) {
	
	foreach($_POST['age'] as $selected) {
	   $string .= $selected."&";
   }
}

//Breed filter is toggled
if(!empty($_POST['breed'])) {
	
	foreach($_POST['breed'] as $selected) {
	   $string .= $selected."&";
   }
}

//Color filter is toggled
if(!empty($_POST['color'])) {
	
	foreach($_POST['color'] as $selected) {
	   $string .= $selected."&";
   }
}

//Gender filter is toggled
if(!empty($_POST['sex'])) {
	
	foreach($_POST['sex'] as $selected) {
	   $string .= $selected."&";
   }
}

//Size filter is toggled
if(!empty($_POST['size'])) {
	
	foreach($_POST['size'] as $selected) {
	   $string .= $selected."&";
   }
}
	
//Return all filter parameters to the adopt page
echo '<script type="text/javascript">window.location = "http://localhost/main-pages/adopt.php?'. $string .'"</script>';

?>