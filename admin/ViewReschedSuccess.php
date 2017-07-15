<?php
require("../Users/connection.php");
if(isset($_POST['submit'])){
	
	
	$RCode=$_POST['RCode'];
	$DateFrom=$_POST['DateFrom'];
	$DateTo=$_POST['DateTo'];
	
	$sql="Update reservedcomplete_tbl Set Status='Approved Reschedule' ,DateFrom='$DateFrom' , DateTo='$DateTo' Where RCode='$RCode'";
	$result=mysql_query($sql);
	
	echo "<script>alert('Approved Reschedule')</script>";
	
	
	header("location:adminIndex.php");
	
}







?>