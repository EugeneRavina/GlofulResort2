<?php
session_start();
include("../Users/connection.php");
$userid = $_SESSION['UserID'];

if(isSet($_POST['submitbtn'])){
	$Pic = $_FILES['Picture']['name'];
	$Sid = $_POST['Sid'];
	$STitle = $_POST['STitle'];
	$Sdesc = $_POST['Sdesc'];

		if($Pic == "")
		{
      $sql3="Update imageslider_tbl  SET Title = '$STitle', Description = '$Sdesc' where ImageID = '$Sid'";
  	  $result3=mysql_query($sql3);
			echo "<script>alert('The description is successfuly updated!');window.location.href='BackendHome.php'</script>";
		}

		else
		{

	        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
	        $path = '../Images/Home/';

	    	$img = $_FILES['Picture']['name'];
	    	$tmp = $_FILES['Picture']['tmp_name'];
	    	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

	        $img2 = rand(100,900) . basename($_FILES['Picture']['name']);

	        $path = $path . $img2;

	        if(in_array($ext, $valid_extensions))
	    	{
	    		if(move_uploaded_file($_FILES['Picture']['tmp_name'], $path))
	    		{

	    			$sql3="Update imageslider_tbl SET Image = '$img2', Title = '$STitle', Description = '$Sdesc' where ImageID = '$Sid'";
            $result3=mysql_query($sql3);
            echo "<script>alert('The background, title, and description are successfuly updated!');window.location.href='BackEndHome.php'</script>";
	    		}
	    	}
	    	else
	    	{
	    		echo "<script>alert('Invalid!');window.location.href='BackendHome.php'</script>";
	    	}
		}
			$ActionAdd="Updated the Homepage";
        $DateAdd=date("Y-m-d");
        	date_default_timezone_set('asia/kuala_lumpur');
			$TimeAdd= date("h:i:s");
			$usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time) values('$userid','$ActionAdd','$DateAdd','$TimeAdd')";
        $result1=mysql_query($sql1);
}
?>
