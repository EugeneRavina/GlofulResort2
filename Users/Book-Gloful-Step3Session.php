<?php
require("../Users/connection.php");

	<?php
	if(isset($_POST['submit'])){
		
		$Date=$_POST['Date'];
		$Guest=$_POST['Guest'];
		$Schedule=$_POST['Schedule'];
		
		session_start();
		$_SESSION['Date']=$Date;
		$_SESSION['Guest']=$Guest;
		$_SESSION['Schedule']=$Schedule;
		
		header("Location:Book-Gloful-Step3.php");
		
	}
	
	
	/* if(isset($_POST['submity']))
	{
			
			$Type=$_POST['Type'];
			$Price=$_POST['Price'];
			$Select=$_POST['select'];
			
			
			
			$Date=$_POST['Date'];
			$Guest=$_POST['Guest'];
			$Schedule=$_POST['Schedule'];
			
	
			
	} */
	
	?>
	
	
	