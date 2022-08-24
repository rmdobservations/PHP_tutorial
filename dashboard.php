 <?php
 // allow config
define('__CONFIG__',true); 
 require_once "inc/config.php"; 
//echo 'Session number ' . $_SESSION['user_id'] . 'is your user id';
//exit;
 ForceLogin();
 // save this for info
 // echo isset($_SESSION['user_id']) ? 'welcome '.implode(" ",$_SESSION['user_id']) :  'aaaaaaaa';

 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Dashboard</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<h4>this is dashboard</h4>
  		<p>You are signed in as user: <?php echo isset($_SESSION['user_id']) ? ' ' . implode(" ",$_SESSION['user_id']) :  'aaaaaaaa';
?></p>
  	</div>
 <?php

  require_once "inc/footer.php"; ?> 
  
  </body>
</html>
