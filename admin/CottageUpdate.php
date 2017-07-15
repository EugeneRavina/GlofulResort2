
<?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];
if(isset($_POST['submit'])){

		$id=$_POST['id'];
		$name=$_POST['Type'];
		$desc=$_POST['Description'];
		$price=$_POST['Price'];
		$max=$_POST['Pax'];
		$quantity=$_POST['Quantity'];
		$file_name=$_FILES['image']['name'];
		$file_type=$_FILES['image']['type'];
		$file_size=$_FILES['image']['size'];
		$file_tmp_name=$_FILES['image']['tmp_name'];
		$path="../Images/Cottage/".$file_name ;

	if($file_name=="")
	{
		$sql3="Update cottage_tbl SET CType='$name', CDescription='$desc', CPrice='$price', Pax='$max', Quantity='$quantity' Where Cid='$id'";
	$result3=mysql_query($sql3);

	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Cottages.php>";
	}
	else
	{
	 if($file_name)
	 {
	move_uploaded_file($file_tmp_name,$path);
	$sql2="Update cottage_tbl SET CType='$name', CDescription='$desc', CPrice='$price', Pax='$max', Quantity='$quantity', CImage='$file_name' Where Cid='$id'";
	$result2=mysql_query($sql2);

	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Cottages.php>";
	 }
	}
  $ActionAdd="Updated a Cottage";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql4="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result4=mysql_query($sql4);

}else {

	$sql1="Select * from Cottage_tbl where Cid='$_GET[id]'";
	$result1=mysql_query($sql1);

	while($row=mysql_fetch_assoc($result1)){

		$id=$row['Cid'];
		$name=$row['CType'];
		$desc=$row['CDescription'];
		$price=$row['CPrice'];
		$min=$row['Min'];
		$max=$row['Pax'];
		$quantity=$row['Quantity'];
		$images=$row['CImage'];
		$path="../Images/Cottage/".$images;
	}

}?>
