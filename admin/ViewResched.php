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
						<form method="POST" action="ViewReschedSuccess.php">
		       		  			<?php
			if(isset($_POST['submit']))
			{
				$RCode=$_POST['RCode'];
				
			echo "<input type='hidden' name='RCode' value='".$RCode."'>";
			$sql11="SELECT * FROM rescheduled_tbl where RCode='$RCode'";
			$results11=mysql_query($sql11);
			while($rows=mysql_fetch_assoc($results11)){		
			
			$DateFrom=$rows['PreviousDate'];
			$DateTo=$rows['CurrentDate'];
			
			echo "<input type='hidden' name='DateFrom' value='".$DateFrom."'>";
			echo "<input type='hidden' name='DateTo' value='".$DateTo."'>";
		
		
			echo "Date Change To <br>";
			echo "Date: ".$DateFrom." to ".$DateTo."<br>";
	
		
			
				}
				
				
				
				
				
				
				
				
				
	echo "<br> Customer Information <br><br>";
			$sql1="SELECT * FROM reservedcom_tbl where RCode='$RCode'";
			$results1=mysql_query($sql1);
			while($rows=mysql_fetch_assoc($results1)){
						
					
						
						$DateFrom=$rows['DateFrom'];
						$DateTo=$rows['DateTo'];
						$Total=$rows['Total'];
						$UserID=$rows['UserID'];
						$Event=$rows['Schedule'];
						$Guest=$rows['Guest'];
						
						echo "Date: ".$DateFrom." to ".$DateTo."<br>";
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
						
						
						
						}
						
	///////





	
	
	// RESSSOORT
	$resulta=mysql_query("SELECT * FROM resortreserved_tbl Where RCode='$RCode'");
	$count=mysql_num_rows($resulta);
	if($count>=1)
	{
		
	while($row=mysql_fetch_assoc($resulta))
		{

		$DateFrom=$row['DateFrom'];
		$DateTo=$row['DateTo'];
		$Package=$row['Package'];
		$Description=$row['Description'];
		$EventName=$row['EventName'];
		$CName=$row['CName'];
		$Theme=$row['Theme'];
		$Motif=$row['Motif'];
		$Guest=$row['Guest'];
		$Total=$row['Price'];
		


		echo "Date: ".$DateFrom." to ".$DateTo."<br>";
		echo "Event : ".$EventName."<br>";
		echo "Package : ".$Package."<br>";
		echo $Description."<br>";
		echo "Name of Celebrants : ".$CName."<br>";
		echo "Theme : ".$Theme."<br>";
		echo "Motif : ".$Motif."<br>";
		echo "Guest : ".$Guest."<br>";

		echo "Package Price : ".number_format($Total,2)."<br>";
		
		// WITH CATERING
			
		$q1=mysql_query("Select * From reservedcatering_tbl where RCode='$RCode'");
		$qcount=mysql_num_rows($q1);
		if($qcount>=1)
			{
				echo "-With Catering<br>";
				while($row=mysql_fetch_assoc($q1))
				{
					$PackageMenu=$row['Package'];
					$Menu=$row['Menu'];
					$GuestC=$row['Guest'];
					$Venue=$row['Venue'];
					$PriceV=$row['Price'];
					$TimeVenue=$row['TimeVenue'];
					$TimeExtend=$row['TimeExtend'];
					
					
					echo "Package : ".$PackageMenu."<br>";
					echo "Menu : ".$Menu."<br>";
					
					echo "Venue : ".$Venue." Php: ".$PriceV."/Per Head<br>";
					echo "Time for Venue : ".$TimeVenue." Hours<br>";
					echo "Extension : ".$TimeExtend." Hours<br>";
					$ExtendPrice=$TimeExtend*1000;
					$catertotal=($PriceV*$GuestC) + $ExtendPrice;
					echo "Catering Price : ".$catertotal."<br>";
					
					
				}
				
				
				
			}
		
		// WITH CATERING
		
		// OTHERCHARGES
		$q2=mysql_query("Select Name , Price from reservedcateringother_tbl as a INNER JOIN othercharges_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
		$q2count=mysql_num_rows($q2);
		if($q2count>=1)
		{
			echo "-Other Charges <br>";
			while($row=mysql_fetch_assoc($q2))
			{
			$Name=$row['Name'];
			$PriceOther=$row['Price'];
			echo "*".$Name."<br>";
			echo "Price:".$PriceOther."<br>";
				
				
			}
		}
		
		
		// OTHERCHARGES
		
		
		
		}
	
	
	}
	
	
	
	// RESORTTTTT
	
	
	
	
	///////////// CAAAAAAAAAAAAAAAAATERING
	
	
	
	// WITH CATERING
			
		$q1=mysql_query("Select * From reservedcatering_tbl where RCode='$RCode'");
		$qcount=mysql_num_rows($q1);
		if($qcount>=1)
			{
				
				while($row=mysql_fetch_assoc($q1))
				{
					$DateFrom=$row['DateFrom'];
					$DateTo=$row['DateTo'];
					
					$EventName=$row['EventName'];
					$CName=$row['CName'];
					$Theme=$row['Theme'];
					$Motif=$row['Motif'];
					$Guest=$row['Guest'];
		
					$PackageMenu=$row['Package'];
					$Menu=$row['Menu'];
					$GuestC=$row['Guest'];
					$Venue=$row['Venue'];
					$PriceV=$row['Price'];
					$TimeVenue=$row['TimeVenue'];
					$TimeExtend=$row['TimeExtend'];
					
					
					
					
					$Code=$row['RCode'];
					
					$SQL="SELECT RCode From resortreserved_tbl WHERE RCode='$Code'";
					$RESULTSQL=mysql_query($SQL);
					$bilang=mysql_num_rows($RESULTSQL);
					if($bilang==0)
					{
					
					
					
						
					


					echo "Date: ".$DateFrom." to ".$DateTo."<br>";
					echo "Event : ".$EventName."<br>";
					echo "Name of Celebrants : ".$CName."<br>";
					echo "Theme : ".$Theme."<br>";
					echo "Motif : ".$Motif."<br>";
					echo "Guest : ".$Guest."<br>";
					if($PackageMenu!=NULL){
					echo "Package : ".$PackageMenu."<br>";
					}
					if($Menu!=NULL){
					echo "Menu : ".$Menu."<br>";
					}
					echo "Venue : ".$Venue." Php: ".$PriceV."/Per Head<br>";
					echo "Time for Venue : ".$TimeVenue." Hours<br>";
					echo "Extension : ".$TimeExtend." Hours<br>";
					
					
					if($Menu!=NULl)
					{
					
					$GuestTotal=$Guest*$PriceV;
					}else 
					{
					$GuestTotal=$PriceV;
					}
					$ExtendPrice=$TimeExtend*1000;
					
					$catertotal=$GuestTotal + $ExtendPrice;
					echo "Catering Price : ".$catertotal."<br>";
					
					
					// OTHERCHARGES
					$q2=mysql_query("Select Name , Price from reservedcateringother_tbl as a INNER JOIN othercharges_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
					$q2count=mysql_num_rows($q2);
					if($q2count>=1)
					{
					echo "-Other Charges <br>";
					while($rows=mysql_fetch_assoc($q2))
						{
					$Name=$rows['Name'];
					$PriceOther=$rows['Price'];
					echo "*".$Name."<br>";
					echo "Price:".$PriceOther."<br>";
				
				
						}
					}
		
		
					// OTHERCHARGES
					}
					
				}
				
				
				
			}
		
		// WITH CATERING
	
	
	
	
	
	///////////// CAAAAAAAAAAAAAAAAATERING
	
	
	
	
	
	
	
	
	
	
	
	$result1=mysql_query("SELECT * FROM reservedcom_tbl Where RCode='$RCode'");
	while($row=mysql_fetch_assoc($result1))
	{

		$DateFrom=$row['DateFrom'];
		$DateTo=$row['DateTo'];
		$EventName=$row['Schedule'];
		$Guest=$row['Guest'];
		$Total=$row['Total'];
		$result=mysql_query("Select Price from stime where Types='$EventName'");
		$rows=mysql_fetch_assoc($result);
		$SchedulePrice=$rows['Price'];


		echo "Date :".$DateFrom."<br>";
		echo "Schedule : ".$EventName."<br>";
		echo "Price of Schedule : ".$SchedulePrice."<br>";
		echo "No. of Guest : ".$Guest."<br>";

		echo "Guest Total P: ".$Total."<br>";
	}

	$result=mysql_query("SELECT * FROM reserved_tbl Where RCode='$RCode' ORDER BY ID");
	if($result==TRUE)
	{
	
	while($row=mysql_fetch_assoc($result))

		{
		$Type=$row['Type'];
		$Quantity=$row['Quantity'];
		$Price=$row['Price'];
		$Total=$row['Total'];
		echo "<tr>";
		echo "<td>".$Type."</td>";
		echo "<td>".$Price."</td>";
		echo "<td>(".$Quantity.")</td>";
		echo "<td>".$Total."</td>";
		echo "<tr>";

		}
	
	}



















////////	
						
		
			echo "</table>";
			echo "<hr size='30' />";
			
			
///////////////////// FOR TOTAL AND DOWNPAYMENT

			$resulty11=mysql_query("SELECT Price as Total FROM resortreserved_tbl where RCode='$RCode'");
	
			$count1=mysql_num_rows($resulty11);
			if($count1>=1){
			$rows=mysql_fetch_assoc($resulty11);
			
			//
		
		$s=mysql_query("Select * From reservedcatering_tbl where RCode='$RCode'");
		$scount=mysql_num_rows($s);
		if($scount>=1)
			{
				while($row=mysql_fetch_assoc($s))
				{
					$PackageMenu=$row['Package'];
					$Menu=$row['Menu'];
					$GuestC=$row['Guest'];
					$Venue=$row['Venue'];
					$PriceV=$row['Price'];
					$TimeVenue=$row['TimeVenue'];
					$TimeExtend=$row['TimeExtend'];
					
					
					$ExtendPrice=$TimeExtend*1000;
					$catertotal=($PriceV*$GuestC) + $ExtendPrice;
					
					
				}
				
				
				
			}else
			{
			$catertotal=0;
			
			
			}
	
		//	 CATERING
	
		// Charges
		
		
		$s1=mysql_query("Select SUM(Price) as OtherPrice from reservedcateringother_tbl as a INNER JOIN othercharges_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
		$s1count=mysql_num_rows($s1);
		if($s1count>=1)
		{
			$row=mysql_fetch_assoc($s1);
			$OtherPrice=$row['OtherPrice'];
			
			
		}else 
		{
			$OtherPrice=0;
		}
		
		// CHARGES
	
	$Price1=$rows['Total'];
	$CaterOtherPrice=$catertotal+$OtherPrice;
	
	$Total=$Price1+$CaterOtherPrice;
			
			
			
			
			
			
			
			
			
			
			
			
			}
	
	
	
	
	// RESORT
	
	
	
	
	//////// CATER FOR Price
	
	$s=mysql_query("Select * From reservedcatering_tbl where RCode='$RCode'");
		$scount=mysql_num_rows($s);
		if($scount>=1)
			{
				while($row=mysql_fetch_assoc($s))
				{
					$PackageMenu=$row['Package'];
					$Menu=$row['Menu'];
					$GuestC=$row['Guest'];
					$Venue=$row['Venue'];
					$PriceV=$row['Price'];
					$TimeVenue=$row['TimeVenue'];
					$TimeExtend=$row['TimeExtend'];
					
					
					if($Menu!=NULl)
					{
					
					$GuestTotal=$Guest*$PriceV;
					}else 
					{
					$GuestTotal=$PriceV;
					}
					$ExtendPrice=$TimeExtend*1000;
					
					$catertotal=$GuestTotal + $ExtendPrice;
					
					$s1=mysql_query("Select SUM(Price) as OtherPrice from reservedcateringother_tbl as a INNER JOIN othercharges_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
					$s1count=mysql_num_rows($s1);
					if($s1count>=1)
					{
						$row=mysql_fetch_assoc($s1);
						$OtherPrice=$row['OtherPrice'];
			
			
					}
					
					
				}
				
				
					$Total=$catertotal+$OtherPrice;
				
			}
	
	
	
	//////// CATER FOR Price
	
	
	
	
	
	
	
			$resulty=mysql_query("SELECT SUM(Total) as Total FROM reserved_tbl  where RCode='$RCode'");
			$count2=mysql_num_rows($resulty);
			if($count2>=1){
			$rows=mysql_fetch_assoc($resulty);
			$Total1=$rows['Total'];
			}
	
	
			$resulty1=mysql_query("SELECT Total FROM reservedcom_tbl  where RCode='$RCode'");
			$count3=mysql_num_rows($resulty1);
			if($count3>=1){
			$row=mysql_fetch_assoc($resulty1);
			$Total=$row['Total'];
			}
	
	
	
			$Total2=$Total+$Total1;
			$Downpayment=$Total2*.20;
			echo "<b><div float:right>Total : Php ".number_format($Total2,2)."</div></b>";
			echo "Down Payment : " . $Downpayment. "(&nbsp;20% of Total Payment)". "<br>";
			
				
						
			
					
			
			
		
			
			
			
			}
 ?>
		            </thead>
					<br>
					
					
					<input type="submit" name="submit" value="Approve">

				</form>
				<form method="POST" >


				
					</table>
				<input type="submit" name="submit" value="Reject">

					<br>
					<br>
				</form>





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
