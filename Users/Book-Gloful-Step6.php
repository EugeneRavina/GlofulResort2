<?php
require("../Users/connection.php");
session_start();
$userid=$_SESSION['UserID'];


if(isset($_POST['submit']))
{
	
$mailsql=mysql_query("Select Email,FName,LName from user_tbl where UserID='$userid'");
$row=mysql_fetch_assoc($mailsql);
$email=$row['Email'];
$firstname=$row['FName'];
$lastname=$row['LName'];

									$to=$email;
									$subject="Assessment";
									$header="from: Gloful Resort<no-reply@glofulresort@gmail.com>";
									$message="Hello " . $firstname. " ". $lastname. "\r\n\n";
									$message.="Thank you for having reservation at Gloful Resto Grill & Resort \r\n";
									$message.="You can deposit at any branch of BDO bank \r\n";
									$message.="Here is our bank account No. 002-3456-78901 \r\n\n";
									$message.="You need to pay the reservation within 3 day to valid your reservation\r\n\n";
									
									$setmail= mail($to,$subject,$message,$header);

	if($setmail){
		echo "<script>alert('Check your email address or Profile for next process');window.location.href='Profile.php'</script>";
										
		}

}

?>


