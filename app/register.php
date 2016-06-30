<?php

require_once 'init.php';


	
	if ($_POST['orgName']=='' || $_POST['password']==''|| $_POST['account']=='') {
		
		echo ("Please enter orgName/password/account");
		
		
	} else {
			
			
			try {
				
				$orgName = $_POST['orgName'];
				$password = $_POST['password'];
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
				$respTele = $_POST['respTele'];
				$respEmail = $_POST['respEmail'];
				$contPersonName = $_POST['contPersonName'];
				$contPhone = $_POST['contPhone'];
				
				
				
				$sql = "INSERT INTO org (orgName, pssd, account, created_at, 
											artificialPersonName, city, state, orgLevel, appliedDate, runDuration, respPerson, respTitle, respTele, respEmail, contPersonName, contPhone, ) 
					VALUES (:orgName, :pssd, :account, NOW(),
							:artificialPersonName, :city, :state, :orgLevel, :appliedDate, :runDuration, :respPerson,
							:respTitle, respTele, respEmail, 			 )";
				$signUpQuery = $conn->prepare($sql);
				$signUpQuery->execute([
										
										'orgName' => $orgName,
										'pssd' => $password,
										'account' => $account,
										
										
										]);
				
				echo "New Org Has been Created.";
						
				
				}	catch(PDOException $e){
					
					echo $sql. "<br>" .$e->getMessage();
					
					
					}
					
					
		
		}
	
	//header('Location: ./verify.php');
?>