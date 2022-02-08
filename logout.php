<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session 
	unset($_SESSION['logged_id']);
	unset($_SESSION['logged_type']);
if(!isset($_SESSION['logged_id'])){
	header('location: index.php');
}
}//end