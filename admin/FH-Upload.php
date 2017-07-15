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
	
	$Type=$_POST['Type'];
	$Price=$_POST['Price'];
	$Capacity=$_POST['Max'];
	$Quantity=$_POST['Quantity'];
	$Desc=$_POST['Desc'];
	$file_name=$_FILES['image']['name'];
	$file_type=$_FILES['image']['type'];
	$file_size=$_FILES['image']['size'];
	$file_tmp_name=$_FILES['image']['tmp_name'];
	$path="../Images/Function Hall/".$file_name ;
	
	
	if($file_name)
	{
	
		move_uploaded_file($file_tmp_name,$path);	
		$query="INSERT INTO functionhall_tbl (FType,Description,Capacity,Quantity,Price,Image) values('$Type','$Desc','$Capacity','$Quantity','$Price','$file_name')";
		$result=mysql_query($query);
		
		$ActionAdd="Added a Function Hall";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
	 
		if($result)
		{
	  
			echo "<center>";
			echo "<strong>Thank you!</strong> You successfully added.</p>";
			echo "You'll be redirected to Home Page";
			echo "</center>";
			echo "<meta http-equiv=refresh content=3;url=FunctionHall.php>";
	
		}		   
	}	 
 } 
?>
