<?php
$userid= $_SESSION['UserID'];
require("../Users/connection.php");

		if(isset($_POST['submit']))
		{
			
			
			
			
			
			
			$RCode=$_POST['RCode'];
			
			$NewDateFrom=$_POST['DateFrom'];
			$NewDateTo=$_POST['DateTo'];
			$query=mysql_query("SELECT DateFrom , DateTo from reservedcomplete_tbl Where RCode='$RCode'");
			$row=mysql_fetch_assoc($query);
			$DateFrom=$row['DateFrom'];
			$DateTo=$row['DateTo'];
			
		$DateFromInt=strtotime($DateFrom);
		$DateToInt=strtotime($DateTo);
		$Day=$DateToInt-$DateFromInt;
		$Days =floor($Day)/ (24* 60* 60);
		
		$NewDateFromInt=strtotime($NewDateFrom);
		$NewDateToInt=strtotime($NewDateTo);
		$NewDay=$NewDateToInt-$NewDateFromInt;
		$NewDays =floor($NewDay)/ (24* 60* 60);
		
		
		
		
		if($Days==$NewDays){
				
				$sql3="Update reservedcomplete_tbl SET Status='Reschedule'  Where RCode='$RCode'";
				$result3=mysql_query($sql3);	
				
				$sql4="Insert into rescheduled_tbl(PreviousDate, CurrentDate, RCode) values('$DateFrom','$DateTo','$RCode')";
				$result4=mysql_query($sql4);
				
				echo "<script>alert('Waiting for Confirmation')</script>";
				
				header('Location:Profile.php');
			
		
		
		}else
		{
			
		echo "<script>alert('The range of the date should be the same on your previous date');window.location.href='Profile.php'</script>";	
		}
			
			
			
			
			
			
			
		}
		
?>