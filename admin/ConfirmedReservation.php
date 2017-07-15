  <?php
require("../Users/connection.php");
session_start();
$active = 'UserMonitoring';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT PendingReq from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Pending=$rows['PendingReq'];

				if($Pending=='TRUE'){
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
               <table  class="table table-striped table-hover full-width center">
                    <thead class="thead">
                        <tr>

		       		       <th> Name </th>
						   <th> Event </th>
			        	   <th> Date </th>
						   <th> Total Price</th>
			        	   <th> Status </th>

						</tr>
						<?php

						$sql=" SELECT CONCAT(A.FName ,' ', A.LName) AS FullName , DateFrom , DateTo , EventName ,Total, RCode, Status FROM user_tbl AS A INNER JOIN reservedcomplete_tbl AS B ON A.UserID=B.UserID WHERE Status='Approved'";
						$results=mysql_query($sql);


						while($row=mysql_fetch_assoc($results)){


						$Name=$row['FullName'];
						$DateFrom=$row['DateFrom'];
						$DateTo=$row['DateTo'];
						$Total=$row['Total'];

						$EventName=$row['EventName'];
						$Status=$row['Status'];


						echo "<tbody>" ;
						echo "<tr>" ;
						echo "<td>". $Name. "</td>";
						echo "<td>". $EventName."</td>";

						echo "<td> ". $DateFrom ." to ".$DateTo."</td>";
						echo "<td> ". $Total ."</td>";
						echo "<td> ". $Status ."</td>";


						}


						?>



		            </thead>
					<br>




					</table>


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
