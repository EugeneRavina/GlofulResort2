
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

</head>

<body>
    <header id="header">
	    <?php include('NavTopBar.php');?>
    </header>
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

	<form method="POST" action="Book-Gloful-Terms&Condition.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	<h3>&nbsp; Select Date <br>
	&nbsp; <input type="hidden" name="Date" value=""/>


	<?php echo $_SESSION['DateFrom'];
	echo " to ";
	echo $_SESSION['DateTo'];
		 $_SESSION['RCode'];

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
		echo $Desc. "<br>";
		if($Type!=NULL){
		echo "Event:". $Type. "<br>";
		//$_SESSION['Type']=$Type;
		}
		if($CelebName!=NULL){
		echo "Name:".$CelebName. "<br>";
		//$_SESSION['CelebName']=$CelebName;
		}
		if($Theme!=NULL){
		echo "Theme:".$Theme. "<br>";
		//$_SESSION['Theme']=$Theme;
		}
		if($Motif!=NULL){
		echo "Motif:".$Motif. "<br>";
		//$_SESSION['Motif']=$Motif;
		}
		echo "Guest:".$Guest. "<br>";
		//$_SESSION['Guest']=$Guest;
		echo "Price:".number_format($Price,2). "<br>";

		if(isset($_POST['cater']))
		 {
			 $Cater=$_POST['cater'];
			 if($Cater==1)
			{

			header("Location:Book-Gloful-Catering.php");
			$_SESSION['Package']=$PackageName;
			$_SESSION['Desc']=$Desc;
			$_SESSION['Price']=$Price;
			$_SESSION['Type']=$Type;
			$_SESSION['CelebName']=$CelebName;
			$_SESSION['Theme']=$Theme;
			$_SESSION['Motif']=$Motif;
			$_SESSION['Guest']=$Guest;
			}
		 }
		}
		?>
		<input type="hidden" name="PckgName" value="<?php echo $PackageName?>">
		<input type="hidden" name="Desc" value="<?php echo $Desc?>">
		<input type="hidden" name="Price" value="<?php echo $Price?>">
		<input type="hidden" name="Type" value="<?php echo $Type;?>">
		<input type="hidden" name="CelebName" value="<?php echo $CelebName;?>">
		<input type="hidden" name="Theme" value="<?php echo $Theme;?>">
		<input type="hidden" name="Motif" value="<?php echo $Motif;?>">
		<input type="hidden" name="Guest" value="<?php echo $Guest;?>">
	</h3>
   <br>


	<br><br><br>
	<br><br><br>


</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Choose Your Reservation</h2><br>

    <div class="container">
	<table class="table table-hover center">
	<thead class="thead">
    <div class="container">
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

		echo "<td> Php: ".$Price."/12 hours</td>";

		/* echo "<td> <font color='Red'>Php: ". $Price ."</font></td>"; */

		echo "<td><input type='number' name='RQuantity".$int."' min='0' max='".$Quantity."' size='2'></a></td>";


		echo "</tr>";

	$int ++;
		}
	?>
	</tr>
	</thead>
	</table>

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
