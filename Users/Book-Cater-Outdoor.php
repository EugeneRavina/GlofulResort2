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
	      <?php include('NavTopBar.php');?>
    </header>
<div class="div">
	<div class="containerprogressbar">
		<ul class="progressbar">
			<li class="active">Select Date</li>
			<li class="active">Pick an Event</li>
			<li>Rent a Venue</li>
			<li>Additional</li>
			<li>Payment</li>
		</ul>
	</div>

	<div class="Cart">
	<?php
		if(isset($_POST['submit'])){
			$DateFrom=$_SESSION['DateFrom'];
			$DateTo=$_SESSION['DateTo'];
			$EType=$_POST['Type'];
			if($EType=='Other')
			{
			$EType=$_POST['Other'];	
			
			$_SESSION['Type']=$EType;
				
			}else {
			$_SESSION['Type']=$EType;
			}
			$Celebname=$_POST['Celebrantname'];
			$Theme=$_POST['Theme'];
			$Motif=$_POST['Motif'];
			$EGuest=$_POST['Guest'];
			$Option1=$_POST['option1'];	
			
			if($Option1=="Indoor")
			{
				session_start();
				
				
				$_SESSION['Celebrantname']=$Celebname;
				$_SESSION['Theme']=$Theme;
				$_SESSION['Motif']=$Motif;
				$_SESSION['Guest']=$EGuest;	
				header("Location:Book-Catering-Step3.php");	
			}if($Option1=="Outdoor")
			{
				session_start();
				$_SESSION['Date']=$Date;
				$_SESSION['Type']=$EType;
				$_SESSION['Celebrantname']=$Celebname;
				$_SESSION['Theme']=$Theme;
				$_SESSION['Motif']=$Motif;
				$_SESSION['Guest']=$EGuest;	
			}
		}		
		
		?>
		<form method="POST" action="Book-Catering-Additional.php">
				  
			
			
			<?php			
			if(isset($_POST['submit'])){
				
				$DateFrom=$_SESSION['DateFrom'];
			$DateTo=$_SESSION['DateTo'];
			$_SESSION['Type']=$EType;
			$_SESSION['Celebrantname']=$Celebname;
			$_SESSION['Theme']=$Theme;
			$_SESSION['Motif']=$Motif;
			$_SESSION['Guest']=$EGuest;
			
			
					
				
			}
			echo "Date: &nbsp;".$_SESSION['DateFrom']." to ".$_SESSION['DateFrom']."<br>";
				echo "Event Name: &nbsp;".$_SESSION['Type']."<br>";
				echo "Celebrant Name: &nbsp;".$_SESSION['Celebrantname']."<br>";
				echo "Theme: &nbsp;".$_SESSION['Theme']."<br>";
				echo "Motif: &nbsp;".$_SESSION['Motif']."<br>";	
				echo "Number of Guest: &nbsp;".$_SESSION['Guest']."<br>";
			?>		
			
			<br><br><br>			
		<center>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
		<table class="table table-striped table-hover">
			<thead class="thead">
				<tr>
					<th> </th>
				<th> Cottage</th>
				<th> Description</th>
				<th> Capacity</th>
				<th> Quantity</th>
				<th> Price</th>
				<?php
	
				$sql="select * from functionhall_tbl";
				$result=mysql_query($sql);
				while($row=mysql_fetch_assoc($result)){
					$ID=$row['ID'];
					$FType=$row['FType'];
					$Description=$row['Description'];
					$Capacity=$row['Capacity'];
					$Quantity=$row['Quantity'];
					$Price=$row['Price'];
					$pic=$row['Image'];
					$path="../Images/Function Hall/".$pic;
					
					
				echo "<tr>";
				echo "<td>".'<img src="'.$path.'" width="150" height="100"/>'. "</td>";
				echo "<td>". $FType."</td>";
				echo "<td width='250'>". $Description."</td>";
				echo "<td>". $Capacity."</td>";
				echo "<td>". $Quantity."</td>";
		
				echo "<td><font color='Red'>Php: ". $Price ."</font></td>";
				echo "<td><a href=Book-FunctionHall.php?id=$ID class='Book-link' title='Book'><i>Book</i></a></td>";
				echo "</tr>";
				}
				?>
				</tr>
				</thead>
			</table>
		<input type="Submit" name="submit" value="NEXT"/>
	</form >
	<form method="POST" action="Book-Gloful-Step2.php">
			
			
					
			<input type="Submit" name="submit" value="Back"/>

	</form>
	</center>
	</div>
</div>	<!--CONTATINER-->
</body>
</html>
