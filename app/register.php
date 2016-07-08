<?php

require_once 'init.php';

print_r( $_POST );
	
	if ($_POST['orgName']=='' || $_POST['md5-password']==''|| $_POST['account']=='') {
		
		
		echo ("Please enter orgName/password/account");
		
		
	} else {
			
			
			try {
				
				$orgName = $_POST['orgName'];
				$password = $_POST['md5-password'];
				$account = $_POST['account'];
				$created_at= "";
				$artificialPersonName = $_POST['artificialPersonName'];
				$city = $_POST['city'];
				$state=$_POST['province'];
				$orgLevel = $_POST['orgLevel'];
				$appliedDate = $_POST['appliedDate'];
				$runDuration = $_POST['runDuration'];
				$respPerson = $_POST['respPerson'];
				$respTitle = $_POST['respTitle'];
			
				$respEmail = $_POST['respEmail'];
				$contPersonName = $_POST['contPersonName'];
				$contPhone = $_POST['contPhone'];
				
				
				
				$sql = "INSERT INTO org (orgName, pssd, account, created_at, artificialPersonName, city, state, 
				orgLevel, appliedDate, runDuration, respPerson, respTitle, respEmail, contPersonName, contPhone )
				
				VALUES (:orgName, :pssd, :account, NOW(), :artificialPersonName,:city, :state,
				:orgLevel, :appliedDate, :runDuration, :respPerson, :respTitle, :respEmail, :contPersonName, :contPhone )";
				$signUpQuery = $conn->prepare($sql);
				echo "ok";
				$signUpQuery->execute([
										
										'orgName' => $orgName,
										'pssd' => $password,
										'account' => $account,
										'artificialPersonName' => $artificialPersonName,
										'city' => $city,
										'state' => $state,
										'orgLevel' =>$orgLevel,
										'appliedDate' =>$appliedDate,
										'runDuration' => $runDuration,
										'respPerson' =>$respPerson,
										'respTitle' =>$respTitle,
										'respEmail' => $respEmail,
										'contPersonName' => $contPersonName,
										'contPhone' => $contPersonName,
										]);
				
				echo "New Org Has been Created.";
						
				
				}	catch(PDOException $e){
					
					echo $sql. "<br>" .$e->getMessage();
					
					
					}
					
					
		
		}
	
	//header('Location: ./verify.php');
?>