   <?php

require("../Users/connection.php");
session_start();
$active = 'UserMaintenance';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT User from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$User=$rows['User'];

				if($User=='TRUE'){

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
    <script type="text/javascript">

  $(document).ready(function(){

  $("#btn-view").hide();

  $("#btn-add").click(function(){
    $(".content-loader").fadeOut('slow', function()
    {
      $(".content-loader").fadeIn('slow');
      $(".content-loader").load('UserAdd.php');
      $("#btn-add").hide();
      $("#btn-view").show();
    });
  });

  $("#btn-view").click(function(){

    $("body").fadeOut('slow', function()
    {
      $("body").load('Users.php');
      $("body").fadeIn('slow');
      window.location.href="Users.php";
    });
  });

  });
  </script>

</head>
<body>
 <div class="container">
   <div class="topbar">
  			<?php include('navtop.php');?>
  		</div>
      <?php include('Sidebar.php'); ?>

      <div class="main ">
        <button class="btn btn-info" type="button" id="btn-add"> <i class="fa fa-pencil"></i> &nbsp; Add User</button>
        <button class="btn btn-info" type="button" id="btn-view"> <i class="fa fa-eye"></i> &nbsp; View Users</button>
          <br>
          <div class="content-loader">  <br>
               <table  class="table table-striped table-hover center full-width">
                    <thead class="thead">
                     <tr>
		       		       <th> ID </th>
		       		       <th> Name </th>
		     		         <th> Position</th>
		     		         <th> Image</th>
			        	     <th> Edit </th>
			        	     <th> Delete </th>
                     </tr>



						<?php

						$sql="select UserID , Position , CONCAT(FName,' ',LName) as Fullname,UImage from user_tbl as a inner join usertype_tbl as b on a.UserTypeID=b.UserTypeID";
						$result=mysql_query($sql);



						while($row=mysql_fetch_assoc($result)){
						$UserID=$row['UserID'];
						$FullName=$row['Fullname'];
						$Position=$row['Position'];
            $pic=$row['UImage'];
      			$path="../Images/Users/".$pic;

						echo "<tbody>" ;
						echo "<tr>" ;
						echo "<td>". $UserID. "</td>";
						echo "<td>". $FullName."</td>";
						echo "<td> ". $Position ."</td>";
            echo "<td>".'<img src="'.$path.'"/>'. "</td>";
						echo "<td><a href='#'id=$UserID class='UserEdit-link' title='Edit'><i class='fa fa-pencil'></i></a></td>";
						echo "<td><a href=UsersDelete.php?id=$UserID><i class='fa fa-trash-o'></i></a></td>";
						}
						?>
		            </thead>
					</table>

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
