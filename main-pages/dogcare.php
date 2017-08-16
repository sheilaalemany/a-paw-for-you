<?php
	include("../php/session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Paw for You - FAQ for Dogs</title>

  <!-- Bootstrap Core CSS -->
  <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
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
        <h1 class="page-header">FAQ <small>For Dogs</small></h1>
        <ol class="breadcrumb">
          <li><a href="http://localhost/index.php">Home</a></li>
          <li class="active">FAQ For Dogs</li>
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
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> What type(s) of identification should my dog(s) have?</a>
                            </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                There are two options we recommend:
                <br> External Identification: Outfit your dog with a collar and ID tag that includes your name, address and telephone number. No matter how careful you are, there's a chance your companion may become lost—an ID tag greatly increases the chance
                that your pet will be returned home safely. The dog’s collar should not be tight; it should fit so two fingers can slip easily under his collar.
                <br>
                <br>Microchip Identification: Have your dog microchipped by your veterinarian. Microchip ID will ensure that your dog will be returned to you if he is lost, even if their collar came off. When scanned by a veterinarian or animal shelter, your
                phone number, address and other vital information will appear, and you can be contacted.

              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">This is my first puppy/dog. What will I need to get?</a>
                            </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                You will need to get a collar, leash, ID tags, puppy/dog food, food and water dishes, dog bed with clean blanket or towel, and chew toys (nylon or sterilized bones.) You will also need a crate for training purposes.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">When you're off your property should you keep your dog on a leash?</a>
                            </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Even a dog with a valid license, rabies tag and ID tag should not be allowed to roam outside of your home or fenced yard. It is best for you, your community and your dog to keep them on a leash and under your control at all times.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Should I spay or neuter my dog(s)?</a>
                            </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                Dogs who have this routine surgery tend to live longer, be healthier and have fewer behavior problems (e.g., biting or running away). By spaying or neutering your dog, you are also doing your part to reduce the problem of pet overpopulation. If you feel
                you can't afford to have your pet spayed or neutered, we can help you find low-cost options.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> Should I adopt a puppy or an adult dog?</a>
                            </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                Adult dogs are often a good choice because they don’t need as much of your time as a puppy would. It is also easier to tell what the dog will be like if it is already an adult. There are fewer surprises with an adult dog. However, you need to consider
                which fits best with your family, your other pets, and your lifestyle.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"> When should my dog/puppy be spayed/neutered? Can the shelter recommend a
veterinarian that participates in the State low-cost spay/neuter program? </a>
                            </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                A puppy should be spayed/neutered between 4-6 months of age. Adult dogs should be spayed/neutered at the earliest opportunity. The shelter can provide a pamphlet that lists all veterinarians that participate in the State low-cost spay/neuter program.
                Funds for the program are issued on a quarterly basis (January 1, April 1, July 1, and October 1) and the charge for the spay/neuter procedure is $20.00. Proof of a rabies shot is required. It is advised that you schedule the spay/neuter
                early in the quarter so that funds are still available.

              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How big will he/she get?</a>
                            </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                The size will depend on the breed of the dog. Puppies of different breeds grow at different rates. The guide often given is to look at the puppy’s feet. Big feet denote that it is going to grow into a big dog. By the time the dog is ten months old, he
                or she has done 80% of its growing.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight"> How old should a puppy be when it is first vaccinated?</a>
                            </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
              <div class="panel-body">
                Puppies usually lose all maternal antibodies at around six weeks old, so this is a good time to start vaccinations. You veterinarian will advise you on which vaccinations are necessary.
              </div>
            </div>
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">What are the most common parasites that dogs get?</a>
                            </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
              <div class="panel-body">
                Fleas, ticks, ear mites, roundworms, and tapeworms.
              </div>
            </div>
          </div>
          <!-- /.panel -->

          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> We want a second dog. Will he/she get along with the existing pet(s) in our
house?</a>
                            </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
              <div class="panel-body">
                It depends on each dog’s temperament. It is also best to add a dog of the opposite sex, as the existing dog is more likely to get along with a dog of the opposite gender. A good idea is to bring your dog to the shelter to see how they interact before
                you bring the new dog home. Most older dogs will adjust to a puppy, although temporary problems can occur. The owner can avoid conflict by giving more affection to the resident and dominant dog, thereby confirming hierarchy and stabilizing
                the relationship. When an older dog is introduced where another adult dog is already present, order of dominance has to be determined. There may be some initial fights over territory, food, and toys. It may be settled in a single encounter,
                or it may last awhile before being resolved.
                <br>
                <br> Introduction of a dog where there is a cat present may result in behavioral problems on the part of the cat. If affection is lavished on the cat, and the two pets are fed separately, they will in most instances come to tolerate each other.
                It is important that the cat be provided with a safe place to retreat to from which it can access its food and litter box without being harassed by the dog.
              </div>
            </div>
          </div>


          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Will he/she be friendly and easy to introduce to my children?</a>
                            </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
              <div class="panel-body">
                A child under 9 years old should not be left alone with a dog. A child should always have their face higher than a dog’s. Do not approach head-on; approach from the side so the dog has a chance to check you out first. Don’t let your children tease the
                dog, and encourage your children to close their hands into a fist so that the dog can sniff the back of their hand (palm down.) It is a good idea to see how your child and the dog interact at the shelter before you bring the dog home.
                In general there are no problems between dogs and babies because the dog accepts the new baby as a member of the pack. To avoid any instances of jealousy, it is important that the dog continue to receive attention and affection, particularly
                when the baby is present.
              </div>
            </div>
          </div>

          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve"> How do I housebreak him/her?</a>
                            </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse">
              <div class="panel-body">
                Crate training is recommended. Make sure you buy the right size crate. The dog is placed in a cage just large enough to be a bed (dogs don’t like to soil their beds.) Too large a crate can often cause long-term problems, as the dog/puppy will go to one
                corner of the cage to urinate or defecate. One suggestion is to purchase a crate that comes with a divider panel as an accessory. This allows you to adjust the position of the space available. The last thing you do before you put the dog
                in the crate is to take him outside to his favorite spot. When you take him out of the crate, the first thing should be another trip outside. No food or water should be placed in the crate, just a blanket and a chew toy. However, if the
                dog is in the crate all day, water must be provided.
              </div>
            </div>
          </div>

          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">Is it okay to keep my dog outside all day?</a>
                            </h4>
            </div>
            <div id="collapseThirteen" class="panel-collapse collapse">
              <div class="panel-body">
                No. Dogs by nature are social animals and are fond of company. Young dogs in particular become extremely lonely and bored when left alone for long periods of time. A dog may resort to destructive behavior when not given enough attention.
              </div>
            </div>
          </div>

          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">What should I feed my new dog/puppy?</a>
                            </h4>
            </div>
            <div id="collapseFourteen" class="panel-collapse collapse">
              <div class="panel-body">
                After considering dozens of criteria, we determined that the best puppy/dog foods should contain:
                <br>
                <br> No controversial chemical preservatives
                <br> No anonymous meat ingredients
                <br> No artificial coloring agents
                <br> No generic animal fats
                <br> Substantial amounts of meat-based protein
                <br> Reasonable fat-to-protein ratios
                <br> Modest carbohydrate content
                <br> Low in corn
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
          <div class="pull-right">
          <p>Copyright &copy; A Paw For You 2017</p>
		<br>
        </div>
      </div>
    </footer>
  
</body>
</html>