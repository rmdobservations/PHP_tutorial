 <?php
 // in ajax dir
 // allow config
define('__CONFIG__',true); 
// require the config
  require_once "../inc/config.php";

   if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
   	//  validate that page is being accessed through ajax
   // always  return JSON format
   header('Content-Type: application/json');
  //header("Location: https:/localhost/projects/PHP_tutorial/");
   	$myreturn=[];
     //$array=['test1','test2','test3',array('name'=> 'Rose','lastname'=>'Longfield')];
// make sure that user does not exist

// make sure user can be added

// mak sure user is added

// return proper info back to javascript to redirect us] 
//echo "current path : " . __DIR__;
// where to move when done.
$myreturn['redirect']= 'index.php?this-was-a-redirect';
$myreturn['myname']= "rose";
echo json_encode($myreturn,JSON_PRETTY_PRINT);
  exit;
   } else 
   {
   //kill script. redirect user
   exit("aaaaaaaaaa");
   }

   ?> 