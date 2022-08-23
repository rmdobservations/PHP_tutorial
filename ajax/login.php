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
$password = $_POST['password'];

$findUser = 
	$con->
	prepare("SELECT user_id,password FROM users WHERE email = LOWER(:email) LIMIT 1");
// colon before the email is used in the bind
$findUser->	bindParam(':email',$email,PDO::PARAM_STR);

$findUser->	execute();

if($findUser ->rowCount() == 1){
	// sign in user if they exist
	$User = $findUser->fetch(PDO::FETCH_ASSOC);
	$user_id['user_id'] = (int) $User['user_id'];
	// how to validate user, what db thinks is password
	$passwordhash= $User['password'];
	
if(password_verify($password,$passwordhash)){
// user is signed in
$myreturn['redirect']='/dashboard.php';
$_SESSION['user_id']=$user_id;  // session is an integer, not string
} else {
// invalid user email/password combo
$myreturn['error']= "Invalid User email/password combination ";
}

// check if they are able to log in
//$myreturn['error']='You already have an account';
//$myreturn['is_logged_in']=false;
} else {
	
$myreturn['error']="You do not have an account."; // <a href='/register.php'>
//Create one now?</a>";
}



// users is the Table in database
// make sure user can be added

// mak sure user is added

// return proper info back to javascript to redirect us] 
//echo "current path : " . __DIR__;
// where to move when done.
// redirect is above after user registering
$myreturn['redirect']= 'dashboard.php?this-was-a-redirect';
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