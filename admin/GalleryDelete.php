 <?php
ini_set('mysql.connection_timeout',300);
ini_set('default_socket_timeout',300);
  
session_start();
require("../Users/connection.php");
 $userid = $_SESSION['UserID'];
$sql="Delete from images_tbl WHERE ID='$_GET[id]'";
$result=mysql_query($sql);   
		  
		   $ActionAdd="Deleted an Image";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
	mysql_close();		  
	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully deleted.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Gallery.php>";
?>