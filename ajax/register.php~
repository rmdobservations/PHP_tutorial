 <?php
 // in ajax dir
 // allow config
define('__CONFIG__',true); 
// require the config
  require_once "../inc/config.php";

   if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
   
   	//  validate that page is being accessed through ajax
   // always  return JSON format
   header('Content-Type: application/json');
  //header("Location: https:/localhost/projects/PHP_tutorial/");
   	$myreturn=[];
     //$array=['test1','test2','test3',array('name'=> 'Rose','lastname'=>'Longfield')];
// make sure that user does not exist
// "user_id" is a column in table "users" in database "php_tutorial"
// lower changes all letters to lower case.
$email=Filter::String($_POST['email']);

$findUser = 
	$con->
	prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
// colon before the email is used in the bind
$findUser->	bindParam(':email',$email,PDO::PARAM_STR);

$findUser->	execute();

if($findUser ->rowCount() == 1){
	// user exists
// check if they are able to log in
$myreturn['error']='You already have an account';
$myreturn['is_logged_in']=false;
} else {
// user does not exist, add them now
// PHP creates a hash for password
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);


$addUser=$con->prepare("INSERT INTO users(email,password) VALUES(:email,:password)");
$addUser->bindParam(':email',$email,PDO::PARAM_STR);
$addUser->bindParam(':password',$password,PDO::PARAM_STR);
$addUser->execute();
$user_id=$con->lastInsertId();
// sign user in , make sure it is an integer and not string
$_SESSION['user_id']=(int)$user_id;
$myreturn['redirect']='index.php?message=welcome';
$myreturn['is_logged_in']=true;
}



// users is the Table in database
// make sure user can be added

// mak sure user is added

// return proper info back to javascript to redirect us] 
//echo "current path : " . __DIR__;
// where to move when done.
// redirect is above after user registering
// $myreturn['redirect']= 'dashboard.php?this-was-a-redirect';
//$myreturn['redirect']= 'index.php?this-was-a-redirect';
//$myreturn['myname']= "rose";

echo json_encode($myreturn,JSON_PRETTY_PRINT);
exit;
   } 
   else 
   {
   //kill script. redirect user
   exit("aaaaaaaaaa invalid url");
   }

   ?> 