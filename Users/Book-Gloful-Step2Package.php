
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

      <li class="active">Enhance your Stay</li>

      <li class="">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">
	<?php

	if(isset($_POST['submit'])){

		$Date=$_POST['Date'];
	} ?>
	<form method="POST" action="Book-Gloful-Additional.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	<h3>&nbsp; Select Date <br>
	&nbsp; <input type="hidden" name="Date" value=""/>

	<?php echo $_SESSION['DateFrom'];
	echo ' to ';
	echo $_SESSION['DateTo'];
		 $_SESSION['RCode'];

		$sql="select * from packageresort_tbl where ID='$_GET[id]'";
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
		$id=$row['ID'];
		$name=$row['Name'];
		$desc=$row['Description'];
		$price=$row['Price'];
		$pic=$row['Image'];
		$path="../Images/Background/".$pic;


		echo "<br>";
		echo $name;
		echo "<br>";

		echo  $desc;
		echo "<br>";
		echo "Php: ".Number_format($price,2) ;
		}
		?>

		<input type="hidden" name="PckgName" value="<?php echo $name?>">
		<input type="hidden" name="Desc" value="<?php echo $desc?>">
		<input type="hidden" name="Price" value="<?php echo $price?>">

	</h3>
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
	<tr>


	Event/Purpose :
	<select name="Type" >
		<option value="Other" require/> Other
		<?php



		$query="Select * from event_tbl";
		$resultquery=mysql_query($query);
		while($row=mysql_fetch_assoc($resultquery))
			{
				$Type=$row['EType'];

				echo "<option value='".$Type."'/> ".$Type."";
			}

		?>


</select>

	  &nbsp;&nbsp;&nbsp;<input type="text" name="OtherType" class="txtbox"  value='' placeholder="Other"> <br>
	  *Name of the Celebrant : <input type="text" class="txtbox" name="CelebName" /><br>
	  *Theme : <input type="text" name="Theme" class="txtbox" /><br>
	  *Color Motif : <input type="text" name="Motif" class="txtbox" /><br>
	  Number of Guest : <input type="number" min="1" name="Guest" class="txtbox" placeholder="Maximum of 300 " required/><br>

	  <input type="checkbox" name="cater" value="1"/> Avail Catering?



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
