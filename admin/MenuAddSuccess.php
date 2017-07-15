    <?php
require("../Users/connection.php");
session_start();
$active = 'Website';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT Catering from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Catering=$rows['Catering'];

				if($Catering=='TRUE'){
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
              
              <a href="AddMenu.php" class="btn btn-info" type="button" id="btn-add" > <i class="fa fa-pencil"></i> &nbsp; Add Food</a>
              <a href="Menu.php" class="btn btn-info" type="button" id="btn-add" > <i class="fa fa-pencil"></i> &nbsp; Menu</a>
              <a href="Catering.php" class="btn btn-info" type="button" id="btn-view"> <i class="fa fa-eye"></i> &nbsp; View Package</a>
                    <br>
                    <div class="content-loader">
              <br>
              <br>
               <center>Menu Name<br><br>
			   <input type="Text" name="MenuName">
			   </center>

<?php

if(isset($_POST['submit'])){

$MenuName=$_POST['MenuName'];
$sql1="INSERT into menu_tbl (MenuName) values('$MenuName')";
$result1=mysql_query($sql1);

$sql2="SELECT MenuID from menu_tbl where MenuName='$MenuName'";
$result2=mysql_query($sql2);
$row=mysql_fetch_assoc($result2);
$MenuID=$row['MenuID'];

if(!empty($_POST['FoodType'])) {
    foreach($_POST['FoodType'] as $foodid) {
		
		$sql3="INSERT INTO menulist_tbl (MenuID,Fid) values ('$MenuID','$foodid')";
		$result3=mysql_query($sql3);
		
             //echoes the value set in the HTML form for each checked checkbox.
             //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}

echo "<script>alert('You have successfully added a menu');window.location.href='Menu.php'</script>";
}
?>

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
