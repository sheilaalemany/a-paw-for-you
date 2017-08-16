<?php
	include("../php/connect_database.php");
	include("../php/session.php"); //To know whether the user is logged in or not 
	
	$pet = $_SERVER['QUERY_STRING'];
	
	if(!$pet) {
		//No filter applied, show all pets
		$pet_sql = mysqli_query($connect, "SELECT * FROM pets");  
	} else {
		$token = strtok($pet, "&");
		
		//Get all arguments from the URL
		while($token !== false) {
			
			if($token == 'c') {
				$cat = '0';
				$token = strtok("&");
				$where .= "dog='$cat' or ";	
			}
			
			if($token == 'd') {
				$dog = '1';
				$token = strtok("&");
				$where .= "dog='$dog' or ";
			}
			
			if($token == '1') {
				$age1 = '1';
				$token = strtok("&");
				$where .= "age='$age1' or ";
			}
			
			if($token == '6') {
				$age2 = '6';
				$token = strtok("&");
				$where .= "age<='$age2' or ";
			}
			
			if($token == '12') {
				$age3 = '12';
				$token = strtok("&");
				$where .= "age<='$age3' or ";
			}
			
			if($token == '13') {
				$age4 = '13';
				$token = strtok("&");
				$where .= "age>='$age4' or ";
			}
			
			if($token == 'labrador') {
				$labrador = 'labrador';
				$token = strtok("&");
				$where .= "breed='$labrador' or ";
			}
			
			if($token == 'weinerdog') {
				$weinerdog = 'weinerdog';
				$token = strtok("&");
				$where .= "breed='$weinerdog' or ";
			}
			
			if($token == 'husky') {
				$husky = 'husky';
				$token = strtok("&");
				$where .= "breed='$husky' or ";
			}
			
			if($token == 'pug') {
				$pug = 'pug';
				$token = strtok("&");
				$where .= "breed='$pug' or ";
			}
			
			if($token == 'siemese') {
				$siemese = 'siemese';
				$token = strtok("&");
				$where .= "breed='$siemese' or ";
			}
			
			if($token == 'britishshorthair') {
				$britishshorthair = 'britishshorthair';
				$token = strtok("&");
				$where .= "breed='$britishshorthair' or ";
			}
			
			if($token == 'persian') {
				$persian = 'persian';
				$token = strtok("&");
				$where .= "breed='$persian' or ";
			}
			
			if($token == 'mainecoon') {
				$mainecoon = 'mainecoon';
				$token = strtok("&");
				$where .= "breed='$mainecoon' or ";
			}
			
			if($token == 'brown') {
				$brown = 'brown';
				$token = strtok("&");
				$where .= "color='$brown' or ";
			}
			
			if($token == 'black') {
				$black = 'black';
				$token = strtok("&");
				$where .= "color='$black' or ";
			}
			
			if($token == 'white') {
				$white = 'white';
				$token = strtok("&");
				$where .= "color='$white' or ";
			}
			
			if($token == 'other') {
				$other = 'other';
				$token = strtok("&");
				$where .= "color='$other' or ";
			}
			
			if($token == 'male') {
				$male = 'male';
				$token = strtok("&");
				$where .= "sex='$male' or ";
			}
			
			if($token == 'female') {
				$female = 'female';
				$token = strtok("&");
				$where .= "sex='$female' or ";
			}
			
			if($token == 'small') {
				$small = 'small';
				$token = strtok("&");
				$where .= "size='$small' or ";
			}
			
			if($token == 'medium') {
				$medium = 'medium';
				$token = strtok("&");
				$where .= "size='$medium' or ";
			}
			
			if($token == 'large') {
				$large = 'large';
				$token = strtok("&");
				$where .= "size='$large' or ";
			}
			
			if($token == 'xlarge') {
				$xlarge = 'xlarge';
				$token = strtok("&");
				$where .= "size='$xlarge' or ";
			}
		}
		
		//Remove the last or from the sql query.
		$where1 = rtrim($where, ' ');
		$where2 = rtrim($where1, 'r');
		$where3 = rtrim($where2, 'o');
		$where4 = rtrim($where3, ' ');
		
		$pet_sql = mysqli_query($connect, "SELECT * FROM pets WHERE $where4");  
	}	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Paw For You - Adopt</title>
  
  <!-- Bootstrap Core CSS -->
  <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/css/modern-business.css" rel="stylesheet">

  <!--Images for sign in and log in-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!--Images for the 4 tiles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Animation for pictures -->
  <link href="http://localhost/css/ihover.css" rel="stylesheet">
  
  <!-- jQuery -->
  <script src="http://localhost/js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="http://localhost/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
 	   <a href="http://localhost/index.php"><img class="navbar-brand" src="../images/white-paw.png"></a>
        <a class="navbar-brand" href="http://localhost/index.php" style="left">A Paw For You</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/index.php"> Home </a></li>
          <li class="active"><a href="http://localhost/main-pages/adopt.php"> Adopt </a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> FAQ <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/main-pages/catcare.php"> Kittens/Cats </a></li>
              <li><a href="http://localhost/main-pages/dogcare.php"> Puppies/Dogs </a></li>
            </ul>

		<?php
		
		if($login_session) {
			//Your account and login options available only once logged in
			echo '<li><a href="http://localhost/main-pages/account_admin.php"> Your Account </a></li>';
			echo '<li><a href="http://localhost/php/logout.php"> Logout </a></li>';
			
		} else {
			//Sign up option
			echo '<li><a href="http://localhost/main-pages/signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>';
			
			//Login dropdown without angularJS
			echo '<li class="dropdown">';
			echo '<a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login </a>';
			echo '<ul id="login-dp" class="dropdown-menu">';
			echo '<li>';
			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<form class="form" role="form" method="post" action="http://localhost/php/login.php" accept-charset="UTF-8" id="login-nav">';
			echo '<div class="form-group">';
			echo '<label class="sr-only" for="exampleInputEmail2"> Email address </label>';
			echo '<input type="email" name="login_email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>';
			echo '</div>';
			echo '<div class="form-group">';
			echo '<label class="sr-only" for="exampleInputPassword2"> Password </label>';
			echo '<input type="password" name="login_pword" class="form-control" id="exampleInputPassword2" placeholder="Password" required>';
			echo '<div class="help-block text-right"><a href="http://localhost/main-pages/signup.html"> Do not have an account? Sign Up </a>';
			echo '</div>';
			echo '</div>';
			echo '<div class="form-group">';
			echo '<button type="submit" class="btn btn-primary btn-block"> Submit </button>';
			echo '</div>';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			echo '</li>';
			echo '</ul>';
			echo '</li>';
			//End of login dropdown		
		}
		
		?>
		
       </ul> 
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <h1 class="page-header">Pet Adoption</h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/index.php">Home</a>
        </li>
        <li class="active">Adopt</li>
      </ol>
    </div>

    <!-- Content Row -->
    <!-- Sidebar Column -->
	<form action="http://localhost/php/filter.php" method="post">
	
    <div class="container">
      <div class="row">	  
        <div class="col-md-3">
					
  		  <?php
		  	
  		  if($admin) {
  			  echo '<a href="add_pet.html" class="btn btn-primary"> Add New Pet </a>';
			  echo '<br><br>';
  		  }
			
  		  ?>
		  
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Filters</h2>
            </div>

            <div class="list-group panel" id="contact_form">
				
            <a href="#demo4_2" class="list-group-item list-group-item-info" data-parent="#MainMenu2">Cat or Dog?</a>
            <div id="demo4_2">
              <a href="#" class="list-group-item">Cat <input type="checkbox" name="dog[]" value="c" class="pull-right"></a>
              <a href="#" class="list-group-item">Dog <input type="checkbox" name="dog[]" value="d" class="pull-right"></a>
            </div>
				
              <a href="#demo4_1" class="list-group-item list-group-item-info" data-parent="#MainMenu1">Age</a>
              <div  id="demo4_1">
                <a href="#" class="list-group-item">1 month <input type="checkbox" name="age[]" value="1" class="pull-right"></a>
                <a href="#" class="list-group-item">Less than 6 months <input type="checkbox" name="age[]" value="6" class="pull-right"></a>
                <a href="#" class="list-group-item">Less than 12 months <input type="checkbox" name="age[]" value="12" class="pull-right"></a>
                <a href="#" class="list-group-item">12 months or older <input type="checkbox" name="age[]" value="13" class="pull-right"></a>
              </div>

              <a href="#demo4" class="list-group-item list-group-item-info" data-parent="#MainMenu">Breed</a>
              <div  id="demo4">
                <a href="#" class="list-group-item">Labrador <input type="checkbox" name="breed[]" value="labrador" class="pull-right"></a>
                <a href="#" class="list-group-item">Weiner Dog <input type="checkbox" name="breed[]" value="weinerdog" class="pull-right"></a>
                <a href="#" class="list-group-item">Husky <input type="checkbox" name="breed[]" value="husky" class="pull-right"></a>
                <a href="#" class="list-group-item">Pug <input type="checkbox" name="breed[]" value="pug" class="pull-right"></a>
                <a href="#" class="list-group-item">Siemese <input type="checkbox" name="breed[]" value="siemese" class="pull-right"></a>
				<a href="#" class="list-group-item">British Shorthair <input type="checkbox" name="breed[]" value="britishshorthair" class="pull-right"></a>
				<a href="#" class="list-group-item">Persian Cat <input type="checkbox" name="breed[]" value="persian" class="pull-right"></a>
				<a href="#" class="list-group-item">Maine Coon <input type="checkbox" name="breed[]" value="mainecoon" class="pull-right"></a>
              </div>

              <a href="#demo4_4" class="list-group-item list-group-item-info" data-parent="#MainMenu4">Color</a>
              <div id="demo4_4">
                <a href="#" class="list-group-item">Brown <input type="checkbox" name="color[]" value="brown" class="pull-right"></a>
                <a href="#" class="list-group-item">Black <input type="checkbox" name="color[]" value="black" class="pull-right"></a>
                <a href="#" class="list-group-item">White <input type="checkbox" name="color[]" value="white" class="pull-right"></a>
                <a href="#" class="list-group-item">Other <input type="checkbox" name="color[]" value="other" class="pull-right"></a>
              </div>

              <a href="#demo4_2" class="list-group-item list-group-item-info" data-parent="#MainMenu2">Sex</a>
              <div id="demo4_2">
                <a href="#" class="list-group-item">Male <input type="checkbox" name="sex[]" value="male" class="pull-right"></a>
                <a href="#" class="list-group-item">Female <input type="checkbox" name="sex[]" value="female" class="pull-right"></a>
              </div>

              <a href="#demo4_3" class="list-group-item list-group-item-info" data-parent="#MainMenu3">Size</a>
              <div id="demo4_3">
                <a href="#" class="list-group-item">Small (25 lbs/11kg or less) <input type="checkbox" name="size[]" value="small" class="pull-right"></a>
                <a href="#" class="list-group-item">Medium (26-60 lbs/12-27 kg) <input type="checkbox" name="size[]" value="medium" class="pull-right"></a>
                <a href="#" class="list-group-item">Large (61-100 lbs/28-45 kg) <input type="checkbox" name="size[]" value="large" class="pull-right"></a>
                <a href="#" class="list-group-item">X-Large (101 lbs/46 kg or more) <input type="checkbox" name="size[]" value="xlarge" class="pull-right"></a>
              </div>

            </div>			
        </div>
		<button name="submit" type="submit" value="Submit" class="btn btn-primary"> Filter Search </button>
		<br><br>
		<a class="btn btn-primary" href="http://localhost/main-pages/adopt.php"> Clear Filter </a>
        </div>
		
	</form>
	
        <!-- Pet Images measurement of 750 x 450-->
		<?php
			
		while ($pet_row = mysqli_fetch_array($pet_sql)) {
			echo '<div class="col-md-7 img-portfolio img-hover ih-item square effect3 bottom_to_top">';
		    echo '<a href="pet_info.php?'. $pet_row['pname'] . '">';
		    
			echo '<div class="info">';
			echo "<h3>" . $pet_row['pname'] . "</h3>";
			//Mark pet as adopted if it has been adopted by a user.
			if($pet_row['adopted']) {
				echo '<p>adoption pending: unavailable for adoption<p>';
			} else {
				echo '<p>click for more information<p>';
			}	
			echo '</div>';
			
			echo '<img src="data:image/jpeg;base64,'.base64_encode($pet_row['image']).'"/>'; 
			echo '</a>';
			echo '</div>';
			
		}
		
		?>
      <!-- /.row -->
      </div>
      </div>
  <!-- /.container -->
  
  <!-- Footer -->
    <footer class="footer">
  <hr>
      <div class="container">
        <p class="text-muted"><strong>Contact Us</strong></p>
        <p class="text-muted"><i class="fa fa-map-pin"></i>  11200 SW 8th St, Miami, FL 33199</p>
        <p class="text-muted"><i class="fa fa-phone"></i>  Phone: (555) 555-5555</p>
        <p class="text-muted"><i class="fa fa-envelope"></i>  E-mail: moreinfo@pawforyou.com</p>
          <div class=" pull-right">
          <p>Copyright &copy; A Paw For You 2017</p>
		<br>
        </div>
      </div>
    </footer>
	
</body>

</html>