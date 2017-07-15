l<?php
require("../Users/connection.php");
session_start();
$active = 'Dashboard';
   $userid = $_SESSION["UserID"];
   $usertype = $_SESSION["UserTypeID"];

   if($userid==NULL)
   {
     echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
   }else{
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

  <header class="panel-menu">
				<a href=""><div class="box">
				    <div class="icons red">
					    <i class="fa fa-eye fa-3x"></i>
					</div>
					    <h4>Page Views</h4>
						300
				</div></a>
				<a href="RegisteredUsers.php"><div class="box">
			        <div class="icons green">
				        <i class="fa fa-user-plus fa-3x"></i>
					</div>
					    <h4>New Users</h4>
						200
				</div></a>
				<a href=""><div class="box">
				    <div class="icons yellow">
				        <i class="fa fa-bell-o fa-3x"></i>
				    </div>
				       <h4>Pending Request</h4>
					   10
				</div></a>
				<a href=""><div class="box">
				    <div class="icons blue">
				       <i class="fa fa-check-square-o fa-3x"></i>
				    </div>
				       <h4>Confirm Request</h4>
					   20
				</div></a>
			</header> <!--End Header -->

   <div class="main">
     <table  class="table table-striped table-hover half-width center">
          <thead class="thead">
              <tr>
           <th> ID </th>
           <th> Room Type </th>
         <th> Quantity</th>
    </tr>
      </thead>

    <?php

    $sql="select * from room_tbl";
    $result=mysql_query($sql);
    while($row=mysql_fetch_assoc($result))
    {
    $id=$row['Rid'];
    $type=$row['RType'];
    $quantity=$row['Quantity'];



    echo "<center>";
    echo "<tbody>" ;
    echo "<tr>" ;
    echo "<td>". $id."</td>";
    echo "<td>". $type."</td>";
    echo "<td>". $quantity."</td>";


    echo "</tr>";
    echo "</tbody>";
    echo "<center>";
    }
    ?>
    </table>
    <table  class="table table-striped table-hover center ">
         <thead class="thead">
             <tr>
          <th> ID </th>
          <th> Room Type </th>
        <th> Quantity</th>


 </tr>
     </thead>
<?php

$sql="select * from functionhall_tbl";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
$id=$row['ID'];
$type=$row['FType'];
$quantity=$row['Quantity'];



echo "<center>";
echo "<tbody>" ;
echo "<tr>" ;
echo "<td>". $id."</td>";
echo "<td>". $type."</td>";
echo "<td>". $quantity."</td>";


echo "</tr>";
echo "</tbody>";
echo "<center>";
}
?>
</table>
  </div>

  </div>
  <script>
  		(function($){
  			$(window).on("load",function(){

  				$(".menu").mCustomScrollbar({
  					theme:"minimal"
  				});

  			});
  		})(jQuery);
  	</script>
</body>
</html>
<?php


	}

?>
