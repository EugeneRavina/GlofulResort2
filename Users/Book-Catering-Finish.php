<?php
require("../Users/connection.php");
session_start();
$userid=$_SESSION['UserID'];

?>


<!DOCTYPE html>
<HTML lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

     <?php include('../View/CSSLinks.php');?>

     <?php include('../View/JSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
</head>



<body>
    <header id="header">
	    <?php include('NavTopBar.php');?>
    </header>
<div class="container">
<div class="row">
	<div class="containerprogressbar">
    <ul class="progressbar">
		<li class="active">Select Date</li>

		<li class="active">Packages</li>
		<li class="active">Event</li>
		<li class="active">Additional</li>
		<li class="active">Payment</li>
	</div>



	<br><br><br>


<center>
	<div class="MainDiv2 ">
	<table class="table table-hover">
	<thead class="thead">
	<tr>
	<form Method="POST" action="Book-Gloful-Step6.php">
	<center><h2>--------Summary of Reservation---------</h2></center>
	<h3>Personal Information</h3>
<?php
	$result=mysql_query("SELECT * FROM user_tbl Where UserID='$userid'");
	while($row=mysql_fetch_assoc($result))
	{
		$Fname=$row['FName'];
		$Lname=$row['LName'];
		$Email=$row['Email'];

		echo $Fname." ";
		echo $Lname."<br>";
		echo $Email."<br>";
	}

	

	$RCode=$_SESSION['RCode'];
	
	
	

	
	
	
	
	
	
	// CATERING
	
	$resulta1=mysql_query("Select * from reservedcatering_tbl where RCode='$RCode'");
	$countc=mysql_num_rows($resulta1);
	if($countc>=1)
	{
		
	while($row=mysql_fetch_assoc($resulta1))
		{

		$DateFrom=$row['DateFrom'];
		$DateTo=$row['DateTo'];
		
		$EventName=$row['EventName'];
		
		
		$CName=$row['CName'];
		$Theme=$row['Theme'];
		$Motif=$row['Motif'];
		$Guest=$row['Guest'];
	
		$Package=$row['Package'];
		$Price=$row['Price'];
		$Menu=$row['Menu'];
		if($Menu!=NULl)
		{
		$Price=$row['Price'];
		//TOTAL NG GUEST SA VENVUE
		$GuestTotal=$Guest*$Price;
		}else 
		{
		$GuestTotal=$Price;
		}
		$TimeVenue=$row['TimeVenue'];
		$TimeExtend=$row['TimeExtend'];
		$Venue=$row['Venue'];
		// TOTAL NG EXTEND PARA SA VENVUE
		$VenueTotal=$TimeExtend*1000;
		

		$Total=$GuestTotal+$VenueTotal;
		echo "Date: ".$DateFrom." to ".$DateTo."<br>";
		echo "Event : ".$EventName."<br>";
		echo "Name of Celebrants : ".$CName."<br>";
		echo "Theme : ".$Theme."<br>";
		echo "Motif : ".$Motif."<br>";
		echo "Guest : ".$Guest."<br>";
		if($Package!=NULL){
		echo "Package : ".$Package."<br>";
		}
		if($Menu!=NULL){
		echo "Menu : ".$Menu."<br>";
		}
		
		echo "Venue: ".$Venue."<br>";
		if(($Menu&&$Package)==NULL){
		echo "Venue Price : ".$Price."<br>";
		}
		if($TimeExtend!=0){
		echo "Extention Price: ".$VenueTotal."<br>";
		}
		echo "Total Price to Venue: ".number_format($Total,2)."<br>";
		
		
		
		}
	
	
	}
	//CATERING
	$resulta1=mysql_query("SELECT Name , Price  from othercharges_tbl as a INNER JOIN reservedcateringother_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
	$countc=mysql_num_rows($resulta1);
	if($countc>=1)
	{
		echo "<hr size='30' />";
		echo "Other charges <br>";
		
		
	while($row=mysql_fetch_assoc($resulta1))
		{

		$Name=$row['Name'];
		
		
		$Price=$row['Price'];
	

		
		echo "Name: ".$Name."<br>";
		echo "Price: ".number_format($Price,2)."<br>";
		
		
		
		}
	
	
	}
	
	
	
	
	
	

	?>

	</thead>
	</table>



	<?php

	echo "<hr size='30' />";
	$RCode=$_SESSION['RCode'];
	
	//CATERING
	$resulty111=mysql_query("SELECT * FROM reservedcatering_tbl where RCode='$RCode'");
	
	$count1=mysql_num_rows($resulty111);
	if($count1>=1){
	$rows=mysql_fetch_assoc($resulty111);
		$Guest=$rows['Guest'];
		$Price=$rows['Price'];
		$Menu=$rows['Menu'];
		if($Menu!=NULl)
		{
		$Price=$rows['Price'];
		//TOTAL NG GUEST SA VENVUE
		$GuestTotal=$Guest*$Price;
		}else 
		{
		$GuestTotal=$Price;
		}
		$TimeVenue=$rows['TimeVenue'];
		$TimeExtend=$rows['TimeExtend'];
		
		// TOTAL NG EXTEND PARA SA VENVUE
		$VenueTotal=$TimeExtend*1000;
		

		$Total=$GuestTotal+$VenueTotal;
		
	}
	// CATERING
	
	
	
	
	$RCode=$_SESSION['RCode'];
	$resulty=mysql_query("SELECT SUM(Price) as Total from othercharges_tbl as a INNER JOIN reservedcateringother_tbl as b ON a.AddID=b.AddID where RCode='$RCode'");
	$count2=mysql_num_rows($resulty);
	if($count2>=1){
	$rows=mysql_fetch_assoc($resulty);
	$Total1=$rows['Total'];
	
	}
	
	
	
	
	
	
	$Total2=$Total1+$Total;
	$Downpayment=$Total2*.20;
	echo "<div float:right>Total :".$Total2."</div>";
	echo "Down Payment : " . $Downpayment. "(&nbsp;20% of Total Payment)". "<br>";

	
	
	$Trans="INSERT INTO reservedcomplete_tbl (UserID,DateFrom,DateTo,EventName,Total,Downpayment,RCode,Status,ReceiptPicture) values('$userid','$DateFrom','$DateTo','$EventName','$Total2','','$RCode','Pending','')";
	$resultTrans=mysql_query($Trans);

	?>

	<br>

	

	<input type="Submit" name="submit" class="btn btn-success pull-right" value="Profile"/>
	</form>
	<form method="POST" Action="Book-Gloful.php">
	<input type="Submit" name="submit"  value="Cancel"/>
	</form>
</center>
</div><!--Customer INFORMATION-->
	</div><!-- CalendarViewwing-->




</div>
</div>	<!--CONTATINER-->



<br><br>
<?php include('../View/footer.php');?>  
</body>


 </html>
