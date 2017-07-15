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
	$Desc=$_POST['Desc'];
	$Features=$_POST['Features'];
	$Price=$_POST['Price'];	
	$Capacity=$_POST['Max'];
	$Quantity=$_POST['Quantity'];	
	$file_name=$_FILES['image']['name'];
	$file_type=$_FILES['image']['type'];
	$file_size=$_FILES['image']['size'];
	$file_tmp_name=$_FILES['image']['tmp_name'];
	$path="../Images/Rooms/".$file_name ;
	
	if($file_name)
	{
		
		move_uploaded_file($file_tmp_name,$path);	
		$sql="INSERT INTO ROOM_TBL (RType,RDescription,Capacity,Quantity,RImage,Features,Price) values('$Type','$Desc','$Capacity','$Quantity','$file_name','$Features','$Price')";
		$result=mysql_query($sql);
		
		$ActionAdd="Added a Room";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
		
		if($result)
		{			
			echo "<center>";
			echo "<strong>Thank you!</strong> You successfully updated.</p>";
			echo "You'll be redirected to Home Page";
			echo "</center>";
			echo "<meta http-equiv=refresh content=3;url=Room.php>";			
		}		 
	}	 
 }
 
?>