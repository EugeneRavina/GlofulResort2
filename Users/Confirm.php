  <?php
session_start();
require("../Users/connection.php");

?>


			<?php
			
			if(isset($_POST["Register"])){
				
				
				$firstname=$_POST["firstname"];
				$lastname=$_POST["lastname"];
				$email=$_POST["email"];
				$user=$_POST["username"];
				$pass=$_POST["password"];
				$pass2=$_POST["password2"];
				$ConfirmationCode=md5(uniqid(rand()));
				
				
				if((strlen($pass)>=6)&&(strlen($pass2)>=6)){
					
					
					
				
				
						if($pass!=$pass2){
						
							echo "<script>alert('Password does not match');window.location.href='#SignUp'</script>";
						}else{
					
					
								$sql="Select * from customer_tbl where Email='$email'";
								$result=mysql_query($sql);
								$count=mysql_num_rows($result);
						
							if($count>=1){
							
							echo "<script>alert('your email is already existed !!!');window.location.href='Register.php'</script>";
							}else{
						
									$epass=md5($pass);
									
									$sql="Insert into customer_tbl (FirstName,LastName,Email,Username,Password,HashCode,Active) values('$firstname','$lastname','$email','$user','$epass','$ConfirmationCode','0')";
									$result=mysql_query($sql);
				
									$query="Insert into user_tbl (FName,LName,Email,Username,Password,UserTypeID)values('$firstname','$lastname','$email','$user','$epass','0')";
									$resulty=mysql_query($query);
									
									if($result){
								
									$to=$email;
									$subject="Confirmation Link";
									$header="from: Gloful Resort<no-reply@glofulresort@gmail.com>";
									$message="Hello " . $firstname. " ". $lastname. "\r\n\n";
									$message.="Here is your Confirmation Link \r\n";
									$message.="Click on this link to activate your account \r\n";
									$message.="http://localhost/GlofulResort/Users/Confirmation.php?code=$ConfirmationCode";
									$setmail= mail($to,$subject,$message,$header);
									}
									if($setmail){
											echo "<script>alert('Check your email address to confirm your account');window.location.href='http://www.google.com/'</script>";
										
										}else {
											
											echo "<script>alert('Try Again')window.location.href='Resend.php'</script>";
										}
								
									
							}
						}							
					
				}else {
					
					echo "<script>alert('Your password must be at least 6 character');window.location.href='#SignUp'</script>";
				}
			
			}
			
			
			
			
			?>
			
			

			
			
		<!--/Modal SignUp-->
		
		
		
    </header><!--/header-->