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

     <?php include('../View/CSSLinks.php');?>

     <?php include('../View/JSLinks.php');?>
    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
</head>

<body>
    <header id="header">
	      <?php include('NavTopBar.php');?>>
    </header>
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

      <li class="active">Enhance your Stay</li>

      <li class="">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">
	<?php
	if(isset($_POST['submit'])){

		$Date=$_POST['Date'];
		$Guest=$_POST['Guest'];
		$Schedule=$_POST['Schedule'];




		$_SESSION['Guest']=$Guest;
		$_SESSION['Schedule']=$Schedule;


	}
	if(isset($_POST['submity']))
	{

			$Type=$_POST['Type'];
			$Price=$_POST['Price'];
			$Select=$_POST['select'];



			$Date=$_POST['Date'];
			$Guest=$_POST['Guest'];
			$Schedule=$_POST['Schedule'];

	}
	?>
	<form method="POST" action="Book-Gloful-Step4.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	&nbsp;<h3>  Date:
	<input type="hidden" name="Date" value="<?php echo $Date; ?>"/>
	<input type="hidden" name="Guest" value="<?php echo $Guest; ?>"/>
	<input type="hidden" name="Schedule" value="<?php echo $Schedule; ?>"/>
	<?php

	if(isset($_POST['submit'])){
		echo $DateFrom=$_SESSION['DateFrom'];
		echo " to ";
		echo $DateTo=$_SESSION['DateTo'];
		echo "<br>";
		     $_SESSION['RCode'];
		echo "Schedule: ".$Schedule."<br>";;
		echo "No. Guest: ".$Guest;



	}
	if(isset($_POST['submity']))
	{

			$Type =$_POST['Type'];
			$Price=$_POST['Price'];
			$Select=$_POST['select'];

			$Date=$_POST['Date'];
			$Guest=$_POST['Guest'];
			$Schedule=$_POST['Schedule'];

		echo $Date;

		echo "Schedule: <br>".$Schedule."<br>";;
		echo "No. Guest<br>".$Guest;
		echo "Cottage: <br>".$Type."------ Php.".$Price*$Select ;

	}

?>
</h3>

	<br><br><br>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Enhance Your Stay</h2><br>

    <div class="container">
	<table class="table table-hover">
	<thead class="thead">
	<tr>
	<th> </th>
	<th> Cottage</th>
	<th> Capacity</th>
	<th> Quantity</th>
	<th> Price</th>
	<?php
	$sql="Select * from cottage_tbl";
	$result=mysql_query($sql);
	$int= 1;

		while($row=mysql_fetch_assoc($result))
		{
		$Cid=$row['Cid'];
		$Type=$row['CType'];
		$Price=$row['CPrice'];

		$Pax=$row['Pax'];
		$Desc=$row['CDescription'];
		$Quantity=$row['Quantity'];
		$pic=$row['CImage'];
		$path="../Images/Cottage/".$pic;


		echo "<tr>";
		echo "<td>".'<img src="'.$path.'" width="80" height="80"/>'. "</td>";
		echo "<td>". $Type."</td>";
		echo "<input type='hidden' name='Type".$int."' value='".$Type."'>";
		echo "<input type='hidden' name='Cid".$int."' value='".$Cid."'>";
		echo "<input type='hidden' name='Pax".$int."' value='".$Pax."'>";

		echo "<td>". $Pax."</td>";
		echo "<td>". $Quantity."</td>";
		echo "<td> <font color='Red'>Php: ". Number_format($Price,2) ."</font></td>";
		echo "<input type='hidden' name='Price".$int."' value='".$Price."'>";

		echo "<td><input type='number' name='Quantity".$int."' value='0' min='0' max='".$Quantity."'  size='2' ></a></td>";

		echo "</tr>";

		$int++;
		}
	?>
	</thead>
	</table>

	<!--Quantity HHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->
  <br><br><br>
<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
<br><br>
<form method="POST" action="Book-Gloful-Step2Resort.php">

<input type="hidden" name="Date" value="<?php   if(isset($_POST['submit'])){

  $Date=$_POST['Date'];
  echo $Date;

} ?>"/>
</form>
	</div>
	</div>

	</form>



	<!-- CalendarViewwing-->
</div>
</div>	<!--CONTATINER-->
<br><br>
<?php include('../View/footer.php');?>
</body>


 </html>
