
<?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];
if(isset($_POST['submit'])){ 
	
	$id = $_POST['id'];
	$address =$_POST['Address'];
	$number =$_POST['Number'];

	
	
		$sql3="Update contact_tbl SET Address='$address', Number='$number' Where id='$id'";
	$result3=mysql_query($sql3);

	$ActionAdd="Updated a Contact";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql4="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result4=mysql_query($sql4);
		
	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Contact.php>";
	

}

?>
