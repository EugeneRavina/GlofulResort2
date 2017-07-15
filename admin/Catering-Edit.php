    <?php
session_start();
require("../Users/connection.php");
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
	
	
    <link href="../css/font-awesome.min.css" rel="stylesheet">  
    <link href="../css/custom.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
	
	<script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
	
</head>
<body>
  
   <div class="container">
    <div class="breadcrumbs">
			<ul class="social">
        <li><span> </span> Logout</li>
			</ul>
		</div>
		<ul class="nav list-group">
			    <div class="">A</div>
				<li><a href="#" class="icon-logo"><img src="../Images/Icons/Gloful2.png" width="90" height="80" alt="logo"></a></li>
				<li><a href="adminIndex.php" class="icon-tag" id="navItem1"> <i class="fa fa-home"></i>  Dashboard </a></li>
				<li  class="tl-current sub"><a href="#" class="icon-tag" id="navItem1"> <i class="fa fa-cog"></i>  Maintenance <span class="fa fa-angle-down"> </span> </a>
				  <ul>
                        <li><a href="Cottages.php">Cottages</a></li>
                        <li><a href="">Pools</a></li>
                        <li><a href="Room.php">Rooms</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                    </ul>
				
				
				</li>
				<li><a href="#" class="icon-chart" id="navItem2"><i class="fa fa-television"></i> Monitoring <span class="fa fa-angle-down"> </span></a>
				 <ul>
                        <li><a href="#">Cottages</a></li>
                        <li><a href="#">Pools</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                    </ul>
					</li>
				<li><a href="#" class="entypo-camera" id="navItem3"><i class="fa fa-money"></i> Transactions <span class="fa fa-angle-down"> </span></a></li>
				<li ><a href="#" class="icon-download" id="navItem4"><i class="fa fa-book"></i> Reports <span class="fa fa-angle-down"> </span></a></li>
				<li><a href="#" class="icon-flag" id="navItem5"><i class="fa fa-history"></i> Audit Trail </a></li>
				<li><a href="#" class="icon-lamp" id="navItem6"><i class="fa fa-cogs"></i> Utilities <span class="fa fa-angle-down"> </span></a></li>
				<li><a href="#" class="icon-file" id="navItem7">Option 6 <span class="fa fa-angle-down"> </span></a></li>
			</ul>


            <div class="main">
               <table  class="table table-striped table-hover">
                    <thead class="thead">		
<?php  
  if(isset($_POST['submit'])){
	
		
		
				 
	
			
			
		$id=$_POST['id'];
		$name=$_POST['Package'];
		$dishes=$_POST['Dishes'];
		
			
	
	$sql3="Update catering_tbl SET Package='$name', Dishes='$dishes' Where id='$id'";
	$result3=mysql_query($sql3);
	

	

	
	echo "<center>";
	echo "<script><strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</script></center>";
	echo "<meta http-equiv=refresh content=3;url=Catering.php>";
	 
	
	
	
}else {
	
	$sql1="Select * from catering_tbl where id='$_GET[id]'";
	$result1=mysql_query($sql1);
	
	while($row=mysql_fetch_assoc($result1)){
		
		$id=$row['id'];
		$name=$row['Package'];
		$dishes=$row['Dishes'];
		
	}
	
	
	
}



?>




<form method="POST" enctype="multipart/form-data">
<center>
		<input type ="hidden" name="id" value="<?php echo $id; ?>">
		<h2>Package </h2><br><br><input type="text" name="Package" value="<?php   echo $name;   ?>"></input><br><br>
		Dishes<br><textarea rows="10" cols="30" name="Dishes"  ><?php  echo $dishes;  ?></textarea><br><br>
		

		<input type="reset" value="CLEAR"/>
		<input type="submit" name="submit" value="UPDATE"/>
</center>
		






</form>
		            </thead>
		

			</div>




</body>

</html>
