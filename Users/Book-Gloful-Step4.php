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
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
		</script>
</head>

<body onload="startTime()">
    <header id="header">
	    <?php include('NavTopBar.php');?>

    </header>
<div class="container">
<div class="row">
  <div class="checkout-wrap">
    <ul class="checkout-bar">

        <a href="#"><li class="visited first">Select Date</li></a>

      <li class="visited">Choose your Stay</li>

      <li class="visited">Enhance your Stay</li>

      <li class="active">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">
	<form method="POST" action="Book-Gloful-Step5.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	&nbsp;<h3>  Date:
	<?php
	date_default_timezone_set('asia/kuala_lumpur');
	$time= date("h:i:s");
	if(isset($_POST['submit'])){

		echo $DateFrom=$_SESSION['DateFrom'];
		echo " to";
		echo $DateTo=$_SESSION['DateTo'];
		$Guest=$_POST['Guest'];
		$Schedule=$_POST['Schedule'];

		echo "<BR>";
		echo "Schedule: ".$Schedule."<br>";;
		echo "No. Guest: ".$Guest;

		$more=TRUE;
		$i=1;

		$int =1;
		while($more){

			if(isset($_POST['Quantity'.$i]))
			{


				if($_POST['Quantity'.$i]!=0)
				{
					echo "<br>";
					/* echo $_POST['Type'.$i];  */
					echo "Cottage:";
					$Type= $_POST['Type'.$i];
					echo $Type;

					$Quantity=$_POST['Quantity'.$i];
					echo "<br>Qty:";
					echo $Quantity;
					echo "<br>";
					$Price=$_POST['Price'.$i];
					echo "Php:".$Price;
					$Pax=$_POST['Pax'.$i];



					echo "<input type='hidden' name='Type".$int."' value='".$_POST['Type'.$i]."'>";
					echo "<input type='hidden' name='Cid".$int."' value='".$_POST['Cid'.$i]."'>";
					echo "<input type='hidden' name='Pax".$int."' value='".$_POST['Pax'.$i]."'>";
					echo "<input type='hidden' name='Price".$int."' value='".$_POST['Price'.$i]."'>";
					echo "<input type='hidden' name='CQuantity".$int."' value='".$_POST['Quantity'.$i]."'>";

					$RCode=$_SESSION['RCode'];
					$Total=$_POST['Price'.$i] * $_POST['Quantity'.$i];
					$_SESSION['Total'.$i]=$_POST['Price'.$i] * $_POST['Quantity'.$i];
					$sqlqw="Insert Into reserved_tbl (UserID,Type,Quantity,Price,Capacity,Total,RCode,DateFrom,DateTo)values ('$userid','$Type','$Quantity','$Price','$Pax','$Total','$RCode','$DateFrom','$DateTo')";
					$resultsql=mysql_query($sqlqw);
					$_SESSION['Price'.$i] = $_POST['Price'.$i];
					echo "<input type='hidden' name='Price".$i."' value='".$_SESSION['Price'.$i]."'>";
					echo "<input type='hidden' name='Total".$i."' value='".$_SESSION['Total'.$i]."'>";
				}


			}

			else
			{
		$more=FALSE;

			}
			$int ++;
			$i++;
		}
	}
	?>
	&nbsp; <input type="hidden" name="Guest" value="<?php echo $Guest; ?>"/>
	&nbsp; <input type="hidden" name="Schedule" value="<?php echo $Schedule; ?>"/>

</h3>

	<br><br><br>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Choose Your Reservation</h2><br>

    <div class="container">
	<table class="table table-hover">
	<thead class="thead">
	<tr>
	<th> </th>
	<th> Rooms Available</th>
	<th> Capacity</th>
	<th> No.Rooms</th>

	<th> Price</th>
	<th> How many Rooms</th>

	<?php
	$sql="Select * from room_tbl ";
	$result=mysql_query($sql);

	$int =1;
		while($row=mysql_fetch_assoc($result))
		{
		$Rid=$row['Rid'];
		$Type=$row['RType'];
		$Price=$row['Price'];

		$Max=$row['Capacity'];
		$Desc=$row['RDescription'];
		$Quantity=$row['Quantity'];
		$Time=$row['timeav'];
		$pic=$row['RImage'];
		$path="../Images/Rooms/".$pic;

		echo "<input type='hidden' name='RPrice".$int."' value='".$Price."'>";
		echo "<input type='hidden' name='RType".$int."' value='".$Type."'>";
		echo "<input type='hidden' name='Max".$int."' value='".$Max."'>";
		echo "<input type='hidden' name='Rid".$int."' value='".$Rid."'>";
		echo "<input type='hidden' id='Quantity".$int."' value='".$Quantity."'>";

		echo "<tr>";
		echo "<td>".'<img src="'.$path.'" width="80" height="80"/>'. "</td>";
		echo "<td>". $Type."</td>";
		echo "<td>". $Max."</td>";
		echo "<td>". $Quantity."</td>";

		echo "<td>".$Price."</td>";
		/* echo "<td> <font color='Red'>Php: ". $Price ."</font></td>"; */

		echo "<td><input type='number' name='RQuantity".$int."' min='0' max='".$Quantity."' size='2'><i class='fa fa-pencil'></i></a></td>";

		echo "</tr>";

	$int ++;
		}
	?>
	</thead>
	</table>

	<!--Quantity HHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form>
</div>
	</div><!-- CalendarViewwing-->

</div>
</div>	<!--CONTATINER-->
<br><br>
<?php include('../View/footer.php');?>
</body>


 </html>
