<?php
ini_set('mysql.connection_timeout',300);
ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
$userid = $_SESSION['UserID'];
if(isset($_POST['submit'])){

		$id=$_POST['id'];
		$name=$_POST['name'];
		$desc=$_POST['Desc'];
		$file_name=$_FILES['image']['name'];
		$file_type=$_FILES['image']['type'];
		$file_size=$_FILES['image']['size'];
		$file_tmp_name=$_FILES['image']['tmp_name'];
		$path="../Images/Gallery/".$file_name ;

	if($file_name==""){
		$query3="UPDATE images_tbl SET Name='$name', Description='$desc' WHERE ID='$id'";
		$result3=mysql_query($query3);

		echo "<center>";
		echo "<strong>Thank you!</strong> You successfully updated.</p>";
		echo "You'll be directed to the Home Page";
		echo "</center>";
		echo "<meta http-equiv=refresh content=3; url=FunctionHall.php>";
	}else{

	}
	if($file_name){
		move_uploaded_file($file_tmp_name,$path);
		$sql2="UPDATE images_tbl SET Name='$name', Description='$desc', Image='$file_name' Where ID='$id'";
		$result2=mysql_query($sql2);

		echo "<center>";
		echo "<strong>Thank you!</strong> You successfully updated.</p>";
		echo "You'll be redirected to Home Page";
		echo "</center>";
		echo "<meta http-equiv=refresh content=3;url=Gallery.php>";

	}else{
				echo "<meta http-equiv=refresh content=3;url=Gallery.php>";
	}
	$ActionAdd="Updated an Image";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
}

?>
