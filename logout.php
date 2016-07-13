<?php

//session_destroy();
session_start();

session_destroy();

if(isset($_SESSION['login_user']) ) {
	
	unset($_SESSION['login_user']);
	
	header('Location:index_28.php');
	
	}

?>