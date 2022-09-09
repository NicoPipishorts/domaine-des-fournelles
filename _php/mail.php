<?php
include_once '../config.inc.php';
	
switch($_GET['a']){
	
	case "name":
		
		$v = $_GET['v'];	
		
		if(!preg_match('/^[a-z \-]+$/i', $v)) {
				
			echo htmlspecialchars("le champs Nom doit contenir seul des lettres ou espace ou '-'");
			
		}
	
	break;
	
	case "tel":
		
		$v = $_GET['v'];	
		
		if(!preg_match('/^[0-9 \.]+$/i', $v)) {
				
			echo htmlspecialchars("le champs Tel doit contenir seul des numeros ou espace ou '.'");
			
		}
	
	break;
	
	case "email":
		
		$v = $_GET['v'];	
		
		if(!filter_var($v, FILTER_VALIDATE_EMAIL)) {
					
			echo htmlspecialchars("le format de l'adresse email n'est pas correcte");
			
		}
	
	break;
	
	case "send":
			
		$nme = $_GET["n"]; // sender
		$tel = $_GET["t"];
		$eml = $_GET["e"];
		$msg = nl2br($_GET["m"]);	
		
		$val_arr = array($nme, $tel, $eml);
		
		$i=0;
		foreach($val_arr as $v){
			
			if(empty($v)){
				$i++;
			}
		
		}
		
		if($i !== 0){
			
			echo "e||";
			echo htmlspecialchars("Merci de remplir tous les champs.");
			
		} else {
		
			$send_to = "domainedesfournelles@outlook.fr";
		
			$mail_subject = "[Message du Site] ".$nme." à envoyé un message.";
				
			$headers = "From: $eml\n";
			$headers .= "Reply-To: $eml\n";
			$headers .= "Content-Type: text/html; charset=\"utf-8\"";
						
			// message lines should not exceed 70 characters (PHP rule), so wrap it
			$message .= "Voici un message de ' <b>" . $nme . "</b> ' et voici ce qu'il/elle dit : <br /><br /> <b>" . $msg ."</b><br /><br />";
			$message .= "Voici comment le /la joindre: <br /> Tel: ". $tel ."<br /> Email: ". $eml;
		    
		    
			// send mail
			$mail = mail($send_to,$mail_subject,$message,$headers);
				
			if($mail){	
				
				echo "p||";	
				echo htmlspecialchars("merci, nous avons bien recus votre message");
					
			}	
		}
	
	break;
	
	case "send43":
			
		$nme = $_POST["name"]; // sender
		$tel = $_POST["tel"];
		$eml = $_POST["email"];
		$msg = nl2br($_POST["message"]);
			
			
	    	
	
	break;
		
	}