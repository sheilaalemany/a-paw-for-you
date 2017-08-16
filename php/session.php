<?php

   //Grab client information from the database
   include('connect_database.php');
   session_start();
   
   $user_check = $_SESSION['global_email'];
   
   $ses_sql = mysqli_query($connect, "SELECT * FROM accounts
		        WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $login_session = $row['email']; 
   $admin = $row['admin'];
   
   //Grab all pet information from the database
   $pet_sql = mysqli_query($connect, "SELECT * FROM pets");  
   
?>