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
 			$query="SELECT Cottage from usertype_tbl where UserTypeID='$usertype'";
 			$result=mysql_query($query);
 			while($rows=mysql_fetch_assoc($result))
 			{
 				$Cottage=$rows['Cottage'];

 				if($Cottage=='TRUE'){
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
      $(".content-loader").load('CottageAdd.php');
      $("#btn-add").hide();
      $("#btn-view").show();
    });
  });

  $("#btn-view").click(function(){

    $("body").fadeOut('slow', function()
    {
      $("body").load('Cottages.php');
      $("body").fadeIn('slow');
      window.location.href="Cottages.php";
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
        <button class="btn btn-info" type="button" id="btn-add"> <i class="fa fa-pencil"></i> &nbsp; Add New Cottage</button>
       <button class="btn btn-info" type="button" id="btn-view"> <i class="fa fa-eye"></i> &nbsp; View Cottage/s</button>
            <br>
            <div class="content-loader">  <br>
               <table class="table table-hover table-striped center full-width">
                    <thead class="thead">
                    <tr>
		       		     <th> ID </th>
		       		     <th> Name </th>
		     		       <th> Description</th>
		        		   <th> Price </th>
				           <th> Capacity </th>
			        	   <th> Quantity</th>
			        	   <th> Image </th>
			        	   <th> Edit </th>
			        	   <th> Delete </th>
					       	</tr>
		              </thead>

<?php
	 $sql="select * from Cottage_tbl";
	 $result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
			$id=$row['Cid'];
			$name=$row['CType'];
			$desc=$row['CDescription'];
			$price=$row['CPrice'];
			$max=$row['Pax'];
			$quantity=$row['Quantity'];
			$pic=$row['CImage'];
			$path="../Images/Cottage/".$pic;


		echo "<tbody>" ;
		echo "<tr>" ;
		echo "<td>". $id."</td>";
		echo "<td>". $name."</td>";
		echo "<td>". $desc."</td>";
		echo "<td> ". $price ."</td>";
		echo "<td> ". $max ."</td>";
		echo "<td> ". $quantity ."</td>";
		echo "<td>".'<img src="'.$path.'"/>'. "</td>";
		echo "<td><a href='#'id=$id class='edit-link' title='Edit'><i class='fa fa-pencil'></i></a></td>";
		echo "<td><a href='CottageDelete.php?id=$id' onclick='return confirm('sure to delete ?')'><i class='fa fa-trash-o'></i></td>";
		echo "</tr>";
		echo "</tbody>";

			}
?>
</table>
</div>
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
