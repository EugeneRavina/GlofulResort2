<?php
require("../Users/connection.php");
if(isset($_POST['submit'])){
	
	
	$TransactionID=$_POST['Approve'];
	$sql="Update reservedcomplete_tbl Set Status='Approved' Where TransactionID='$TransactionID'";
	$result=mysql_query($sql);
	
	echo "<script>alert('Approved Transaction')</script>";
	
	
	header("location:PendingResched.php");
	
}







?>