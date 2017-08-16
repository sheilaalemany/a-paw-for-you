<?php
	include("../php/session.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>A Paw For You - Modify Profile</title>

 <!-- Bootstrap Core CSS -->
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet prefetch" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
 <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--Images for sign in and log in-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <!-- Custom CSS -->
 <link href="../css/modern-business.css" rel="stylesheet">
 <link href="../css/style.css" rel="stylesheet">

 <!-- Bootstrap JavaScript -->
 <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
 <script src="../js/signup_validation.js"></script>
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
            <li>
              <a href="http://localhost/index.php"> Home </a>
            </li>

            <li>
              <a href="http://localhost/main-pages/adopt.php"> Adopt </a>
            </li>
		  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> FAQ <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="http://localhost/main-pages/catcare.php"> Kittens/Cats </a>
                </li>
                <li>
                  <a href="http://localhost/main-pages/dogcare.php"> Puppies/Dogs </a>
                </li>
              </ul>
  		   </li>
		   
             <li><a href="http://localhost/main-pages/account_admin.php"> Your Account </a></li>
		   
  		   <li><a href="http://localhost/php/logout.php"> Logout </a></li>
          </ul>       
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
	
    <!-- PAGE HEADER -->
    <div class="container"><div class="row">
        <h1 class="page-header"> Modify Profile </h1>
        <ol class="breadcrumb">
          <li><a href="http://localhost/index.php"> Home </a></li>
          <li><a href="http://localhost/main-pages/account_admin.php"> Your Account </a></li>
		  <li class="active"> Modify Profile </li>
        </ol>
    </div></div>
	
	  	<div class="container"><div class="row">

	        <form name="signup-form" class="well form-horizontal" action="http://localhost/php/update_account.php" method="post"  id="contact_form">
	    <fieldset>

	    <!-- Form Name -->
	    <legend>Contact Information</legend>

	    <!-- First name field -->
	    <div class="form-group">
	      <label class="col-md-4 control-label">First Name</label>  
	      <div class="col-md-4 inputGroupContainer">
	      <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      <input  name="fname" placeholder="<?php echo $row['fname']; ?>" class="form-control"  type="text">
	        </div>
	      </div>
	    </div>

	    <!-- Last name field -->
	    <div class="form-group">
	      <label class="col-md-4 control-label">Last Name</label> 
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      <input name="lname" placeholder="<?php echo $row['lname']; ?>" class="form-control"  type="text">
	        </div>
	      </div>
	    </div>

	    <!-- Address -->
	    <div class="form-group">
	      <label class="col-md-4 control-label">Address</label>  
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
	      <input name="address" placeholder="<?php echo $row['address']; ?>" class="form-control" type="text">
	        </div>
	      </div>
	    </div>
  
	    <!-- Phone number -->  
	    <div class="form-group">
	      <label class="col-md-4 control-label">Phone Number</label>  
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	      <input name="phone" placeholder="<?php echo $row['phone']; ?>" class="form-control" type="text">
	        </div>
	      </div>
	    </div>
  
	    <!-- Occupation field -->
	    <div class="form-group">
	      <label class="col-md-4 control-label">Occupation</label>  
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
	      <input name="job" placeholder="<?php echo $row['job']; ?>" class="form-control" type="text">
	        </div>
	      </div>
	    </div>

	    <!-- Password fields -->
	    <div class="form-group" id="password">
	      <label class="col-md-4 control-label">Password</label>  
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
	      <input type="password" class="form-control" placeholder="<?php echo $row['pword']; ?>" name="pword">
	        </div>
	      </div>
	    </div>
  
	    <legend>Family & Housing</legend>
  
	    <!-- Number of pets per family-->
	    <div class="form-group">
	      <label class="col-md-4 control-label">How many adults are there in your family?</label>  
	        <div class="col-md-4 inputGroupContainer">
	        <div class="input-group">
	            <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
	      <input name="adultnum" placeholder="<?php echo $row['adultnum']; ?>" class="form-control" type="number">
	        </div>
	      </div>
	    </div>

	    <!-- Home type -->
	     <div class="form-group">
	        <label class="col-md-4 control-label">What type of home do you live in?</label>
	            <div class="col-md-4">
	            <div class="radio"> <label><input type="radio" name="hometype" value="House" /> House </label></div>
	            <div class="radio"><label><input type="radio" name="hometype" value="Apartment" /> Apartment </label></div>
	  		  <div class="radio"><label><input type="radio" name="hometype" value="Duplex" /> Duplex </label></div>
	  		  <div class="radio"><label><input type="radio" name="hometype" value="Farm" /> Farm </label></div>
	  		  <div class="radio"><label><input type="radio" name="hometype" value="Trailerpark" /> Trailer Park </label></div>
	            </div>
	     </div>
   
	     <!-- Home noise -->
	      <div class="form-group">
	         <label class="col-md-4 control-label">How would you describe your household?</label>
	             <div class="col-md-4">
	             <div class="radio"> <label><input type="radio" name="homenoise" value="Active" /> Active </label></div>
	             <div class="radio"><label><input type="radio" name="homenoise" value="Noisy" /> Noisy </label></div>
	   		  <div class="radio"><label><input type="radio" name="homenoise" value="Quiet" /> Quiet </label></div>
	   		  <div class="radio"><label><input type="radio" name="homenoise" value="Average" /> Average </label></div>
	             </div>
	      </div>
	
	      <!-- Love -->
	       <div class="form-group">
	          <label class="col-md-4 control-label">Do you have time to provide adequate love and attention?</label>
	              <div class="col-md-4">
	              <div class="radio"> <label><input type="radio" name="love" value="1" /> Yes </label></div>
	              <div class="radio"><label><input type="radio" name="love" value="0" /> No </label></div>
	              </div>
	       </div>
	 
	  	 <legend>Additional Pets</legend>
	 
	  	 <!-- Current pet number -->
	       <div class="form-group">
	         <label class="col-md-4 control-label">How many pets do you currently have?</label>  
	           <div class="col-md-4 inputGroupContainer">
	           <div class="input-group">
	               <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
	         <input name="petnum" placeholder="<?php echo $row['petnum']; ?>" class="form-control" type="number">
	           </div>
	         </div>
	       </div>
	 
	       <!-- Bad owner? -->
	        <div class="form-group">
	           <label class="col-md-4 control-label">Have you ever surrendered a pet?</label>
	               <div class="col-md-4">
	               <div class="radio"> <label><input type="radio" name="badowner" value="1" /> Yes </label></div>
	               <div class="radio"><label><input type="radio" name="badowner" value="0" /> No </label></div>
	               </div>
	        </div>
	  
	        <!-- Horrible owner? -->
	         <div class="form-group">
	            <label class="col-md-4 control-label">Have you ever lost a pet to an accident?</label>
	                <div class="col-md-4">
	                <div class="radio"> <label><input type="radio" name="worstowner" value="1" /> Yes </label></div>
	                <div class="radio"><label><input type="radio" name="worstowner" value="0" /> No </label></div>
	                </div>
	         </div>
	 
	    <!-- Button -->
	    <div class="form-group">
	      <label class="col-md-4 control-label"></label>
	      <div class="col-md-4">
	        <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-send"></span></button>
	  	  	<a href="http://localhost/main-pages/modify_profile.php" class="btn btn-warning" role="button">Reset</a>
	        <a href="http://localhost/index.php" class="btn btn-danger" role="button">Cancel</a>
	      </div>
	    </div>

	    </fieldset>
	    </form>
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