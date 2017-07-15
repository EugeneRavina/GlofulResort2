  <?php
require("../Users/connection.php");
session_start();
$active = 'UserMonitoring';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT PendingReq from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Pending=$rows['PendingReq'];

				if($Pending=='TRUE'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gloful Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>-->

    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--<link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../css/admin.css" rel="stylesheet">
	<link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.mCustomScrollbar.js"></script>
    <script src="../js/custom.js"></script>

</head>
<body>
 <div class="container">
   <div class="topbar">
        <?php include('navtop.php');?>
      </div>
        <?php include('Sidebar.php'); ?>

            <div class="main">
               <table  class="table table-striped table-hover">
                    
					<br>
					<br>
					<br>
					<br>
					<br>
                        <tr> Reservation Summary  <br><br>
						</tr>
		       		  			<?php
			if(isset($_POST['submit']))
			{
				$RCode=$_POST['RCode'];
			$sql11="SELECT * FROM rescheduled_tbl where RCode='$RCode'";
			$results11=mysql_query($sql11);
			while($rows=mysql_fetch_assoc($results11)){
						
					
						
						$CurrentDate=$rows['CurrentDate'];
						
		
						
						
						
						}	
			$sql1="SELECT * FROM reservedcom_tbl where RCode='$RCode'";
			$results1=mysql_query($sql1);
			while($rows=mysql_fetch_assoc($results1)){
						
					
						
						$Date=$rows['Datess'];
						$Total=$rows['Total'];
						$UserID=$rows['UserID'];
						$Event=$rows['Schedule'];
						$Guest=$rows['Guest'];                            
						}
						echo " PreviousDate : ";
						echo  $Date;
						echo  "<br>";	
						echo "Reschedule Date: ";
						echo $CurrentDate;
						echo "<br>";
						echo "Event : ";
						echo $Event;
						echo "<br>" ;
						echo "Pax : " ;
						echo $Guest;
						echo "<br>" ;
						echo "Pax Total : " ;
						echo $Total;
						echo "<br>" ;
						
						
			
						
			echo "Other Fee:";
			
			$sql2="SELECT * From reserved_tbl WHERE RCode='$RCode'";
			$result2=mysql_query($sql2);
				while($row=mysql_fetch_assoc($result2))
				{
				$Type=$row['Type'];
				$Quantity=$row['Quantity'];
				$Price=$row['Price'];
				$Total1=$row['Total'];
				echo "<tr>";
				echo "<td>".$Type."</td>";
				echo "<td>".$Price."</td>";
				echo "<td>(".$Quantity.")</td>";
				echo "<td>".$Total1."</td>";
				echo "</tr>" ;
				
				}
			echo "</table>";
			echo "<hr size='2' />";
			
			$resulty=mysql_query("SELECT SUM(Total) as Total FROM reserved_tbl  where RCode='$RCode'");
			$rows=mysql_fetch_assoc($resulty);
			$Total1=$rows['Total'];
			$resulty1=mysql_query("SELECT Total FROM reservedcom_tbl  where RCode='$RCode'");
			$row=mysql_fetch_assoc($resulty1);
			$Total2=$row['Total'];
			$Total3=$Total1+$Total2;
			$Downpayment=$Total2*.20;
			echo "<div float:right>Total :".$Total3."</div>";
			echo "Down Payment : " . $Downpayment. "<br>";
			

				
			$sql11="SELECT * FROM reservedcomplete_tbl where RCode='$RCode'";
			$results11=mysql_query($sql11);
			while($rows=mysql_fetch_assoc($results11)){		
			
			
			$TransactionID=$rows['TransactionID'];
			
			
		
			
					
					echo "<form method='POST' action='ApproveResched.php' enctype='multipart/form-data'>";
					echo " <input type='hidden' name=Approve value='".$TransactionID."'>";	
					echo "<input type='submit' name='submit' value='Approve'>";
					}
			
			
			
			}
 ?>
		            </thead>
					</table>
					<br>
				<form method="POST" >


				
					
				<input type="submit" name="submit" value="Reject">

					<br>
					<br>






 </div>








</div>
</body>

</html>
<?php


}else{


		echo"<script>alert('You are not allowed to access this page!');window.location.href='adminIndex.php'</script>";
	}
	}
}

?>
