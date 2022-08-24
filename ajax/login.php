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

$email=$_POST['email'];
$password = $_POST['password'];


//$user_found=FindUser($con,$email,true);
$user_found=User::Find($email,true);
if($user_found){
	// sign in user if they exist
	//$User = $user_found; //->fetch(PDO::FETCH_ASSOC);
	$user_id['user_id'] = (int) $user_found['user_id'];
	// how to validate user, what db thinks is password
	$passwordhash= $user_found['password'];
	
if(password_verify($password,$passwordhash)){
// user is signed in
$myreturn['redirect']='dashboard.php';
$_SESSION['user_id']=$user_id;  // session is an integer, not string
} else {
// invalid user email/password combo
$myreturn['error']= "Invalid User email/password combination ";
}

// check if they are able to log in

//$myreturn['is_logged_in']=false;
} else {
	
$myreturn['error']="You do not have an account. <a href='register.php'>
Create one now?</a>";

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