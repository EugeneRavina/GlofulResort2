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
      $(".content-loader").load('termsadd.php');
      $("#btn-add").hide();
      $("#btn-view").show();
    });
  });

  $("#btn-view").click(function(){

    $("body").fadeOut('slow', function()
    {
      $("body").load('terms.php');
      $("body").fadeIn('slow');
      window.location.href="terms.php";
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
        <button class="btn btn-info" type="button" id="btn-add"> <i class="fa fa-pencil"></i> &nbsp; Add Terms and Conditions</button>
       <button class="btn btn-info" type="button" id="btn-view"> <i class="fa fa-eye"></i> &nbsp; View Terms and Conditions</button>
            <br>
            <div class="content-loader">  <br>
               <table class="table table-hover table-striped center full-width">
                    <thead class="thead">
                    <tr>
		       		     <th> ID </th>
		       		     <th> Terms and Conditions </th>
		     		       <th> Edit</th>
		     		       <th> Delete</th>
		        		 
					       	</tr>
		              </thead>

<?php
	 $sql="select * from terms_tbl";
	 $result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
			$id=$row['id'];
			$terms=$row['terms'];
	


		echo "<tbody>" ;
		echo "<tr>" ;
		echo "<td>". $id."</td>";
		echo "<td>". $terms."</td>";
	
		
		echo "<td><a href='termsedit.php'id=$id class='termsedit-link' title='Edit'><i class='fa fa-pencil'></i></a></td>";
		echo "<td><a href='termsdelete.php?id=$id' onclick='return confirm('sure to delete ?')'><i class='fa fa-trash-o'></i></td>";
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
