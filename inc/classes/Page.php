<?php
// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}


class Page {
// force user to be logged in or redirtected 
static function ForceLogin(){
if(isset($_SESSION['user_id'])){


} else {
// usser not allowed here
header("Location: login.php"); // this not working yet. Check in private window

}
}

static function ForceDashboard(){
if(isset($_SESSION['user_id'])){
	// no slash in front of dashboard. keeps relative path
header("Location: dashboard.php");

} else {
// usser not allowed here


}
}

} // end class def
?>