
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

      <li class="visited">Additional</li>

      <li class="visited">Review & Billing</li>

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

	<form method="POST" action="Book-Gloful-Step5TnC.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	<h3>&nbsp;

	<?php

		$_SESSION['RCode'];
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
			$q2="Select * from reserved_tbl where RCode='$RCode'";
			$r2=mysql_query($q2);
			while($row=mysql_fetch_assoc($r2))
			{
				$RoomType=$row['Type'];
				$RoomQty=$row['Quantity'];
				$RoomPrice=$row['Price'];

				echo "Room : ".$RoomType."<br>";
				echo "Qty: ".$RoomQty."<br>";
				echo "Php: ".$RoomPrice."<br>";


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


		?>

	</h3>
   <br>


	<br><br><br>
	<br><br><br>


</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2>Terms & Condition</h2><br>

    <div class="container">
	<table class="table table-hover">
	<thead class="thead">
    <div class="container">
	<tr>
  <?php

  $select="Select * from terms_tbl";
  $result=mysql_query($select);
  while($row=mysql_fetch_assoc($result))
  {
  $Terms=$row['terms'];

  echo "<tr>".$Terms ."<br></tr>";

  }
    ?>	<input type="checkbox" value='' name='' required/> Do you agree ?


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
