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

	<div class="Cart">

	<form method="POST" action="Book-Gloful-Step5TnC.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">

	&nbsp;<h3>  Date:
	<?php
	if(isset($_POST['submit'])){

		echo $DateFrom=$_SESSION['DateFrom'];
		echo " to";

		echo $DateTo=$_SESSION['DateTo'];
		echo "<br>";
		$Guest=$_POST['Guest'];
		$Schedule=$_POST['Schedule'];


		echo "Schedule: ".$Schedule."<br>";;
		echo "No. Guest: ".$Guest."<br>";
	$RCode=$_SESSION['RCode'];
	$squery="SELECT * FROM reserved_tbl Where RCode='$RCode' Order By ID ASC";
	$sresult=mysql_query($squery);
	while($row=mysql_fetch_assoc($sresult))
	{
		$Type=$row['Type'];
		$CQuantity=$row['Quantity'];
		$CPrice=$row['Price'];

		echo "Cottage: ".$Type. "<br>";
		echo "Qty: ".$CQuantity. "<br>";
		echo "Php: ".$CPrice. "<br>";

	}

		$result=mysql_query("Select Price from stime where Types='$Schedule'");
		$rows=mysql_fetch_assoc($result);
		$SchedulePrice=$rows['Price'];


		$GuestTotal=$SchedulePrice * $Guest;

	$more1=TRUE;
		$i=1;
		$ii=1;
			while($more1){

			if(isset($_POST['RQuantity'.$i]))
			{

				if($_POST['RQuantity'.$i]!=0)
				{

					/* echo $_POST['Type'.$i];  */
					$Type= $_POST['RType'.$i];
					echo "Room:";
					echo $Type;
					$Rid= $_POST['Rid'.$i];
					echo "<br>Qty:";
					$Quantity=$_POST['RQuantity'.$i];
					echo $Quantity;

					$Price=$_POST['RPrice'.$i];
					echo "<br>";
					echo "Php:".$Price ."<br>";
					$Max=$_POST['Max'.$i];


					echo "<input type='hidden' name='Type".$ii."' value='".$_POST['RType'.$i]."'>";
					echo "<input type='hidden' name='Rid".$ii."' value='".$_POST['Rid'.$i]."'>";
					echo "<input type='hidden' name='Max".$ii."' value='".$_POST['Max'.$i]."'>";
					echo "<input type='hidden' name='CQuantity".$ii."' value='".$_POST['RQuantity'.$i]."'>";

					$RCode=$_SESSION['RCode'];
					$Total=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$_SESSION['Total'.$i]=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$sql="Insert Into reserved_tbl (UserID,Type,Quantity,Price,Capacity,Total,RCode,DateFrom,DateTo)values ('$userid','$Type','$Quantity','$Price','$Max','$Total','$RCode','$DateFrom','$DateTo')";
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
	date_default_timezone_set('asia/kuala_lumpur');
	$time= date("h:i:s");

	$RCode=$_SESSION['RCode'];
	$query=mysql_query("INSERT INTO reservedcom_tbl (UserID,DateFrom,DateTo,Schedule,Guest,Total,RCode) values ('$userid','$DateFrom','$DateTo','$Schedule','$Guest','$GuestTotal','$RCode')");



	?>


	&nbsp; <input type="hidden" name="Guest" value="<?php echo $Guest; ?>"/>
	&nbsp; <input type="hidden" name="Schedule" value="<?php echo $Schedule; ?>"/>


</h3>


	<br><br><br>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2>Choose Your Reservation</h2><br>

    <div class="container">
    <table class="table table-hover">
  	<thead class="thead">

  	<tr>
  <?php

  $select="Select * from terms_tbl";
  $result=mysql_query($select);
  while($row=mysql_fetch_assoc($result))
  {
  $Terms=$row['terms'];

  echo "<tr>".$Terms ."<br></tr>";

  }
  	?>



  	</tr>
  	</thead>

  	</table>



	<?php


	?>
	<input type="checkbox" name="TNC" value="1" required/> Do you agree ?
	<!--Quantity HHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->

	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form>

	<!-- CalendarViewwing-->




</div>
</div>
</div>	<!--CONTATINER-->




</body>


 </html>
