<?php
	include("../php/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Paw For You - Your Account</title>

  <!-- Bootstrap Core CSS -->
  <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">

  <!--Images for sign in and log in-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!--Images for the 4 tiles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link href="http://localhost/css/modern-business.css" rel="stylesheet">
  
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
          <li><a href="http://localhost/main-pages/adopt.php"> Adopt </a></li>	  
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> FAQ <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/main-pages/catcare.php"> Kittens/Cats </a></li>
              <li><a href="http://localhost/main-pages/dogcare.php"> Puppies/Dogs </a></li>
            </ul>
		  </li>		   
          <li class="active"><a href="http://localhost/main-pages/account_admin.php"> Your Account </a></li>		   
		  <li><a href="http://localhost/php/logout.php"> Logout </a></li>
        </ul>       
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->	
    <div class="row">
      <h1 class="page-header">Account Information</h1>
      <ol class="breadcrumb">       
        <li><a href="http://localhost/index.php"> Home </a></li>
        <li class="active"> Your Account </a></li>
      </ol>
    </div>
    <!-- /.row -->

      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Your Account</h3>
        </div>
		
        <div class="panel-body">
          <div class="row">
              <table class="table table-user-information">
                <tbody>
       			 
				  <tr><th>Contact Information:</th><td></td></tr>
				  
                  <tr>
                    <td>First Name:</td><td><?php echo $row['fname']; ?></td>
                  </tr>
                  <tr>
                    <td>Last Name:</td><td><?php echo $row['lname']; ?></td>
                  </tr>
                  <tr>
                    <td>Address:</td><td><?php echo $row['address']; ?></td>
                  </tr>
                  <tr>
                    <td>Phone Number:</td><td><?php echo $row['phone']; ?></td>
                  </tr>
                  <tr>
                     <td>Occupation:</td><td><?php echo $row['job']; ?></td>
                  </tr>
                  <tr>
                     <td>Email:</td><td><?php echo $row['email']; ?><br><br><br></td>
                  </tr>
				  
                  <tr><th>Family & Housing:</th><td></td></tr>
  			  
                  <tr>
                     <td>Number of Adults in Family:</td><td><?php echo $row['adultnum']; ?></td>
                  </tr>
                  <tr>
                     <td>Home Type:</td><td><?php echo $row['hometype']; ?></td>
                  </tr>
                  <tr>
                     <td>Househould Description:</td><td><?php echo $row['homenoise']; ?></td>
                  </tr>
                  <tr>
                     <td>Provide love:</td><td>Yes<br><br><br></td>
                  </tr>     
                 
                  <tr><th>Additional Pets:</th><td></td></tr>
                  
                  <tr>
                      <td>Number of Pets Owned:</td><td><?php echo $row['petnum']; ?></td>
                  </tr>
                  <tr>
                      <td>Surrendered Pet:</td><td>No</td>
                  </tr>
                  <tr>
                      <td>Lost Pet to Accident:</td><td>No</td>
                  </tr>
				  
                </tbody>
              </table>
          </div>
        </div>
        <div class="panel-footer">			
			<?php
				
			if($admin) { //Can only add new administrator if the user is an administrator.
				echo '<a href="http://localhost/main-pages/add_admin.html" class="btn btn-primary">Add New Administrator</a>';
			}
			
			?>				
			<a href="http://localhost/main-pages/modify_profile.php" class="btn btn-primary">Modify Profile</a>			
        </div>

    </div>
  </div>
  <!-- /.container -->
  </div>
  
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