<?php
 ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);
 
session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];
?>
<?php 
if(isset($_POST["submit"]))
		{				
	
	$Name=$_POST['Name'];
	$Desc=$_POST['Desc'];
	$type=$_POST['Type'];
	$file_name=$_FILES['image']['name'];
	$file_type=$_FILES['image']['type'];
	$file_size=$_FILES['image']['size'];
	$file_tmp_name=$_FILES['image']['tmp_name'];
	$path="../Images/".$file_name ;	
	
	if($file_name)
	{
	
		move_uploaded_file($file_tmp_name,$path);		 
		if($type==1){
			$query1="Select Gid from gallerytype_tbl where Gid='1'";
			$result=mysql_query($query1);			
		}if($type==2){
			$query2="Select Gid from gallerytype_tbl where Gid='2'";
			$result=mysql_query($query2);
		}if($type==3){
			$query3="Select Gid from gallerytype_tbl where Gid='3'";
			$result=mysql_query($query3);
		}if($type==4){
			$query4="Select Gid from gallerytype_tbl where Gid='4'";
			$result=mysql_query($query4);
		}if($type==5){
			$query5="Select Gid from gallerytype_tbl where Gid='5'";
			$result=mysql_query($query5);
		}if($type==6){
			$query6="Select Gid from gallerytype_tbl where Gid='6'";
			$result=mysql_query($query6);
		}
		
		$query="INSERT INTO images_tbl (Name,Description,Image,Gid) values('$Name','$Desc','$file_name','$type')";
		$result=mysql_query($query);
		
		if($result)
		{
	  
			echo "<center>";
			echo "<strong>Thank you!</strong> You successfully added.</p>";
			echo "You'll be redirected to Home Page";
			echo "</center>";
			echo "<meta http-equiv=refresh content=3;url=Gallery.php>";
	
		}
	}	 
	$ActionAdd="Added an Image";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
 } 
?>
