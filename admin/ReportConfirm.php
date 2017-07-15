  <?php
require("../Users/connection.php");
session_start();
$active = 'Reports';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT Reports from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Report=$rows['Reports'];

				if($Report=='TRUE'){
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

	<!--<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>-->

    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--<link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../css/admin.css" rel="stylesheet">
	<link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.mCustomScrollbar.js"></script>
    <script src="../js/custom.js"></script>

</head>
<body>
 <div class="container">
   <div class="topbar">
        <?php include('navtop.php');?>
      </div>
        <?php include('Sidebar.php'); ?>

            <div class="main">
			<center>
               <table  class="table table-striped table-hover">
			   
				<form method='POST'>
				<br>
				<tr>
					<td colspan='2'>From: <input type='date' name ='FromDate'></td>
					<td colspan='2'>To: <input type='date' name = 'ToDate'></td>
					<td><button name='search'>Search</button></td>
					
					<td><button onclick="printContent('print')">Print</button></td>

					
				</tr>
				</form>
				</table>
				</center>
				<div id="print">
				<center>
				
				
				<img src="../Images/Icons/Gloful2.png" width="100" height="100"/><br>
				Address: 542 Quirino Highway, Talipapa, <br>Novaliches Quezon City, Philippines.<br>
				Contact Number : 09354197172
				
				
				</center>
				<br>
				<tr>
					<th colspan='5'><center><h2>Approved Reservation Report</h2></th>
				</tr>
				
				
				
						
						
					<?php
					
					if(isset($_POST['search'])){
					
					$FromDate=$_POST['FromDate'];
					
					
					$ToDate=$_POST['ToDate'];
					echo "<br>";
					echo "<br>";
					echo "<center>".$FromDate." - ".$ToDate."</center>";
					echo '<table  class="table table-striped table-hover">
                    <thead class="thead">';
                        
					
					$sql="SELECT CONCAT(user_tbl.FName, user_tbl.LName) AS FullName, reservedcomplete_tbl.DateFrom , reservedcomplete_tbl.DateTo , reservedcomplete_tbl.EventName, reservedcomplete_tbl.Total, reservedcomplete_tbl.Status FROM user_tbl INNER JOIN reservedcomplete_tbl ON user_tbl.UserID = reservedcomplete_tbl.UserID WHERE date_transaction BETWEEN '$FromDate' AND '$ToDate' AND STATUS='Approved' ORDER BY date_transaction DESC";
					$result=mysql_query($sql);
					echo "<tr>";

		       		echo "       <th> Name </th> ";
					echo "	   <th> Event </th>";
			        echo "	   <th> Date </th>";
					echo "	   <th> Total</th>";
			        echo "</thead>";
					

					echo "	</tr>";
					while($row=mysql_fetch_assoc($result))
						{
							$FullName=$row['FullName'];
							$DateFrom=$row['DateFrom'];
							$DateTo=$row['DateTo'];
							$EventName=$row['EventName'];
							$Total=$row['Total'];
							$_SESSION['FullName']=$FullName;
							echo "<tr>";
							echo "<td>".$FullName."</td>";
							echo "<td>".$EventName."</td>";
							echo "<td>".$DateFrom;
							echo " to ".$DateTo."</td>";
							echo "<td>".$Total."</td>";
							echo "</tr>";
							
							
						}
						echo '<br>
					</table>
					</center>';
					
					
					$sql1="SELECT SUM(Total)as Total FROM user_tbl INNER JOIN reservedcomplete_tbl ON user_tbl.UserID = reservedcomplete_tbl.UserID WHERE date_transaction BETWEEN '$FromDate' AND '$ToDate' AND STATUS='Approved' ORDER BY date_transaction DESC";
					$result1=mysql_query($sql1);
					$row=mysql_fetch_assoc($result1);
					$Total=$row['Total'];
					
					// date_default_timezone_set('asia/kuala_lumpur');
					// $time= date("h:i:s");
					$DatePrinted=date('F-j-Y');
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<tr>";
					echo "<td><label class='pull-right'>Total Amount: Php ". number_format($Total,2)."</label></td>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "<br>";
					$prepared=mysql_query("SELECT CONCAT(FName ,' ' ,LName)as FullName from user_tbl WHERE UserID='$userid'");
					$rows=mysql_fetch_assoc($prepared);
					$ByeFullName=$rows['FullName'];
					echo "<td>Prepared by : ". $ByeFullName."</td>";
					echo "<br>";
					echo "<td>Date Printed : " . $DatePrinted."</td>";
					
					
					echo "</tr>";
					}
					
					
					
					
					?>
					</div>					
					
					
					<script>
					function printContent(el){
					var restorepage = document.body.innerHTML;
					var printcontent = document.getElementById(el).innerHTML;
					document.body.innerHTML = printcontent;
					window.print();
					document.body.innerHTML = restorepage;
					}
					</script>
		            
					
					
					
					
					<tr>
						
					</tr>


					<br>
					<br>




 </div>








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
