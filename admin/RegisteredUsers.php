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
			$query="SELECT Register from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Register=$rows['Register'];

				if($Register=='TRUE'){
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
               <table  class="table table-striped table-hover full-width center">
                    <thead class="thead">
                        <tr>
		       		       <th> ID </th>
		       		       <th> Name </th>
		     		       <th> Email</th>
		        		   <th> UserName </th>
			        	   <th> Password </th>
			        	   <th> Status </th>

						</tr>
		            </thead>

<?php

	 $sql="select * from customer_tbl";
	 $result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result))
		{
			$id=$row['CustID'];
			$firstname=$row['FirstName'];
			$lastname=$row['LastName'];
			$email=$row['Email'];
			$username=$row['Username'];
			$pass=$row['Password'];
			$status=$row['Active'];


		echo "<center>";
		echo "<tbody>" ;
		echo "<tr>" ;
		echo "<td>". $id."</td>";
		echo "<td>". $firstname." ".$lastname."</td>";
		echo "<td>". $email."</td>";
		echo "<td>". $username."</td>";
		echo "<td>". $pass."</td>";
			if($status==0)
			{
				echo "<td i class='fa fa-close'></i></td>";

			}else
			{
				echo "<td i class='fa fa-check'></i></td>";
			}


		echo "</tr>";
		echo "</tbody>";
		echo "<center>";
		}
?>
</table>
</body>
</html>
<?php
}else{
		echo"<script>alert('You are not allowed to access this page!');window.location.href='adminIndex.php'</script>";
	}
	}
}

?>
