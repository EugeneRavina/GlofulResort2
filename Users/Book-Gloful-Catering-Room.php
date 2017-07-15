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
		<?php
		if(isset($_POST['submit'])){

		}

		?>

		<form method="POST" action="Book-Gloful-Catering-Additional.php">
      <h2 class="center">Your Selection</h2>
      <div class="container">
			Date:



			<?php
			if(isset($_POST['submit'])){


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
			$Price=$_SESSION['Price'];
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
			echo "<br> Guest : " .$_SESSION['Guest'];
			$Guest=$_SESSION['Guest'];
				$RCode=$_SESSION['RCode'];


		$insertresort="INSERT INTO resortreserved_tbl (Package,Description,EventName,CName,Theme,Motif,Guest,RCode,Price,DateFrom,DateTo) values ('$Package','$Desc','$Type','$Celebname','$Theme','$Motif','$Guest','$RCode','$Price','$DateFrom','DateTo')";
		$resultinsert=mysql_query($insertresort);


			$Venue=$_POST['Venue'];


			$Ven="SELECT * From venue_tbl where VenID='$Venue'";
			$Venresult=mysql_query($Ven);
			$row=mysql_fetch_assoc($Venresult);
			$VenueName=$row['VenueName'];
			$PriceV=$row['Price'];

			$_SESSION['VenueName']=$VenueName;
			$_SESSION['PriceV']=$PriceV;


			$Times=$_POST['Time'];
			$_SESSION['Time']=$Times;
			if(isset($_POST['Menu']))
			{
				$Menu=$_POST['Menu'];
				echo "<input type='hidden' name='Menu' value='".$Menu."'>";
			}
			$Package=$_POST['Package'];
			$_SESSION['Package']=$Package;

			$Extend=$_POST['extend'];
			$RCode=$_SESSION['RCode'];
			if(!empty($_POST['MainCourse'])) {
			foreach($_POST['MainCourse'] as $MainCourse) {

			$sql3="INSERT INTO CustomMenu_tbl (Fid,RCode) values ('$MainCourse','$RCode')";
			$result3=mysql_query($sql3);

             //echoes the value set in the HTML form for each checked checkbox.
             //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
			}
			}

			if(isset($_POST['Dessert'])){
			$Dessert=$_POST['Dessert'];
			$sql4="INSERT INTO CustomMenu_tbl (Fid,RCode) values ('$Dessert','$RCode')";
			$result4=mysql_query($sql4);

			}
			if(isset($_POST['Soup'])){
			$Soup=$_POST['Soup'];
			$sql5="INSERT INTO CustomMenu_tbl (Fid,RCode) values ('$Soup','$RCode')";
			$result5=mysql_query($sql5);
			}

				/////////// END TO THIS TIME//////////////

				echo "<br>Package : ".$Package."<br>";
				echo "Venue : ".$VenueName." Php: ". $PriceV."(Per Head)<br>";
				if(isset($_POST['Menu']))
				{
				echo "Menu : ".$Menu."<br>";

				}else
				{
					$custom="SELECT * from CustomMenu_tbl where RCode='$RCode'";
					$customresult=mysql_query($custom);
					$count=mysql_num_rows($customresult);
					if($count>=1){

						echo "Customize Menu <br>";
						$Menu='Customize';

					}



				}
				echo "Time for Venue: ".$Times." Hours <br>";
				if($Extend!=0){
				echo "Extention Hour : " . $Extend;
				$_SESSION['Extend']=$Extend;

				}
				$insert="INSERT INTO reservedcatering_tbl (DateFrom, DateTo, EventName, CName, Theme, Motif, Guest, Package,Menu, Venue, Price, TimeVenue, TimeExtend, RCode) values('$DateFrom','$DateTo','$Type','$Celebname','$Theme','$Motif','$Guest','$Package','$Menu','$VenueName','$PriceV','$Times','$Extend','$RCode')";
				$resultinsert=mysql_query($insert);

			}?>
			<br><br><br>
	</div>
	</div>
	<div class="MainDiv">
    <h2 class="center">Choose Your Room</h2><br>
    <div class="container">
		<table class="table table-striped table-hover">
			<thead class="thead">
			<tr>
			<th></th>
			<th>Room Type</th>
			<th>Capacity</th>
			<th>Quantity</th>
			<th>Price</th>

			</tr>

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
			</thead>
		</table>
		<br><br><br>

		
		<input type="Submit" name="submit" class="btn btn-success pull-right"value="NEXT"/>
		</form>

	</div>
	</div>
	</div>
</div>

</body>
</html>
