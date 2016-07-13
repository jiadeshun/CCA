<?php
require('app/init.php');
session_start();

//Storing session
$user_check = $_SESSION['login_user'];
//echo $user_check;

//sql query to select all info about that user

$sql = "select account from cca.org where account = :account";

$query = $conn->prepare($sql);
$query->bindParam(':account',$user_check);
$query->execute();

$item = $query->rowCount();
//echo $item;
$obj = $query->fetchObject();
$login_session = $obj->account;
if (!isset($login_session)) {
	
	header("Location: index_28.php");
	
	}
/*if ($item !== 0 ) {
	
	header("Location: index_28.php");
	}*/


?>