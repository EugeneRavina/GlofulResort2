<?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];

if(isset($_POST['submit'])){
			
			$id=$_POST['id'];
			$name=$_POST['Type'];
			$desc=$_POST['Description'];
			$features=$_POST['Features'];
			$price=$_POST['Price'];
			$capacity=$_POST['Max'];
			$quantity=$_POST['Quantity'];
			$file_name=$_FILES['image']['name'];
			$file_type=$_FILES['image']['type'];
			$file_size=$_FILES['image']['size'];
			$file_tmp_name=$_FILES['image']['tmp_name'];
			$path="../Images/Rooms/".$file_name ;
			
	if($file_name == ""){
		$sql3="Update room_tbl SET RType='$name', RDescription='$desc', Capacity='$capacity', Quantity='$quantity', Features='$features', Price='$price' Where Rid='$id'";
	$result3=mysql_query($sql3);
		
	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Room.php>";
			
	}else{
		
	} 	
		if($file_name){
	move_uploaded_file($file_tmp_name,$path);
	$sql2="Update room_tbl SET RType='$name', RDescription='$desc', Capacity='$capacity', Quantity='$quantity', RImage='$file_name', Features='$features', Price='$price' Where Rid='$id'";
	$result2=mysql_query($sql2);
	
	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Room.php>";
	
		}		
		$ActionAdd="Updated a Room";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql4="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result4=mysql_query($sql4);
}else {
	
	$sql1="Select * from Room_tbl where Rid='$_GET[id]'";
	$result1=mysql_query($sql1);
	
	while($row=mysql_fetch_assoc($result1)){
		
		$id=$row['Rid'];
		$name=$row['RType'];
		$desc=$row['RDescription'];
		$price=$row['Price'];
		$features=$row['Features'];
		$capacity=$row['Capacity'];
		$quantity=$row['Quantity'];
		$images=$row['RImage'];
		$path="../Images/Rooms/".$images ;
			
	}	
}
?> 