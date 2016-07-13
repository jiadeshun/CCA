<?php
require_once 'init.php';
session_start();//Starting Session
// define $user and $passd

if (isset($_POST['submit'])) {
	
	$user = $_POST['account'];
	$pssd = $_POST['password'];
	
	//echo $pssd;
	//echo $user;
	// protect sql injection still under development
	$sql = "SELECT * FROM cca.org WHERE account = :user AND pssd = :pssd";
	$loginQuery = $conn->prepare($sql);
	$loginQuery->bindParam(':user',$user);
	
	$loginQuery->bindParam(':pssd',$pssd);
	//$loginQuery = $loginQuery->bindParam(':pssd',$pssd);
	
	$loginQuery->execute();
	$row = $loginQuery->fetchObject();
	
	/*echo $row->account;
	if(!empty($row)) {
		
		echo "ok";
		
		}*/
	
	$items = $loginQuery->rowCount();
	$login_session = $row->account;
	
	if ($items == 1 && !empty($row)) {
		
		echo "You have login-ed in.";
		$_SESSION['login_user'] = $login_session;
		
		// echo $_SESSION['login_user']; ok!
		header("Location: ../index_28.php");
		
		
		}
	
	else 
	
		header('Location:../index_28.php');
	
	
}




?>