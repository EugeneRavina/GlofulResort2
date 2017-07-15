 <?php
					$email=$_POST['email'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$ConfirmationCode=$_POST['code'];
					
									$to=$email;
									$subject="Confirmation Link";
									$header="from: Gloful Resort<no-reply@glofulresort@gmail.com>";
									$message="Hello " . $firstname. " ". $lastname. "\r\n\n";
									$message.="Here is your Confirmation Link \r\n";
									$message.="Click on this link to activate your account \r\n";
									$message.="http://localhost/GlofulResort/Users/Confirmation.php?code=$ConfirmationCode";
									$setmail= mail($to,$subject,$message,$header);
					if($setmail){
											echo "<script>alert('Check your email address to confirm your account');window.location.href='http://www.google.com/'</script>";
										
										}else {
											
											echo "<script>alert('HAHAHAHAHAHAHAHAHAHAHAHAH')window.location.href='Resend.php'</script>";
					}
 
 ?> 