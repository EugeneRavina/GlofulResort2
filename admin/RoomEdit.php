 <?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");

$sql1="Select * from Room_tbl where Rid='$_GET[id]'";
$result1=mysql_query($sql1);
$row=mysql_fetch_assoc($result1);
$id=$row['Rid'];
$name=$row['RType'];
$desc=$row['RDescription'];
$price=$row['Price'];
$features=$row['Features'];
$capacity=$row['Capacity'];
$quantity=$row['Quantity'];
$images=$row['RImage'];
$path="../Images/Rooms/".$images ;
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
    <link href="../css/admin.css" rel="stylesheet">
	<link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

	<script src="../js/jquery.js"></script>
    <script src="../js/custom.js"></script>

</head>
<body>
<div class="main">
	<form method='POST'  action='RoomUpdate.php' enctype="multipart/form-data">
		<table class='table full-width'>
			<div class="blue form-title center full-width"><h2>EDIT ROOM</h2></div>
			<input type ="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td class="label">Room Type</td>
				<td class="center"><input type='text' name='Type' class='textbox width90' value="<?php   echo $name;?>" required></td>
			</tr>
			<tr>
				<td class="label">Description</td>
				<td><textarea name='Description' class='text-area width90'><?php  echo $desc;  ?></textarea></td>
			</tr>
			<tr>
				<td class="label">Features</td>
				<td><textarea name='Features' class='text-area width90'><?php  echo $features;  ?></textarea></td>
			</tr>
			<tr>
				<td class="label">Price</td>
				<td class="center"><input type='text' name='Price' class='textbox width90' value="<?php   echo $price;?>"></td>
			</tr>
			<tr>
				<td class="label">Capacity</td>
				<td><input type='text' name='Max' class='textbox width90' value="<?php  echo $capacity; ?>"></td>
			</tr>
			 <tr>
				<td class="label">Quantity</td>
				<td><input type='text' name='Quantity' class='textbox width90' value="<?php  echo $quantity;  ?>"></td>
			</tr>
			<tr>
				<td class="lbl">Image</td>
				<td><img src="<?php echo $path;?>" height="400" width="400"><br>
				<input type="file" name="image" ></td>
			</tr>

		<table>

            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
    		<i class="fa fa-home"></i> Save Updates </button>	
	</form>
</div>

</body>
</html>