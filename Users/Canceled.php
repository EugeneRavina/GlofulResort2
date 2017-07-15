<?php
require("connection.php");
if(isset($_POST['submit'])){
	
	
	$RCode=$_POST['Cancel'];
	$sql="Update reservedcomplete_tbl Set Status='Canceled' Where RCode='$RCode'";
	$result=mysql_query($sql);
	
	echo "<script>alert('Canceled Successfully')</script>";
	
	
	header("location:Profile.php");
	
}







?>