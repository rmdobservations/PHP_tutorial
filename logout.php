 <?php

 //not needed anymore (before php 5.6):  $past = time() - 3600; // 1 hour
  session_start();
session_destroy();
session_write_close();
$myname=session_name();
$myvalue='';
$myexpire=0;
$mypath='/';
// remove cookies
setcookie($myname, $value = $myvalue, $expire = $myexpire, $path = $mypath);  
$mydelete=true;
// regenerate session id
session_regenerate_id($delete_old_session = $mydelete);
  header("Location: index.php");
  ?> 