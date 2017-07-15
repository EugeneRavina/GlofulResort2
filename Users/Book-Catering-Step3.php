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

<body>
<div class="div">	
	<div class="containerprogressbar">
		<ul class="progressbar">
			<li class="active">Select Date</li>		
			<li class="active">Pick an Event</li>
			<li>Choose Packages</li>
			<li>Additional</li>
			<li>Payment</li>
		</ul>
	</div>
	<div class="Cart">
		<?php
		if(isset($_POST['submit'])){
			
			
			
			
		}
					
		?>
		
		<form method="POST" action="Book-Catering-Step4.php">
			Date:
			
			<input type="hidden" name="Type" value="<?php echo $_SESSION['Type']; ?>"/>
			<input type="hidden" name="Celebrantname" value="<?php echo $_SESSION['Celebrantname']; ?>"/>
			<input type="hidden" name="Theme" value="<?php echo $_SESSION['Theme']; ?>"/>
			<input type="hidden" name="Motif" value="<?php echo $_SESSION['Motif']; ?>"/>
			<input type="hidden" name="Guest" value="<?php echo $_SESSION['Guest']; ?>"/>
			
			<?php
			echo $_SESSION['DateFrom'];
			echo " to ";
			echo $_SESSION['DateTo'];
			
			echo "<br> Event Name: " .$_SESSION['Type'];
			echo "<br> Celebrant Name:" .$_SESSION['Celebrantname'];
			echo "<br> Theme:" .$_SESSION['Theme'];
			echo "<br> Motif:" .$_SESSION['Motif'];
			echo "<br> Number of Guest:" .$_SESSION['Guest'];
			
			?>
			
			<br><br><br>
	</div>
	<div class="MainDiv">	
	
	
	
			<table class="table table-striped table-hover">
			<thead class="thead">
			<tr>		
			<th>Packages</th>
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
			$Time=$row['Time'];
			$pic=$row['FoodImage'];
			$path="../Images/Restaurant/Foods/".$pic;

			echo '<tr>	
			<td>'.$Package.'</td>
			<td>'.$Description.'</td>
			<td>'.$Time.' Hours for Venue</td>
			<td><img src="'.$path.'" width="80" height="80"/></td>';
			
			echo "<td><center><a href=Book-Catering-Step3Package.php?id=$id>Avail</a></center></td></tr>";
			
			}
			
			
			
			
			
			
			
			?>
			
			
			
			</thead>
		</table>
		
		
		
		
		
		<br><br><br>
		
		<br><br><br>
		<input type="Submit" name="submit" value="NEXT"/>
		</form>	
		<form method="POST" action="Book-Gloful-Step2.php">
			<input type="hidden" name="Date" value="<?php if(isset($_POST['submit'])){
				$Date=$_POST['Date'];
				echo $Date;
			} ?>"/>
			<input type="Submit" name="submit" value="Back"/>
		</form>
	</div>	
</div>
	
</body>
</html>