
<?php
require("../Users/connection.php");
session_start();
$userid=$_SESSION['UserID'] ;
?>

<!DOCTYPE html>
<HTML lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

     <!-- core CSS -->
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
		<li>Event</li>
		<li>Additional</li>
		<li>Payment</li>
	</ul>
	</div>

	<div class="Cart">
	
	<?php
	if(isset($_POST['submit']))
	{
		
		$RCode=$_SESSION['RCode'];
		if(!empty($_POST['OtherCharges'])) {
			foreach($_POST['OtherCharges'] as $OtherCharges) {
		
			$sql3="INSERT INTO reservedcateringother_tbl (RCode,AddID) values ('$RCode','$OtherCharges')";
			$result3=mysql_query($sql3);
		
             //echoes the value set in the HTML form for each checked checkbox.
             //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
			}
			}
		
	}
	
	?>
	
	<form method="POST" action="Book-Catering-Finish.php">
	<h3>&nbsp; Date :
	 


	<?php echo $_SESSION['DateFrom'];
	echo " to ";
	echo $_SESSION['DateTo'];
		 $RCode=$_SESSION['RCode'];
		 $DateFrom=$_SESSION['DateFrom'];
		 $DateTo=$_SESSION['DateTo'];
		
		$Type=$_SESSION['Type'];
		$Celebname=$_SESSION['Celebrantname'];
		$Theme=$_SESSION['Theme'];
		$Motif=$_SESSION['Motif'];
		$Guest=$_SESSION['Guest'];
		$VenueName=$_SESSION['VenueName'];
		$PriceV=$_SESSION['PriceV'];
		if(isset($_POST['Menu'])){	
		$Menu=$_POST['Menu'];
		}
		$Times=$_SESSION['Time'];
		$Package=$_SESSION['Package'];
		echo "<br>Event Name: " .$_SESSION['Type'];
		echo "<br>Celebrant Name: ".$_SESSION['Celebrantname'];
		echo "<br>Theme: ".$_SESSION['Theme'];
		echo "<br>Motif: ".$_SESSION['Motif'];
		echo "<br>Number of Guest: ".$_SESSION['Guest'];
		echo "<br>Package : ". $_SESSION['Package'];
		echo "<br>Venue : ".$_SESSION['VenueName']." Php: ".$_SESSION['PriceV']."(Per Head)";
		if(isset($_POST['Menu'])){	
		echo "<br>Menu : ". $Menu;
		}
		echo "<br>Time for Venue : ". $_SESSION['Time'] ." Hours";
		$Extend=$_SESSION['Extend'];
		if($Extend!=0)
			{
			echo "<br>Extention Hour : " . $Extend . "<br>";
					
			}else
			{
				$Extend=0;
			}
		
		$Select="Select Name , Price from reservedcateringother_tbl as a INNER JOIN othercharges_tbl as b ON a.AddID=b.AddID where RCode='$RCode'";
		$resultSelect=mysql_query($Select);
		
		while($row=mysql_fetch_assoc($resultSelect))
			{
			$Name=$row['Name'];
			$Price=$row['Price'];
			echo "Added :".$Name."<br>";
			echo "Price:".$Price."<br>";
			}
		
		
			
		
		
		$insert="INSERT INTO reservedcatering_tbl (DateFrom, DateTo, EventName, CName, Theme, Motif, Guest, Package,Menu, Venue, Price, TimeVenue, TimeExtend, RCode) values('$DateFrom','$DateTo','$Type','$Celebname','$Theme','$Motif','$Guest','$Package','$Menu','$VenueName','$PriceV','$Times','$Extend','$RCode')";
		$resultinsert=mysql_query($insert);
		
		?>
		
		
		
		
		
		
		
	
	</h3>
   <br>


	<br><br><br>
	<br><br><br>



	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
	<table class="table table-hover">
	<thead class="thead">
    <div class="container">
	<tr>
	<center><strong> TERMS & CONDITIONS
	</center></strong>
<?php
	
	
	
	
	?>
	<input type="checkbox" value='' name='' required/> Do you agree ?  
	  
	  
	</tr>
	</thead>

	</table>

	

		<br>
		
 <br>
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form >
  <form method="POST" action="Book-Gloful.php">

	<input type="hidden" name="Date" value=" "/>

	<input type="Submit" name="submit" class="btn btn-info"value="Cancel"/>


	</form>
</div>
</div>
	</div><!-- CalendarViewwing-->
</div>	<!--CONTATINER-->


<?php include('../View/footer.php');?>

</body>


 </html>
