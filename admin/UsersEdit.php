<?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");


$sql4="Select * from user_tbl where UserID='$_GET[id]'";
$result2=mysql_query($sql4);
$row=mysql_fetch_assoc($result2);

  $UserID=$row['UserID'];
  $FName=$row['FName'];
  $LName=$row['LName'];
  $Email=$row['Email'];
  $Username=$row['Username'];
  $Password=$row['Password'];
  $UserType=$row['UserTypeID'];
  $images=$row['UImage'];
  $path="../Images/Users/".$images;
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


</head>
<body>

    <div class="main">
    <form method='POST'  action='UserUpdate.php' enctype="multipart/form-data">
    <table class='table full-width'>
    <div class="blue form-title center full-width"><h2>USER EDIT</h2></div>
     <input type="hidden" name="UserID" value="<?php echo $UserID; ?>">
        <tr>
            <td class="lbl">First Name</td>
            <td><input type="text" name="fname" class="textbox width90" value="<?php echo $FName; ?>" ></td>
        </tr>

        <tr>
            <td class="lbl">Last Name</td>
            <td><input type="text" name="lname" class="textbox width90" value="<?php echo $LName; ?>" ></td>
        </tr>

        <tr>
            <td class="lbl">Email Add</td>
            <td><input type="email" name="email" class="textbox width90" value="<?php echo $Email; ?>" ></td>
        </tr>
        <tr>
            <td class="lbl">Username</td>
            <td><input type="text" name="user" class="textbox width90" value="<?php echo $Username; ?>"></td>
        </tr>
        <tr>
            <td class="lbl">Password</td>
            <td><input type="password" name="pass" class="textbox width90" value="<?php echo $Password; ?>"></td>
        </tr>
        <tr>
            <td class="lbl">Retype Password</td>
            <td><input type="password" name="rpass" class="textbox width90" value="<?php echo $Password; ?>"></td>
        </tr>
        <tr>
            <td class="lbl">Type of Position</td>
            <td><select name="Type" >

    					<?php

    					$sql="Select * from usertype_tbl";
    					$result=mysql_query($sql);

    					while($row=mysql_fetch_assoc($result))
    					{

    						$type=$row['Position'];
    						$usertypeid=$row['UserTypeID'];

    						echo "<option value='".$usertypeid."'> ".$type."</option>";

    					}

    					?></td>
        </tr>
        <tr>
            <td class="lbl">Image</td>
            <td>	<img src="<?php echo $path;?>" height="400" width="400"><br>
                <input type="file" name="image" ></td>
        </tr>
        </table>

              <button type="submit" class="btn btn-info" name="submit" id="btn-update">
           <i class="fa fa-pencil"></i> Save Updates</button>

</form>
</div>

</body>
</html>


				 <!-- EDITING !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!		!-->
					<?php

					if(isset($_POST['submit']))
				{
					$UserID=$_POST['UserID'];
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$number=$_POST['number'];
					$email=$_POST['email'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
					$rpass=$_POST['rpass'];
					$type=$_POST['Type'];

					if($pass!=$rpass)
					{

					echo "<script>alert('Password does not match!');window.location.href='Users.php'</script>";

					}else
					{

								$epass=md5($pass);
								$sql5="update user_tbl SET FName='$fname', LName='$lname', Email='$email', Contact='$number', Username='$user', Password='$epass', UserTypeID='$type' WHERE UserID='$UserID'";
								$result=mysql_query($sql5);

								$ActionEdit="Updated a User";
								$DateEdit=date("Y-m-d");
								$TimeEdit=date("H:i");

								$sql1="INSERT INTO auditlog_tbl (UserID,Action,Date,Time,TimeOut) values('$userid','$ActionEdit','$DateEdit','$TimeEdit','----')";
								$result1=mysql_query($sql1);

								echo "<script>alert('Successfully updated a user');window.location.href='Users.php'</script>";

					}

				}else

				{

					$sql2="Select * from user_tbl where UserID='$_GET[id]'";
					$result2=mysql_query($sql2);

					while($row=mysql_fetch_assoc($result2)){

						$UserID=$row['UserID'];
						$FName=$row['FName'];
						$LName=$row['LName'];
						$Email=$row['Email'];
						$Username=$row['Username'];
						$Password=$row['Password'];
						$UserType=$row['UserTypeID'];

					}

				}
					?>
