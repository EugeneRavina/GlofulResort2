<?php
require("../Users/connection.php");
session_start();
 $userid=$_SESSION['UserID'] ;

 $qwerty=mysql_query("SELECT * FROM reservedcomplete_tbl WHERE UserID='$userid' AND Status='Pending'");
 $rowqwerty=mysql_num_rows($qwerty);

 if($rowqwerty>=1){

	 echo "<script>alert('Please settled down your pending reservation!');window.location.href='Profile.php'</script>";

 }else {
 }
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
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
	</script>
	<script>
	function displayPackageB(){
    if ($("#packageB").is(":hidden")){
        $("#packageB").show();
        $("#buttonB").css('color', 'blue');
    } else if($("#packageB").is(":visible")){
        $("#packageB").hide();
        $("#buttonB").css('color','black');
    }

	}
	$('#buttonB').click(displayPackageB);

	function displayPackageA(){
    if ($("#packageA").is(":hidden")){
        $("#packageA").show();
        $("#buttonA").css('color', 'blue');
    } else if($("#packageA").is(":visible")){
        $("#packageA").hide();
        $("#buttonA").css('color','black');
    }

	}
	$('#buttonA').click(displayPackageA);
	</script>
	<style>
	#packageA{
    background-color: white;
    display: none;

	}

	#packageB {
    background-color: white;
    display: none;

	}
	</style>

