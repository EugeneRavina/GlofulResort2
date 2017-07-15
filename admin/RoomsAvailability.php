    <?php
require("../Users/connection.php");
session_start();
$active = 'Availability';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT FHAvailability from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$FHAvailability=$rows['FHAvailability'];

				if($FHAvailability=='TRUE'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gloful Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include('links.php');?>

</head>
<body>
 <div class="container">
   <div class="topbar">
  			<?php include('navtop.php');?>
  		</div>
      <?php include('Sidebar.php'); ?>
	  
	 
	  <br>
	  <br>
	 
	  <br>
	  <br>
	  
		
		<center>
            <div class="main">
			<h2>Rooms Availability</h2>
			
			<br>
			<br>
			<form method="POST">
			 <input type="date" name="DateFrom"/>
			 <td><button name='search'>Search</button></td>
			 <br>
			 <br>
			 <br>
			 </form>
			  <div id="print">
               <table  class="table table-striped table-hover center ">
                    <thead class="thead">
                        <tr>
		       		       
		       		       <th> Rooms Type </th>
		       		       <th> Used</th>
		     		       <th> Remaining </th>


						</tr>
		            </thead>
					
<?php


	if(isset($_POST['search'])){

	
		$DateFrom=$_POST['DateFrom'];
		echo "Date: ". $DateFrom;
	 $sql="select  * from room_tbl";
	 
	 
	  // $sql="select Venue, TimeExtend, TimeVenue from reservedcatering_tbl as a INNER JOIN reservedcomplete_tbl as b ON a.DateFrom=b.DateFrom Where date_transaction='$DateFrom'";
	 $result1=mysql_query($sql);
		while($row=mysql_fetch_assoc($result1))
		{
			$Type=$row['RType'];
			$QuantityTrue=$row['Quantity'];
			
			
		echo "<center>";
		echo "<tbody>" ;
		echo "<tr>" ;
		
		echo "<td>". $Type."</td>";
		
		
			$select="SELECT Quantity  FROM reserved_tbl WHERE Type='$Type' && DateFrom='$DateFrom'";
			$resultko=mysql_query($select);
			$counting=mysql_num_rows($resultko);
			
			if($counting>=1)
			{
			$rows=mysql_fetch_assoc($resultko);
				
			$Quantityreserved=$rows['Quantity'];
			$Quantity=$QuantityTrue-$Quantityreserved;
			echo "<td>".$Quantityreserved."</td>";
			echo "<td>".$Quantity."</td>";
			
			
		
			}else{
			echo "<td> 0 </td>";
			echo "<td>". $QuantityTrue."</td>";
			
			
			}
		
		


		echo "</tr>";
		echo "</tbody>";
		echo "<center>";
			}
		
	}
?>

</center>
</table>
</div>
</body>
</html>
<?php


}else{


		echo"<script>alert('You are not allowed to access this page!');window.location.href='adminIndex.php'</script>";
	}
	}
}

?>
