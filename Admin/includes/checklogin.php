<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
function check_login()
{
	if(strlen($_SESSION['loginstatus'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="loginform.php";		
		$_SESSION["id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>