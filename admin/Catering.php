    <?php
require("../Users/connection.php");
session_start();
$active = 'Website';
			$userid = $_SESSION["UserID"];
			$usertype = $_SESSION["UserTypeID"];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT Catering from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$Catering=$rows['Catering'];

				if($Catering=='TRUE'){
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
        $(".content-loader").load('CAdd.php');
        $("#btn-add").hide();
        $("#btn-view").show();
      });
    });

    $("#btn-view").click(function(){

      $("body").fadeOut('slow', function()
      {
        $("body").load('Catering.php');
        $("body").fadeIn('slow');
        window.location.href="Catering.php";
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


            <div class="main">
              <button class="btn btn-info" type="button" id="btn-add"> <i class="fa fa-pencil"></i> &nbsp; Add Package</button>
              <a href="Food.php" class="btn btn-info" type="button" id="btn-add" > <i class="fa fa-eye"></i> &nbsp; Food Maintenance</a>
              <button class="btn btn-info" type="button" id="btn-view"> <i class="fa fa-eye"></i> &nbsp; View Menu</button>
                    <br>
                    <div class="content-loader">
              <br>
               <table  class="table table-striped table-hover full-width center">
                    <thead class="thead">
                        <tr>
		       		     <th> Package </th>
		     		       <th> Dishes</th>
		     		       <th> Image</th>
			        	   <th> Edit </th>
			        	   <th> Delete </th>

						    </tr>
		            </thead>
<?php
	 $sql="select * from catering_tbl";
	 $result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
			$id=$row['id'];
			$package=$row['Package'];
			$dishes=$row['Description'];
			$pic=$row['FoodImage'];
      $path="../Images/Restaurant/Foods/".$pic;

		echo "<center>";
		echo "<tbody>" ;
		echo "<tr>" ;
		echo "<td>". $package."</td>";
		echo "<td>". $dishes."</td>";

    echo "<td>".'<img src="'.$path.'"/>'. "</td>";
		echo "<td><a href=Catering-Edit.php?id=$id><i class='fa fa-pencil'></i>"." ". "</td>";
		echo "<td><a href=><i class='fa fa-trash-o'></i></td>";
		echo "</tr>";
		echo "</tbody>";
		echo "<center>";
			}




?>



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
