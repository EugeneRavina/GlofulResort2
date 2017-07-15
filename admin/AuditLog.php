  <?php
require("../Users/connection.php");
session_start();
$active = 'Utilities';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT Auditlog from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Auditlog=$rows['Auditlog'];

				if($Auditlog=='TRUE'){
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

            <div class="main">
               <table  class="table table-striped table-hover">
                    <thead class="thead">
                      <tr>
		       		     <th> ID </th>
		       		     <th> Name </th>
						       <th> Position </th>
		     		       <th> Action</th>
			        	   <th> Date </th>
			        	   <th> Time-In </th>
						       <th> Time-Out </th>

					          	</tr>
						<?php

						$sql="SELECT AuditID,Action,Date,Time,concat(FName , ' ' , LName)as Fullname,Position from auditlog_tbl as a inner join user_tbl as b on a.UserID=b.UserID inner join usertype_tbl as c on b.UserTypeID=c.UserTypeID order by AuditID desc";
						$results=mysql_query($sql);


						while($row=mysql_fetch_assoc($results)){
						$AuditID=$row['AuditID'];
						$Action=$row['Action'];
						$Name=$row['Fullname'];
						$Position=$row['Position'];
						$Date=$row['Date'];
						$Time=$row['Time'];

						echo "<tbody>" ;
						echo "<tr>" ;
						echo "<td>". $AuditID. "</td>";
						echo "<td>". $Name."</td>";
						echo "<td>". $Position."</td>";
						echo "<td>". $Action."</td>";
						echo "<td> ". $Date ."</td>";
						echo "<td> ". $Time ."</td></tr>";

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
