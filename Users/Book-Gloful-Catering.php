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
<body>
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
		<form method="POST" action="Book-Catering-Step4.php">
      <h2 class="center">Your Selection</h2>
      <div class="container">

			<?php
			echo "Date:" .$_SESSION['DateFrom'];
			echo " to ";
			echo $_SESSION['DateTo'];
			echo "<br>";
			echo $_SESSION['Package'];
			echo "<br>";
			echo $_SESSION['Desc'];
			echo "<br>";
			echo $_SESSION['Price'];
			if($_SESSION['Type']!=Null){
			echo "<br> Event/Purpose: " .$_SESSION['Type'];
			}
			if($_SESSION['CelebName']!=Null){
			echo "<br> Celebrant Name:" .$_SESSION['CelebName'];
			}
			if($_SESSION['Theme']!=Null){
			echo "<br> Theme:" .$_SESSION['Theme'];
			}
			if($_SESSION['Motif']!=Null){
			echo "<br> Motif:" .$_SESSION['Motif'];
			}
			echo "<br> Guest : " .$_SESSION['Guest'];

			?>

			<br><br><br>
    </div>
  </div>
	<div class="MainDiv">
    <h2 class="center">Enhance Your Stay</h2><br>

    <div class="container">
			<table class="table table-striped table-hover">
			<thead class="thead">
			<tr>
			<th>Packages</th>
			<th></th>
			<th></th>
			<th></th>
			</tr>

			<?php
			$sql="SELECT * From catering_tbl";
			$result=mysql_query($sql);
			while($row=mysql_fetch_assoc($result))
			{
			$id=$row['id'];
			$Package=$row['Package'];
			$Description=$row['Description'];
			$pic=$row['FoodImage'];
			$path="../Images/Restaurant/Foods/".$pic;

			echo '<tr>
			<td>'.$Package.'</td>
			<td>'.$Description.'</td>
			<td><img src="'.$path.'" width="80" height="80"/></td>';

			echo "<td><center><a href=Book-Gloful-Catering-Package.php?id=$id>Avail</a></center></td></tr>";

			}

			?>
			</thead>
		</table>

		<br><br><br>

		<br><br><br>
		<input type="Submit" name="submit" value="NEXT" class="btn btn-success pull-right"/>
		</form>
 </div>
 </div>
	</div>


</body>
</html>
