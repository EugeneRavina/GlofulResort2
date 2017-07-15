
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
	
	<form method="POST" action="Book-Gloful-Step5TnC.php">
	<h3>&nbsp; Select Date <br>
	&nbsp; <input type="hidden" name="Date" value="<?php

		echo $_SESSION['Date']; ?>"/>


	<?php echo $_SESSION['Date'];
		 $RCode=$_SESSION['RCode'];
		 $Date=$_SESSION['Date'];
		if(isset($_POST['submit']))
		{
			
		$PackageName=$_POST['PckgName'];
		$Desc=$_POST['Desc'];
			$Price=$_POST['Price'];

		
			

			if($_POST['Type']=='Other')
			{
			$Type=$_POST['OtherType'];
			}else 
			{
			$Type=$_POST['Type'];	
			}
		$CelebName=$_POST['CelebName'];
		$Theme=$_POST['Theme'];
		$Motif=$_POST['Motif'];
		$Guest=$_POST['Guest'];
		echo "<br>";
		echo "Package:". $PackageName. "<br>";
		echo "Desc:". $Desc. "<br>";
		echo "Event:". $Type. "<br>";
		echo "Name:".$CelebName. "<br>";
		echo "Theme:".$Theme. "<br>";
		echo "Motif:".$Motif. "<br>";
		echo "Guest:".$Guest. "<br>";
		echo "Price:".number_format($Price,2). "<br>";
		
		$query="INSERT INTO resortreserved_tbl (Package,Description,EventName,CName,Theme,Motif,Guest,Dates,RCode,Price) values('$PackageName','$Desc','$Type','$CelebName','$Theme','$Motif','$Guest','$Date','$RCode','$Price')";
		$resulta=mysql_query($query);
		
		$more1=TRUE;
		$i=1;
		$ii=1;
			while($more1){

			if(isset($_POST['RQuantity'.$i]))
			{

				if($_POST['RQuantity'.$i]!=0)
				{
					echo "<br>";
					/* echo $_POST['Type'.$i];  */
					$Type= $_POST['RType'.$i];
					$Rid= $_POST['Rid'.$i];
					echo $Type;
					echo "--";
					$Quantity=$_POST['RQuantity'.$i];
					echo $Quantity;
					echo "--";
					$Price=$_POST['RPrice'.$i];
					$Max=$_POST['Max'.$i];
					echo "--";
					echo $Max;
					echo "--";
					$PickTime=$_POST['Timepick'.$i];
					echo $PickTime;






					echo "<input type='hidden' name='Type".$ii."' value='".$_POST['RType'.$i]."'>";
					echo "<input type='hidden' name='Rid".$ii."' value='".$_POST['Rid'.$i]."'>";
					echo "<input type='hidden' name='Max".$ii."' value='".$_POST['Max'.$i]."'>";
					echo "<input type='hidden' name='CQuantity".$ii."' value='".$_POST['RQuantity'.$i]."'>";

					$RCode=$_SESSION['RCode'];
					$Total=$_POST['Timepick'.$i] * $_POST['RQuantity'.$i];
					$_SESSION['Total'.$i]=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$sql="Insert Into reserved_tbl (UserID,Type,Quantity,Price,Capacity,Total,RCode)values ('$userid','$Type','$Quantity','$PickTime','$Max','$Total','$RCode')";
					$result=mysql_query($sql);
					$_SESSION['RPrice'.$i] = $_POST['RPrice'.$i];
					echo "<input type='hidden' name='RPrice".$i."' value='".$_SESSION['RPrice'.$i]."'>";
					echo "<input type='hidden' name='Total".$i."' value='".$_SESSION['Total'.$i]."'>";
				}


		/* FOR COMPARING GUEST*/

			}

			else
			{
		$more1=FALSE;

			}
			$ii ++;
			$i++;


		}
		
		
		
		}
		
		
		
		
		
		
		?>
		<input type="hidden" name="Type" value="<?php echo $Type;?>">
		<input type="hidden" name="CelebName" value="<?php echo $CelebName;?>">
		<input type="hidden" name="Theme" value="<?php echo $Theme;?>">
		<input type="hidden" name="Motif" value="<?php echo $Motif;?>">
		<input type="hidden" name="Guest" value="<?php echo $Guest;?>">
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
	  
	  
	  
	</tr>
	</thead>

	</table>

	

		<br>
		
 <br>
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form >
  <form method="POST" action="Book-Gloful.php">

	<input type="hidden" name="Date" value="<?php   echo $_SESSION['Date'];?> "/>

	<input type="Submit" name="submit" class="btn btn-info"value="Back"/>


	</form>
</div>
</div>
	</div><!-- CalendarViewwing-->
</div>	<!--CONTATINER-->


<?php include('../View/footer.php');?>

</body>


 </html>