</head>
<body>
<header id="header">
	      <?php include('NavTopbar.php');?>
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
		<form method="POST" action="Book-Gloful-Catering-Room.php">
      <h2 class="center">Your Selection</h2>
      <div class="container">
			Date:

			<?php
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
			if($_SESSION['Type']!=Null){
			echo "<br> Event/Purpose: " .$_SESSION['Type'];
			}
			if($_SESSION['CelebName']!=Null){
			echo "<br> Celebrant Name:" .$_SESSION['CelebName'];
			$CelebName=$_SESSION['CelebName'];
			}
			if($_SESSION['Theme']!=Null){
			echo "<br> Theme:" .$_SESSION['Theme'];
			$Theme=$_SESSION['Theme'];
			}
			if($_SESSION['Motif']!=Null){
			echo "<br> Motif:" .$_SESSION['Motif'];
			$Motif=$_SESSION['Motif'];
			}
			echo "<br> Guest : " .$_SESSION['Guest'];
			$Guest=$_SESSION['Guest'];
				$RCode=$_SESSION['RCode'];
			$sql0="SELECT Time from catering_tbl where id='$_GET[id]'";
		$result0=mysql_query($sql0);
		$row=mysql_fetch_assoc($result0);
		$Time=$row['Time'];
		echo "<input type='hidden' value='".$Time."' name='Time'/>";


			?>

			<br><br><br>
	</div>
	</div>
	<div class="MainDiv">
    <h2 class="center">Choose Your Reservation</h2><br>

    <div class="container">
		Select Venue :
	<select name="Venue">


		<?php


		$sql1="SELECT * from venue_tbl where id='$_GET[id]'";
		$result1=mysql_query($sql1);
		while($row=mysql_fetch_assoc($result1))
		{

		$VenID=$row['VenID'];
		$Type=$row['VenueName'];
		$Price=$row['Price'];


		echo '<option value="'.$VenID .'"/>'.$Type . " / P ". $Price . "(Per Head)";

		}

		echo '</select><br>';

		$ID=$_GET['id'];
		if($ID==1)
		{

		$sql2="SELECT * From menu_tbl";
		$result2=mysql_query($sql2);
			while ($row=mysql_fetch_assoc($result2))
			{
				$MenuName=$row['MenuName'];
				$MenuID=$row['MenuID'];
				echo '<table class="table table-striped table-hover">
				<thead class="thead">';

				echo "<tr><input type='radio' name='Menu' value='".$MenuName."'/>". $MenuName ." </tr>";

			$sql1="SELECT FoodName from food_tbl as a INNER JOIN menulist_tbl as b ON a.Fid=b.Fid Where MenuID='$MenuID'";
			$result1=mysql_query($sql1);
			echo "<td>";
			while($rows=mysql_fetch_assoc($result1)){

			$FoodName=$rows['FoodName'];
			echo $FoodName."<br>";

				}
		echo "</td>";
		echo '</thead></table>';



			}
		}else if($ID==2)
		{

		$foodtype="SELECT * from foodtype_tbl where FoodTypeID='1'";
		$foodtyperesult=mysql_query($foodtype);
		while($row=mysql_fetch_assoc($foodtyperesult))
			{
			echo '<table class="table table-striped table-hover">
			<thead class="thead">';

			$FoodType=$row['FoodType'];
			echo "<tr>";
			echo $FoodType . "<br>";
			echo "</tr>";
				$food="SELECT FoodName, Fid from food_tbl as a INNER JOIN foodtype_tbl as b ON a.FoodTypeID=b.FoodTypeID where FoodType='$FoodType'";
				$foodresult=mysql_query($food);

				while($row=mysql_fetch_assoc($foodresult))
				{
				$FoodName=$row['FoodName'];
				$Fid=$row['Fid'];
				echo "<input class=Choices type='checkbox' name='MainCourse[]' value='".$Fid."'>".$FoodName."<br>";

				}


			}
		$foodtype="SELECT * from foodtype_tbl where  FoodTypeID='3' ";
		$foodtyperesult=mysql_query($foodtype);
		while($row=mysql_fetch_assoc($foodtyperesult))
			{
			echo '<table class="table table-striped table-hover">
			<thead class="thead">';

			$FoodType=$row['FoodType'];
			echo "<tr>";
			echo $FoodType . "<br>";
			echo "</tr>";
				$food="SELECT FoodName, Fid from food_tbl as a INNER JOIN foodtype_tbl as b ON a.FoodTypeID=b.FoodTypeID where FoodType='$FoodType'";
				$foodresult=mysql_query($food);

				while($row=mysql_fetch_assoc($foodresult))
				{
				$FoodName=$row['FoodName'];
				$Fid=$row['Fid'];
				echo "<input class=Choices1 type='checkbox' name='Dessert' value='".$Fid."'>".$FoodName."<br>";

				}


			}
			$foodtype="SELECT * from foodtype_tbl where  FoodTypeID='5' ";
			$foodtyperesult=mysql_query($foodtype);
			while($row=mysql_fetch_assoc($foodtyperesult))
			{
			echo '<table class="table table-striped table-hover">
			<thead class="thead">';

			$FoodType=$row['FoodType'];
			echo "<tr>";
			echo $FoodType . "<br>";
			echo "</tr>";
				$food="SELECT FoodName , Fid from food_tbl as a INNER JOIN foodtype_tbl as b ON a.FoodTypeID=b.FoodTypeID where FoodType='$FoodType'";
				$foodresult=mysql_query($food);

				while($row=mysql_fetch_assoc($foodresult))
				{
				$FoodName=$row['FoodName'];
				$Fid=$row['Fid'];
				echo "<input class=Choices2 type='checkbox' name='Soup' value='".$Fid."' >".$FoodName."<br>";

				}


			}


		}

		?>
		<script>
		var limit = 5;
		$('input.Choices').on('click',function(evt){
			if($('.Choices:checked').length>limit)
			{
				this.checked=false;
			}
		});


		</script>
		<script>
		var limit1 = 1;
		$('input.Choices1').on('click',function(evt){
			if($('.Choices1:checked').length>limit1)
			{
				this.checked=false;
			}
		});


		</script>
		<script>
		var limit2 = 1;
		$('input.Choices2').on('click',function(evt){
			if($('.Choices2:checked').length>limit2)
			{
				this.checked=false;
			}
		});


		</script>
		<table class="table table-striped table-hover">
			<thead class="thead">
			<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			</tr>

			<?php
			$sql="SELECT * From catering_tbl where id='$_GET[id]'";
			$result=mysql_query($sql);
			while($row=mysql_fetch_assoc($result))
			{
			$id=$row['id'];
			$Package=$row['Package'];
			$Description=$row['Description'];
			$pic=$row['FoodImage'];
			$path="../Images/Restaurant/Foods/".$pic;

			echo "<input type='hidden' name='Package' value='".$Package."'/>";
			}

			?>



			</thead>
		</table>
		<br><br><br>
		Do you want to extend ?
		<select name="extend">
		<option value="0"> None </option>
		<option value="1"> 1 hour</option>
		<option value="2"> 2 hours</option>
		<option value="3"> 3 hours</option>
		<option value="4"> 4 hours</option>
		<option value="5"> 5 hours</option>

		</select>
		<br><br><br>
		<input type="Submit" name="submit" class="btn btn-success pull-right"value="NEXT"/>
		</form>

	</div>
	</div>
</div>
</div>

</body>
</html>
