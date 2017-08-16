<?php
    include("../php/connect_database.php");
	include("../php/session.php"); //To check if the user is logged in.
	
	//Grabs the pet ID to display the information of the specific pet.
	$pet = $_SERVER['QUERY_STRING'];
		
	$result = mysqli_query($connect, "SELECT * FROM pets
			        WHERE pname = '$pet'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <title>A Paw For You - <?php echo $row['pname']; ?></title>

  <!-- Custom CSS -->
  <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--Images for sign in and log in-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
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
  <!-- End of navigation-->
  
<!-- Page Content -->
<div class="container">
<div class="row">
<div class="col-lg-12">
 	<h1 class="page-header">Adopt <small>Pet Portfolio: <?php echo $row['pname']; ?></small></h1>
	<ol class="breadcrumb">
          <li><a href="http://localhost/index.php">Home</a></li>
          <li><a href="http://localhost/main-pages/adopt.php">Adopt</a></li>
          <li class="active">Pet Portfolio</li>
 	</ol>
</div>
</div>

<!-- Portfolio Item Row -->
<div class="row">
<div class="col-md-8">
<div class="col-md-3 img-portfolio">
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';?>
</div>
</div>

<div class="col-md-4">
<h3>Pet Description</h3>
<p><?php echo $row['description']; ?></p>
<h3>Pet Details</h3>
<ul>
	<li><?php echo $row['age']; ?> month(s) old</li>
	<li><?php echo $row['breed']; ?></li>
	<li><?php echo $row['color']; ?></li>
	<li><?php echo $row['sex']; ?></li>
	<li><?php echo $row['size']; ?></li>
</ul>
<br>
           
<?php

	echo '<div class="container-fluid">';
	echo '<div class="row-fluid">';
	echo '<div class="span2" ng-app="adopt" ng-controller="mainController">';
	echo '<form method="post" class="col-md-5">';

	if($login_session) {	
		
		if(!$row['adopted']) {
			echo '<a class="btn btn-primary" href="http://localhost/php/adopt_pet.php?'. $pet .'&1&'. $login_session .'"> Adopt Pet </a>';
			echo '<br><br>';
		}
		
		if($admin) {
			echo '<a class="btn btn-danger" href="http://localhost/php/remove_pet.php?'. $pet. '"> Remove Pet </a>';
			echo '<br><br>';
		}	
	}
	
	echo '</form>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
?>

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
        <p>Copyright &copy; A Paw For You 2017</p><br>
        </div>
    </div>
</footer>

</body>
</html>