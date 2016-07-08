<?php
require_once 'init.php';

$user = $_POST['account'];
$pssd = $_POST['password'];

//echo $pssd;
//echo $user;

$sql = "SELECT account, pssd FROM cca.org WHERE account = :user AND pssd = :pssd";
$loginQuery = $conn->prepare($sql);
$loginQuery->execute([
				'user' => $user,
				'pssd' => $pssd, 

]);

$items = $loginQuery->rowCount();
if ($items == 1) {
	echo "You have login-ed in.";	
	}

//header('Location:./index_28.php');

?>