 <?php

 ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
?>
<?php
$userid = $_SESSION['UserID'];
 if(isset($_POST["submit"]))
		{

	$terms=$_POST['terms'];
	
	


	
	$sql="insert into terms_tbl (terms) values('$terms')";
	$result=mysql_query($sql);
	
	$ActionAdd="Added a Function Hall";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);


	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully added.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=terms.php>";

	  


	


 }

 ?>
