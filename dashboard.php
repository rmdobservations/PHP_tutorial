 <?php
 // allow config
define('__CONFIG__',true); 
 require_once "inc/config.php"; 

 //ForceLogin();
Page::ForceLogin(); 
 // this works because we have gotten past forcelogin

 $User= new User((int) $_SESSION['user_id']);
 

 
 
 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Dashboard</title>

   <!--  <base href="/" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  	<h2>Dashboard</h2>
<p>Hello <?php echo $User->email;?>, 
	you registered at <?php echo $User->reg_time; ?></p>
  	
<p>   	<a href="logout.php">Log out</a>
</p>

<!--   		<p>You are signed in as user: <?php echo isset($_SESSION['user_id']) ? ' ' . implode(" ",$_SESSION['user_id']) :  'aaaaaaaa';?></p> -->


  	</div>
 <?php

  require_once "inc/footer.php"; ?> 
  
  </body>
</html>
