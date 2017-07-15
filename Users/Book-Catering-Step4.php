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
			<li class="active">Choose Packages</li>
			<li>Additional</li>
			<li>Payment</li>
		</ul>
	</div>
	<div class="Cart">
		<?php
		if(isset($_POST['submit'])){
			
		}
					
		?>
		
		<form method="POST" action="Book-Catering-Terms&Condition.php">
			Date:
			
			 
			
			<?php
			if(isset($_POST['submit'])){
			
			$EType=$_SESSION['Type'];
			$Celebname=$_SESSION['Celebrantname'];
			$Theme=$_SESSION['Theme'];
			$Motif=$_SESSION['Motif'];
			$EGuest=$_SESSION['Guest'];
			$Venue=$_POST['Venue'];
			
			
			$Ven="SELECT * From venue_tbl where VenID='$Venue'";
			$Venresult=mysql_query($Ven);
			$row=mysql_fetch_assoc($Venresult);
			$VenueName=$row['VenueName'];
			$PriceV=$row['Price'];
			
			$_SESSION['VenueName']=$VenueName;
			$_SESSION['PriceV']=$PriceV;
			
			
			$Time=$_POST['Time'];
			$_SESSION['Time']=$Time;
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
			
				
				echo $_SESSION['DateFrom']." to ".$_SESSION['DateTo']."<br>";
				echo "Event Name: ".$EType."<br>";
				echo "Celebrant Name: ".$Celebname."<br>";
				echo "Theme: ".$Theme."<br>";
				echo "Motif: ".$Motif."<br>";
				echo "Number of Guest: ".$EGuest."<br>";	
				echo "Package : ".$Package."<br>";	
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
						echo "<input type='hidden' name='Menu' value='Customize'>";
						
					}
					
					
					
				}
				echo "Time for Venue: ".$Time." Hours <br>";
				if($Extend!=0){
				echo "Extention Hour : " . $Extend;
				$_SESSION['Extend']=$Extend;
					
				}
				
				
			}?>
			<br><br><br>
	</div>
	<div class="MainDiv">	
		
	
		
		<table class="table table-striped table-hover">
			<thead class="thead">
			<tr>		
			<th></th>
			<th>Other Charges</th>
			<th>Description</th>
			<th>Price</th>
			
			</tr>
			
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
			
			
			
			</thead>
		</table>
		<br><br><br>
		
		<br><br><br>
		<input type="Submit" name="submit" value="NEXT"/>
		</form>	
		<form method="POST" action="Book-Gloful-Step2.php">
			
			<input type="Submit" name="submit" value="Back"/>
		</form>
	</div>	
</div>
	
</body>
</html>