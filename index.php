<?php
	include("php/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Paw For You</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!--Images for sign in and log in-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!--Images for the 4 tiles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">
  
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
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
          <li class="active"><a href="http://localhost/index.php"> Home </a></li>
          <li><a href="http://localhost/main-pages/adopt.php"> Adopt </a></li>

          <li>
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
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- End of navigation code -->

  <br>
  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12"><h1 class="page-header">A Paw For You <small>Find Your Ideal Pet</small></h1></div>
    </div>
    <!-- /.row -->

    <br>
    <!-- Image Header -->
    <div class="container">
      <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active"><img src="http://donauvillino.de/images/content/headline_slicer/litter/p/20151117_02.jpg" alt="puppies" width="1200" height="300"></div>
          <div class="item"><img src="http://mainecoonadoptions.com/wp-content/uploads/2016/02/banner-1200-heidi-hamilton-1200x300.jpg" alt="kittens" width="1200" height="300"></div>
          <div class="item"><img src="http://plymouthvet.com/wp-content/uploads/2016/03/Nose-To-Nose-1200x300.jpg" alt="Flower" width="1200" height="300"></div>
          <div class="item"><img src="https://petnetwork.org/sites/default/files/pictures/donate-banner.jpg" alt="Flower" width="1200" height="300"></div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Adoption Fee Covers Panels -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header">Adoption Fee Covers</h2>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-medkit fa-stack-1x fa-inverse"></i>
                        </span>
          </div>
          <div class="panel-body">
            <h4>Vaccination</h4>
            <p>Pets will be vaccinated with all relevant vaccines.</p>
            <a href="#covered-one" class="btn btn-primary">Learn More</a>
            <!--Scroll down to tab section-->
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <span class="fa-stack fa-5x">
                  <i class="fa fa-bug fa-stack-1x text-black"></i>
                  <i class="fa fa-ban fa-stack-2x text-danger"></i>
            </span>
          </div>
          <div class="panel-body">
            <h4>Parasite Free</h4>
            <p>They will be free of any parasite such as fleas/ticks.</p>
            <a href="#covered-one" class="btn btn-primary">Learn More</a>
            <!--Scroll down to tab section-->
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <span class="fa-stack fa-5x">
                  <i class="fa fa-circle fa-stack-2x text-success"></i>
                  <i class="fa fa-paw fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="panel-body">
            <h4>Identification</h4>
            <p>An identification tag for the pet; microchipping is recommended.</p>
            <a href="#covered-one" class="btn btn-primary">Learn More</a>
            <!--Scroll down to tab section-->
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <span class="fa-stack fa-5x">
                 <i class="fa fa-circle fa-stack-2x text-success"></i>
                 <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="panel-body">
            <h4>Health</h4>
            <p>Pets have undergone test(s) to ensure they are healthy.</p>
            <a href="#covered-one" class="btn btn-primary">Learn More</a>
            <!--Scrolls down to tab section -->
          </div>
        </div>
      </div>
    </div>
    <!--End of Adoption section -->

    <!--Start of the About section -->
    <h2 class="page-header">About Us</h2>
    <p>A Paw for You is an online, searchable database of animals who need homes. It is also a directory of nearly 14,000 animal shelters and adoption organizations across the U.S., Canada and Mexico. Organizations maintain their own home pages and available
      pet databases.</p>

    <h3>Our mission</h3>
    <p>To use Internet technology and the resources it can generate to:</p>
    <p>1. Increase public awareness of the availability of high-quality adoptable pets</p>
    <p>2. Increase the overall effectiveness of pet adoption programs across North America to the extent that the euthanasia of adoptable pets is eliminated</p>
    <p>3. Elevate the status of pets to that of family member</p>
    <p>From the comfort of their personal computers, pet lovers can search for a pet that best matches their needs. They can then reference a shelter’s web page and discover what services it offers. Petfinder also includes discussion forums, a pet-care resource
      directory and a library of free pet-care articles to help keep pets in their homes.</p>
    <!-- End of about section -->

   <!-- Service Tabs -->
   <div class="row">
     <h2 class="page-header">Cost Breakdown</h2>
     <div class="col-lg-12">
         <div class="" id="covered-one">
           <h4 class="fa fa-medkit fa-stack-2x text-success page-header"> Vaccination Cost Breakdown</h4><br><br><br><br>
           <p>The overall cost of vaccinations depends on the initial overall health of the pet when they first arrived at the shelter,
           the pet's age, and if the pet is missing or has their vaccinations. The cost will start at the lower cost but may rise
           up to the maximum cost should the pet be in worse conditions.</p>
           <p>Veterinary wellness visit and exam $50-$100
             <br> Distemper vaccination $20-$30×2
             <br> Rabies vaccination $15-$25</p> 
         </div>

         <div class="" id="covered-two">
           <h4 class="fa fa-bug fa-stack-2x text-danger page-header"> Parasite Cost Breakdown</h4><br><br><br><br>
           <p>The overall cost of parasite treatments will depend on the condition of the pet when they first arrived at the shelter,
   how long they have had parasites. If they contracted a disease from the parasites the cost of their health cost will rise.  The cost will start at the lower cost but may rise
           up to the maximum cost should the pet be in worse conditions.</p>
           <p>Flea/tick treatment $50-$200
             <br> Deworming $20-$50</p>
         </div>

         <div class="" id="covered-three">
           <h4 class="fa fa-paw fa-stack-2x text-success page-header"> Identification Cost Breakdown</h4><br><br><br><br>
           <p>The cost to microchip your pet is optional but, is highly recommended given that it makes it easier to find your pet should they get 
           lost while ensuring your pet is returned and not kept at a shelter. The collar and an identification tag are 
           mandatory for pets to have when outside, the cost differs depending on how many tags are needed. 
           One tag to show your pet it properly neutered, for the rabies shot, and another with the owner's contact information. </p>
           <p>Microchip $50
             <br> Collar and an identification tag $5-$10
           </p>
         </div>

         <div class="" id="covered-four">
           <h4 class="fa fa-heartbeat fa-stack-2x text-danger page-header"> Health Cost Breakdown</h4><br><br><br><br>
           <p>The health cost will vary if you wish to have your pet spayed or neutered, the price changes according to the age, 
           weight and any health issues your pet may have. Owners who decide to not spay or neuter their animal will have to pay a fine 
           to the government. Felines that had Leukemia will be charged according to how severe it was. Dogs that had heartworms 
           will also be charged according to how severe it was.</p>
           <p> Spaying or neutering $150-$300
             <br> Feline Leukemia/FIV test (for cats) $30-$50
             <br> Heartworm test (for dogs) $15-$35</p>
         </div>
       </div>
     </div>
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