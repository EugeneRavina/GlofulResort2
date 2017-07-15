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
			   <form action="MenuAddSuccess.php" method="post">
			   <input type="text" name="MenuName" value="" required/>
			   </center>
			   
<?php	
	 $sql="SELECT  FoodType from foodtype_tbl";
	 $result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result))
		{
			
			$FoodType=$row['FoodType'];
			
			
			
		echo '<table  class="table table-striped table-hover full-width center">';
        echo '<thead class="thead">';
        echo '<tr>';
		echo '<th> '.$FoodType.' </th>';
		
		echo '</thead>	';
		echo '</table>';
			
			 $sql1="SELECT FoodName , Fid FROM food_tbl AS a INNER JOIN foodtype_tbl AS b ON a.FoodTypeID=b.FoodTypeID WHERE FoodType='$FoodType'";
			 $result1=mysql_query($sql1);
		
			while($rows=mysql_fetch_assoc($result1))
				{	 
			 $FoodName=$rows['FoodName'];
			 $FoodID=$rows['Fid'];
		echo '<table  class="table table-striped table-hover full-width center">';
        
        echo '<tr>';
		echo "<center>";
		echo '<th>
		
		<input type="checkbox" name="FoodType[]" value="'.$FoodID.'">'.$FoodName.' </th>';
		echo "<tbody>" ;
		echo "<tr>" ;
		
    
		
		echo "</tr>";
		echo "</tbody>";
		echo "<center>";
		
		echo '</table>';
				}
		}




?>

<center>
<input type="Submit" name="submit" value="Add Menu">
</center>


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
