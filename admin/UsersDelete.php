  <?php

 
 

			
require("../Users/connection.php");
 session_start();

			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];


			$ActionDelete="Deleted a User";
			$DateDelete=date("Y-m-d");
			$TimeDelete=date("H:i");
			
			
			$sql3="Insert into auditlog_tbl(UserID,Action,Date,Time,TimeOut)values('$userid','$ActionDelete','$DateDelete','$TimeDelete','----')";
			$result3=mysql_query($sql3);
			
			$sql="Delete from user_tbl WHERE UserID='$_GET[id]'";
			$result=mysql_query($sql);
 

 
		  
		echo "<center>";
	echo "<strong>Thank you!</strong> You successfully deleted.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
		echo "<meta http-equiv=refresh content=1;url='Users.php'>";
		
 
 
 	
 
?>