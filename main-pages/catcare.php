<?php
	include("../php/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Paw for You - FAQ for Cats</title>

  <!-- Bootstrap Core CSS -->
  <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/css/modern-business.css" rel="stylesheet">

  <!--Images for sign in and log in-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!--Images for the 4 tiles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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

          <li class="dropdown active">
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

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">FAQ <small>For Cats</small></h1>
        <ol class="breadcrumb">
          <li><a href="http://localhost/index.php">Home</a>
          </li>
          <li class="active">FAQ For Cats</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> What type(s) of identify should my cats(s) have?</a>
                            </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                There are two options we recommend:
                <br> External Identification: Outfit your cat with a collar and ID tag that includes your name, address and telephone number. No matter how careful you are, there's a chance your companion may become lost—an ID tag greatly increases the chance
                that your pet will be returned home safely. The cat’s collar should not be tight; it should fit so two fingers can slip easily under his collar.
                <br>
                <br>Microchip Identification: Have your cat microchipped by your veterinarian. Microchip ID will ensure that your cat will be returned to you if he is lost, even if their collar came off. When scanned by a veterinarian or animal shelter, your
                phone number, address and other vital information will appear, and you can be contacted.

              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">This is my first kitten/cat. What will I need to get?</a>
                            </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                You will need the following: a cat carrier, cat litter, litter box and scoop, high quality cat food, food dish, water dish, cat bed or a box with a clean blanket or towel, toys, and a sturdy scratching post (at least three feet tall) or scratching pad.
                You should also acquire a brush, comb, and nail clippers.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Were any vaccinations given? What shots will be needed and at what age?</a>
                            </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Kittens need shots for Rabies at 16 weeks and then 1-3 years thereafter depending on the type of vaccine. Your new kitten/cat should get shots for FVRCP (Feline Viral Rhinotracheitis), Calici, Panleukopenia (distemper), feline leukemia virus, and rabies.
                The shelter routinely provides your new pet with a rabies shot (as long as the animal is 4 months or older), a first distemper shot, and a first worming. You should check with your veterinarian regarding other necessary vaccinations.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What tests should I have done to my cat?</a>
                            </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                Your new cat should be tested by your veterinarian for Feline Leukemia and Feline AIDS before the new cat is introduced to any other cats you may have. Keep the new animal separate until this test is done. Kittens should be at least four months old before
                being tested to ensure the test’s accuracy. It is also advised that your new cat be checked for worms.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> When should my cat be spayed/neutered?</a>
                            </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                Spaying or neutering your cat will decrease its aggressive behavior and prevent urine spraying in male cats and breast cancer in female cats. The average age at which a kitten should be spayed/neutered is 4 to 6 months. Check with your veterinarian. Adult
                cats, if unaltered, should be done as soon as possible.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"> Can you recommend a veterinarian that participates in the State low-cost
spay/neuter program? When is this offered and what will it cost?</a>
                            </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                The shelter can provide a pamphlet that lists all veterinarians that participate in the State program. Funds are issued on a quarterly basis (January 1, April 1, July 1, and October 1) and the charge for the spay/neuter procedure is $20.00. Proof of a
                rabies shot is required. It is advised that you schedule the spay/neuter early in the quarter so that funds are still available.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">What about declawing?</a>
                            </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                Claws play an important part in a cat’s life. If a cat gets out accidentally, it will need its claws to protect itself against predators. A declawed cat is not safe outdoors. The decision to declaw is up to the individual owner. If you are concerned about
                your furniture, you can train your cat to use a scratching post. This will reduce incidences of unwanted scratching. For more information about declawing and what it involves, you should speak to your veterinarian.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"> What should I feed my kitten/cat?</a>
                            </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
              <div class="panel-body">
                You should feed your cat a high quality cat food. Kittens require a separate diet and most cat food brands have “kitten food” versions. Kittens should be fed three times a day until 6 months old, then twice daily. Do not overfeed your cat and avoid giving
                it human food except as an occasional treat. Tuna for humans should not be given as it contains too much ash. Always provide your cat with fresh water. Milk is unnecessary, as most cats are lactose intolerant, and milk can cause an upset
                stomach or diarrhea.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine"> Will my cat use the litter box right away?</a>
                            </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
              <div class="panel-body">
                Most cats/kittens will understand how to use the litter box. If your kitten is too young, you can teach it by confining it to one room so that access to the litter box is easy. Show your kitten “how to” by rotating its shoulders and making its paws scratch
                in the litter. Place your kitten in the litter box upon awakening, after meals, and just before bed. Remember that cats will not use a messy or smelly litter box, so make sure the box is kept clean. This will help prevent any health problems
                or “accidents” outside the box. Note: If your kitten/cat constantly goes outside a clean litter box, you should see a veterinarian as soon as possible to check for any health or kidney problems.
              </div>
            </div>
          </div>
          <!-- /.panel -->

          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Is it okay for my kitten/cat to go outdoors?</a>
                            </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
              <div class="panel-body">
                A cat that has never been outdoors will have no desire to go out, and if you love and value your cat, you will never let your cat outdoors unless he/she is with you in a carrier. Unattended, the odds are that your cat will get lost, be run over, poisoned,
                shot at or stolen. There is also a danger of your pet picking up diseases from other animals, along with fleas, ear mites, fungus skin diseases or intestinal parasites. By fighting with other cats, your cat may develop abscesses due to
                bites. You should keep your cat in clean quarters, properly fed, and indoors. Local ordinances may prohibit allowing your cat outside.
              </div>
            </div>
          </div>


          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">How do I introduce my new kitten/cat to my other pet(s)?</a>
                            </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
              <div class="panel-body">
                It depends on the temperament and ages of the animals involved. However, this method should work: Confine the new cat to its own room with a litter box, food, water, and a bed so that the original cat can smell the new one, but not see it. After a day
                or so, remove the new cat from the room and let the original cat explore that room thoroughly. Put the new cat back in. Once it is eating and using its litter box regularly, let the new cat explore the house while the original cat is confined.
                This switch allows the new cat to become familiar with its environment and experience the other cat’s scent before a faceto-face meeting. Depending on the reactions involved, let the cat out to meet the original pet under supervision.
                Make sure there is a safe “retreat” for each animal.
                <br>
                <br> Modify the length of time and amount of supervision based on how the cats react. Expect hissing, spitting, or growling. This is normal during the initial encounters. If a fight breaks out, do not interfere directly. Instead throw a blanket
                over each cat before you pick him or her up, and keep him or her separate until they have calmed down. Some forms of cat playing may seem hostile but actually isn’t. If the fighting immediately stops when one yelps or squeaks, they are
                okay. The key to the process is patience. Don’t give up and don’t lose your temper. In time, most animals will work things out.
              </div>
            </div>
          </div>

        </div>
        <!-- /.panel-group -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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