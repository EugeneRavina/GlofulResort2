<?php

ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];
if(isset($_POST['submit'])){

		$id=$_POST['id'];
		$name=$_POST['Type'];
		$desc=$_POST['Desc'];
		$file_name=$_FILES['image']['name'];
		$file_type=$_FILES['image']['type'];
		$file_size=$_FILES['image']['size'];
		$file_tmp_name=$_FILES['image']['tmp_name'];
		$path="../Images/Pool/".$file_name ;

	if($file_name=="")
	{
		$sql3="Update pool_tbl SET PName='$name', PDescription='$desc' Where Pid='$id'";
	$result3=mysql_query($sql3);



	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Pools.php>";
	}
	else
	{
	 if($file_name)
	 {
	move_uploaded_file($file_tmp_name,$path);
	$sql2="Update pool_tbl SET PName='$name', PDescription='$desc', PImage='$file_name' Where Pid='$id'";
	$result2=mysql_query($sql2);
	
		


	
	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Pools.php>";
	 }
	}
$ActionAdd="Updated a Pool";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql4="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result4=mysql_query($sql4);

}else {

	$sql1="Select * from pool_tbl where Pid='$_GET[id]'";
	$result1=mysql_query($sql1);

	while($row=mysql_fetch_assoc($result1)){

		$id=$row['Pid'];
		$name=$row['PName'];
		$desc=$row['PDescription'];
		$images=$row['PImage'];
		$path="../Images/Pool/".$images;
		
			

	}

}?>
