<?php
// if no const defined, do not load

if(!defined('__CONFIG__')){
exit('You do not have a config file');
}	
// sessions are always turned on, see ajax/login.php
if(!isset($_SESSION)) {
session_start();
}

// our config is below
// allow errors
error_reporting(-1);
ini_set('display_errors','On');
// inculde DB file
include_once "classes/DB.php";
include_once "classes/Filter.php";
include_once "classes/User.php";
include_once "classes/Page.php";
include_once "functions.php";
// public so can be called from here.
$con = DB::getConnection();
?>