  <?php

 ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
   $userid = $_SESSION['UserID'];

 if(isset($_POST["submit"]))
		{

	$Type=$_POST['Type'];
	$Desc=$_POST['Desc'];
  $file_name=$_FILES['image']['name'];
  $file_type=$_FILES['image']['type'];
  $file_size=$_FILES['image']['size'];
  $file_tmp_name=$_FILES['image']['tmp_name'];
  $path="../Images/Pool/".$file_name ;
	if($file_name){

	move_uploaded_file($file_tmp_name,$path);

	$sql="insert into pool_tbl (PName,PDescription,PImage) values('$Type','$Desc','$file_name')";
	$result=mysql_query($sql);
	
		$ActionAdd="Added a Pool";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);

	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Pools.php>";


	}

 }

 ?>
 </body>
 </html>
