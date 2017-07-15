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

	$question=$_POST['question'];
	$answer=$_POST['answer'];
	


	
	$sql="insert into faq_tbl (question,answer) values('$question','$answer')";
	$result=mysql_query($sql);
	
	$ActionAdd="Added a FAQs";
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
	echo "<meta http-equiv=refresh content=3;url=faqs.php>";

	  


	


 }

 ?>
