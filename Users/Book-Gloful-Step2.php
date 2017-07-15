<?php
require("connection.php");
session_start();

$userid=$_SESSION['UserID'] ;
 $qwerty=mysql_query("SELECT * FROM reservedcomplete_tbl WHERE UserID='$userid' AND Status='Pending'");
 $rowqwerty=mysql_num_rows($qwerty);

 if($rowqwerty>=1)
 {

	 echo "<script>alert('Please settled down your pending reservation!');window.location.href='Profile.php'</script>";

 }else
	{

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
  <div class="checkout-wrap">
    <ul class="checkout-bar">

        <a href="#"><li class="active first">Select Date</li></a>

      <li class=" ">Choose your Stay</li>

      <li class="next">Enhance your Stay</li>

      <li class="">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>
	<form method="POST" action="Book-Cater-Outdoor.php">
	<div class="Cart">
	<?php if(isset($_POST['submit']))
	{
		$RCode=md5(uniqid(rand()));
		$_SESSION['RCode']=$RCode;
		$DateFrom=$_POST['DateFrom'];
		$DateTo=$_POST['DateTo'];

		$DateFromInt=strtotime($DateFrom);
		$DateToInt=strtotime($DateTo);
		$Day=$DateToInt-$DateFromInt;
		$Days =floor($Day)/ (24* 60* 60);

	if($Days>=0)
		{

		$Option=$_POST['option'];
		if($Option=="Resort")
			{



			session_start();
			$_SESSION['RCode']=$RCode;
			$_SESSION['DateFrom']=$DateFrom;
			$_SESSION['DateTo']=$DateTo;
			$_SESSION['Days']=$Days;

			header("Location:Book-Gloful-Step2Resort.php");
			}
		if($Option=="Catering")
			{
				if($Days==0)
				{


	 ?>
   <h2 class="center">Your Selection</h2>
   <div class="container">
		<h3> Date:

				<input type="hidden" name="Option" value="<?php echo $Option; ?>"/>

				<?php if(isset($_POST['submit'])){


			echo $DateFrom;
			echo " to ";
			echo $DateTo;
			$_SESSION['DateFrom']=$DateFrom;
			$_SESSION['DateTo']=$DateTo;

				} ?>
		</h3>
		<br>
		<br><br><br>
		<br><br><br>
		<center>
    </div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv center">
    <h2>Choose Your Reservation</h2><br>

    <div class="container">
		<table class="table table-striped table-hover">
			<thead class="thead">
				<tr>
					Event Type:
					<select name="Type">
					<option value="Other"/> Other
						<?php
						$sql="Select * from event_tbl";
						$result=mysql_query($sql);
						while($row=mysql_fetch_assoc($result))
						{
							$type=$row['EType'];
							$eventtypeid=$row['Eid'];
							echo "<option value='".$type."'> ".$type."</option>";
						}
						?>
					</select>
					&nbsp;&nbsp;&nbsp;<input type="text" name="Other" placeholder="Other"/>
					<br>
					Name of the Celebrant: <input type="text" name="Celebrantname" value="" required/><br>
					Theme: <input type="text" name="Theme" required/><br>
					Color Motif: <input type="text" name="Motif" required/><br>
					Number of Guest: <input type="number" name="Guest" required/><br>
					Cater Option: <br>
					&nbsp;&nbsp;&nbsp;<input type="radio" name="option1" value="Indoor"> Indoor Catering
					&nbsp;&nbsp;&nbsp;<input type="radio" name="option1" value="Other"> Other

				</tr>
				</thead>
			</table>
		<input type="Submit" name="submit" class="btn btn-success" value="NEXT"/>
	</form >
	</center>
	</div>
	</div>
</div><!-- CalendarViewing-->
</div>	<!--CONTATINER-->

<br>
<?php include('../View/footer.php');?>
</body>
</html>
<?php
				}else
				{
					echo '<script>alert("Catering if for 1 Day Event, Please make sure the date you selected is the same Thank you !");window.location.href="Book-Gloful.php"</script>';
				}
			}



		}
		else
		{
		echo '<script>alert("Invalid Date Make sure the date is valid");window.location.href="Book-Gloful.php"</script>';
		}
	}
}
 ?>
