
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

      <li class="active">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">

	<form method="POST" action="Book-Gloful-Catering-Terms&Condition.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	&nbsp; Select Date <br>
	&nbsp; <input type="hidden" name="Date" value=""/>


	<?php

		if(isset($_POST['submit']))
		{
			$_SESSION['RCode'];
			$Days=$_SESSION['Days'];
			echo "Date:" .$_SESSION['DateFrom'];
			$DateFrom=$_SESSION['DateFrom'];

			echo " to ";
			echo $_SESSION['DateTo'];
			$DateTo=$_SESSION['DateTo'];
			echo "<br>";
			echo $_SESSION['Package'];
			$Package=$_SESSION['Package'];
			echo "<br>";
			echo $_SESSION['Desc'];
			$Desc=$_SESSION['Desc'];
			$Type=$_SESSION['Type'];
			echo "<br>";
			echo "Php:".$_SESSION['Price'];
			$PriceResort=$_SESSION['Price'];
			if($_SESSION['Type']!=Null){
			echo "<br> Event/Purpose: " .$_SESSION['Type'];
			}
			if($_SESSION['CelebName']!=Null){
			echo "<br> Celebrant Name:" .$_SESSION['CelebName'];
			$Celebname=$_SESSION['CelebName'];
			}
			if($_SESSION['Theme']!=Null){
			echo "<br> Theme:" .$_SESSION['Theme'];
			$Theme=$_SESSION['Theme'];
			}
			if($_SESSION['Motif']!=Null){
			echo "<br> Motif:" .$_SESSION['Motif'];
			$Motif=$_SESSION['Motif'];
			}
			echo "<br> Guest : " .$_SESSION['Guest'] . "<br>";
			$Guest=$_SESSION['Guest'];

			$RCode=$_SESSION['RCode'];

			$q1="Select * from reservedcatering_tbl where RCode='$RCode'";
			$r1=mysql_query($q1);
			while($row=mysql_fetch_assoc($r1))
			{
				$PackageMenu=$row['Package'];
				$Menu=$row['Menu'];
				$Venue=$row['Venue'];
				$PriceV=$row['Price'];
				$TimeVenue=$row['TimeVenue'];
				$TimeExtend=$row['TimeExtend'];

				echo "Package:".$PackageMenu. "<br>";
				echo "Menu:".$Menu. "<br>";
				echo "Venue:".$Venue;
				echo " Php:".$PriceV. "/Per Head<br>";
				echo "Time for Venue:".$TimeVenue. "<br>";
				if($TimeExtend!=0){
				echo "Extension:".$TimeVenue. "<br>";
				}


			}

			/// ROOMS
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
					echo "<br>";
					$Quantity=$_POST['RQuantity'.$i];
					echo "No. of Rooms: ";
					echo $Quantity;
					echo "<br>";
					$Price=$_POST['RPrice'.$i];
					echo "Price: Php-";
					echo $Price;
					$Max=$_POST['Max'.$i];

					echo "<input type='hidden' name='Type".$ii."' value='".$_POST['RType'.$i]."'>";
					echo "<input type='hidden' name='Rid".$ii."' value='".$_POST['Rid'.$i]."'>";
					echo "<input type='hidden' name='Max".$ii."' value='".$_POST['Max'.$i]."'>";
					echo "<input type='hidden' name='CQuantity".$ii."' value='".$_POST['RQuantity'.$i]."'>";

					$RCode=$_SESSION['RCode'];
					if($Days>1){

					$Total1=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$Total2=$Total1*2;
					$Total=$Total2*$Days;
					}else{
					$Total=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];

					}
					$_SESSION['Total'.$i]=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$sql="Insert Into reserved_tbl (UserID,Type,Quantity,Price,Capacity,Total,RCode,DateFrom,DateTo)values ('$userid','$Type','$Quantity','$Price','$Max','$Total','$RCode','$DateFrom','$DateTo')";
					$result=mysql_query($sql);
					$_SESSION['RPrice'.$i] = $_POST['RPrice'.$i];
					echo "<input type='hidden' name='RPrice".$i."' value='".$_SESSION['RPrice'.$i]."'>";
					echo "<input type='hidden' name='Total".$i."' value='".$_SESSION['Total'.$i]."'>";
				}




			}

			else
			{
		$more1=FALSE;

			}
			$ii ++;
			$i++;


		}
		///ROOOMS


		}

		?>


   <br>


	<br><br><br>
	<br><br><br>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Choose Your Reservation</h2><br>

    <div class="container">
	<table class="table table-hover">
	<thead class="thead">
    <div class="container">
	<tr>
	<th> </th>

	<th> Other Charges</th>
	<th> Description</th>

	<th> Price</th>


<?php


			$query="SELECT * FROM othercharges_tbl";
			$queryresult=mysql_query($query);
			while($row=mysql_fetch_assoc($queryresult))
			{
				$AddID=$row['AddID'];
				$Name=$row['Name'];
				$Description=$row['Description'];
				$Price=$row['Price'];
				echo "<tr>";
				echo "<td><center><input type='checkbox' name=OtherCharges[] value='".$AddID."'></center></td>";
				echo "<td>".$Name."</td>";
				echo "<td>".$Description."</td>";
				echo "<td>".$Price."</td>";

				echo "</tr>";
			}

	?>
	</tr>
	</thead>

	</table>



		<br>

 <br>
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form >

</div>
</div>
</div>
	</div><!-- CalendarViewwing-->
</div>	<!--CONTATINER-->


<?php include('../View/footer.php');?>

</body>


 </html>
