<?php

ini_set('mysql.connection_timeout',300);
ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");
?>
<?php

if(isset($_POST["submit"]))
   {

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $rpass=$_POST['rpass'];
 $type=$_POST['Type'];
 $file_name=$_FILES['image']['name'];
 $file_type=$_FILES['image']['type'];
 $file_size=$_FILES['image']['size'];
 $file_tmp_name=$_FILES['image']['tmp_name'];
 $path="../Images/Users/".$file_name ;
 if($file_name){

 move_uploaded_file($file_tmp_name,$path);
 if($type==1)
 {
  $query="Select UserTypeID from user_tbl where UserTypeID='1'";
  $result=mysql_query($query);
  $count=mysql_num_rows($result);
    if($count>=3){

    echo "<script>alert('You cant add another Admin');</script>";
  }else{
    if($pass!=$rpass)
  {

  echo "<script>alert('Password does not match!');</script>";

  }else
  {

    $sql="Select * from user_tbl where Email='$email'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
    if($count>=1)
    {
      echo "<script>alert('your email is already existed !!! Try another email! ');window.location.href='Users.php'</script>";
    }else
    {
      $sql="Select * from user_tbl where Username='$user'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
      if($count>=1)
      {
      echo "<script>alert('Username is already used !!!');window.location.href='Users.php'</script>";

      }else
      {
        $epass=md5($pass);
        $sql="Insert into user_tbl (FName,LName,Email,Username,Password,UserTypeID,UImage) values ('$fname','$lname','$email','$user','$epass','$type','$file_name')";
        $result=mysql_query($sql);

        $ActionAdd="Added a User";
        $DateAdd=date("Y-m-d");
        $TimeAdd=date("h:i");
        $usertype;

        $sql1="Insert into auditlog_tbl (UserTypeID,Action,Date,Time,TimeOut) values('$usertype','$ActionAdd','$DateAdd','$TimeAdd','---')";
        $result1=mysql_query($sql1);
        echo "<script>alert('Successfully added a user');</script>";
        echo "<meta http-equiv=refresh content=3;url='Users.php'>";

      }
    }

  }
  }
 }else
 {



  if($pass!=$rpass)
  {

  echo "<script>alert('Password does not match!');</script>";

  }else
  {

    $sql="Select * from user_tbl where Email='$email'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
    if($count>=1)
    {
      echo "<script>alert('your email is already existed !!! Try another email! ');window.location.href='Users.php'</script>";
    }else
    {
      $sql="Select * from user_tbl where Username='$user'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
      if($count>=1)
      {
      echo "<script>alert('Username is already used !!!');window.location.href='Users.php'</script>";

      }else
      {
        $epass=md5($pass);
        $sql="Insert into user_tbl (FName,LName,Email,Username,Password,UserTypeID,UImage) values ('$fname','$lname','$email','$user','$epass','$type','$file_name')";
        $result=mysql_query($sql);

        $ActionAdd="Added a User";
        $DateAdd=date("Y-m-d");
        $TimeAdd=date("h:i");
        $usertype;

        $sql1="Insert into auditlog_tbl (UserID,Action,Date,Time,TimeOut) values('$userid','$ActionAdd','$DateAdd','$TimeAdd','---')";
        $result1=mysql_query($sql1);
        echo "<script>alert('Successfully added a user');</script>";
        echo "<meta http-equiv=refresh content=3;url='Users.php'>";

      }
    }

  }
 }
}

   }







?>
