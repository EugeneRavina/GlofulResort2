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
    <?php
   $sql="SELECT * from banner_tbl where ID='8'";
   $result=mysql_query($sql);
   $row=mysql_fetch_assoc($result);
   $image=$row['Image'];
   $title=$row['Title'];
   ?>
       <section id="title" class="wow fadeInDown" style="background-image: url(../Images/Banner/<?php echo $image?>)">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6 animated slideInLeft" >
                       <h1><?php echo $title?></h1>

                   </div>

               </div>
           </div>
       </section><!--/#title-->
<div class="container">
<div class="row">
  <div class="checkout-wrap">
    <ul class="checkout-bar">

        <a href="#"><li class="visited first">Select Date</li></a>

      <li class="visited">Choose your Stay</li>

      <li class="visited">Enhance your Stay</li>

      <li class="visited">Additional</li>

      <li class="active">Review & Billing</li>

    </ul>
  </div>


	<div class="MainDiv2">
    <div class ="container">
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

	// RESORT

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

	$RCode=$_SESSION['RCode'];
	$result=mysql_query("SELECT * FROM reserved_tbl Where RCode='$RCode' ORDER BY ID");

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
		echo "<td><b>".$Total."</b></td>";
		echo "<tr>";

	}

	?>

	</thead>
	</table>
	<?php

	echo "<hr size='30' />";
	$RCode=$_SESSION['RCode'];

	$resulty11=mysql_query("SELECT Price as Total FROM resortreserved_tbl where RCode='$RCode'");

	$count1=mysql_num_rows($resulty11);
	if($count1>=1){
	$rows=mysql_fetch_assoc($resulty11);

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
	echo "<div float:right>Total :".$Total2."</div>";
	echo "Down Payment : " . $Downpayment. "(&nbsp;20% of Total Payment)". "<br>";

	$Trans="INSERT INTO reservedcomplete_tbl (UserID,DateFrom,DateTo,EventName,Total,Downpayment,RCode,Status,ReceiptPicture) values('$userid','$DateFrom','$DateTo','$EventName','$Total2','','$RCode','Pending','')";
	$resultTrans=mysql_query($Trans);

	?>

	<br>



	<input type="Submit" name="submit" class="btn btn-success pull-right" value="Profile"/><br>
	</form>

</div>
</div><!--Customer INFORMATION-->
	</div><!-- CalendarViewwing-->




</div>
</div>	<!--CONTATINER-->



<br><br>
<?php include('../View/footer.php');?>
</body>


 </html>
