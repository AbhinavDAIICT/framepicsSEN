<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])){
	$referer = $_SERVER['HTTP_REFERER'];
	}

function loggedin(){
if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
	return true;
	}	else{
		return false;
		}
}

function getuserfield($field){
	$query="SELECT `$field` FROM `users` WHERE `user_id` = '".$_SESSION['user_id']."'";
	if($query_run = mysql_query($query)){
		if($query_result = mysql_result($query_run, 0, $field)){
		return $query_result;		
		}
	}
}

function numadd($id){
	$query = "SELECT COUNT(`userid`) FROM `address` WHERE `userid`='$id'";
	$run = mysql_query($query);
	$rows =mysql_num_rows($run);
	return $rows;
	}
?>
