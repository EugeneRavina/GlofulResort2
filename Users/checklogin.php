<?php
include("connection.php");


//username and password sent from form log-include

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];



//To protect MYSQL injection (find more detail about MYSQL INJECTION)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$epass=md5($password);

echo $epass;

	$sql="SELECT * FROM user_tbl WHERE Username='$username' && Password='$epass'";
	$result=mysql_query($sql);

	while($row=mysql_fetch_assoc($result))
	{
	$userid= $row['UserID'];
	$usertypeid = $row['UserTypeID'];

	echo "<br>".$row['Password'];

	}

//Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

//If result matched $username and $password, table row must be 1
// echo.$count;
	if($count==1)
	{
//Register $username,$password and redirect to file "adminIndex.php"

	session_start();

	$_SESSION['UserID'] = $userid;
	$_SESSION['UserTypeID'] = $usertypeid;
		if($_SESSION['UserTypeID']==0)
		{

			$sql="SELECT * from customer_tbl where Username='$username' && Password='$epass'";
			$result=mysql_query($sql);
			while($row=mysql_fetch_assoc($result))
			{
				$Status=$row['Active'];

				$_SESSION['Active']=$Status;
				$_SESSION['CustID']=$id;

				header("Location:Home.php");

			}

		}else
		{

		$ActionLogin="Login";
		$DateLog=date("Y-m-d");
		$TimeLog=date("h:i");

		$sql1="INSERT INTO auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionLogin','$DateLog','$TimeLog')";
		$result1=mysql_query($sql1);



		header("location:../admin/adminIndex.php");

		}


	}
	else{
//if failed back to login.php
	echo"<script language='javascript'>alert('Username And Password does not match!');</script>";

	echo "<meta http-equiv=refresh content=3;url=../index.php>";
}
}
?>
