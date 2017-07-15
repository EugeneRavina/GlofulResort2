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

</head>
<body>
    <header id="header">
	      <?php include('NavTopbar.php');?>
    </header>
<div class="div">
	<div class="containerprogressbar">
		<ul class="progressbar">
			<li class="active">Select Date</li>
			<li class="active">Pick an Event</li>
			<li class="active">Rent Venue</li>
			<li>Additional</li>
			<li>Payment</li>
		</ul>
	</div>

	<div class="Cart">
		<?php
		if(isset($_POST['submit'])){
						
					$Type=$_SESSION['Type'];
			$_SESSION['Celebname']=$Celebname;
			$_SESSION['Theme']=$Theme;
			$_SESSION['Motif']=$Motif;
			$Guest=$_SESSION['Guest'];
			echo $Guest;
			
		}		
		?>
		<form method="POST" action="Book-Catering-Term&Conditions.php">
			
			
			<input type="hidden" name="FType" value="<?php echo $_SESSION['Type']; ?>"/>
			<input type="hidden" name="Celebrantname" value="<?php echo $_SESSION['Celebrantname']; ?>"/>
			<input type="hidden" name="Theme" value="<?php echo $_SESSION['Theme']; ?>"/>
			<input type="hidden" name="Motif" value="<?php echo $_SESSION['Motif']; ?>"/>
			<input type="hidden" name="Guest" value="<?php echo $_SESSION['Guest']; ?>"/>
			<?php			
			
				$sql="select * from functionhall_tbl where ID='$_GET[id]'";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result)){
					$ID=$row['ID'];
					$FType=$row['FType'];
					$FPrice=$row['Price'];
					$Capacity=$row['Capacity'];
					$FHour=$row['Times'];
					
					
				}
				
				if($_SESSION['Guest']>$Capacity)
					{
						echo '<script>alert("Cant accommodate to much guest");window.location.href="Book-Cater-Outdoor.php"</script>';
						
					}
					$_SESSION['FType']=$FType;
					$_SESSION['FPrice']=$FPrice;
					$_SESSION['Hours']=$FHour;
				$FType=$_SESSION['FType'];
					$FPrice=$_SESSION['FPrice'];				
					$FHour=$_SESSION['Hours'];				
				echo "Date: &nbsp;".$_SESSION['DateFrom']." to ".$_SESSION['DateFrom']."<br>";
				echo "Event Name: &nbsp;".$_SESSION['Type']."<br>";
				echo "Celebrant Name: &nbsp;".$_SESSION['Celebrantname']."<br>";
				echo "Theme: &nbsp;".$_SESSION['Theme']."<br>";
				echo "Motif: &nbsp;".$_SESSION['Motif']."<br>";	
				echo "Number of Guest: &nbsp;".$_SESSION['Guest']."<br>";	
				echo "Venue: &nbsp;".$FType."<br>";	
				echo "Price: &nbsp;".$FPrice."<br>";
				echo "Hour for venue: &nbsp;".$FHour."<br>";
				
			?>
						
			<br><br><br>			
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
		<table class="table table-striped table-hover">
			<thead class="thead">
				<tr>		
			<th></th>
			<th>Other Charges</th>
			<th>Description</th>
			<th>Price</th>
		Do you want to Extend FunctionHall ?
		<select name="Extend">
		<option value="0"> None </option>
		<option value="1"> 1 hour</option>
		<option value="2"> 2 hours</option>
		<option value="3"> 3 hours</option>
		<option value="4"> 4 hours</option>
		<option value="5"> 5 hours</option>
		
		</select>
			
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
				</tr>
				</thead>
			</table>
		<input type="Submit" name="submit" value="NEXT"/>
	</form >
	<form method="POST" action="Book-Gloful.php">
	
			<input type="Submit" name="submit" value="Back"/>
	</form>
	</center>
	</div>
</div>	<!--CONTATINER-->

</body>
</html>
