   <?php
session_start();
require("../Users/connection.php");
$active = 'Website';
    $userid = $_SESSION["UserID"];
    $usertype = $_SESSION["UserTypeID"];

   if($userid==NULL)
   {
  echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
   }else{
      $query="SELECT Home from usertype_tbl where UserTypeID='$usertype'";
     $result=mysql_query($query);
     while($rows=mysql_fetch_assoc($result)) {
     $BackEndHome=$rows['Home'];

     if($BackEndHome=='TRUE'){
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
</head>
<body>

   <div class="container">
     <div class="topbar">
    			<?php include('navtop.php');?>
    		</div>
		<?php include('Sidebar.php'); ?>
        <div class="main">
				<?php
				$sql1="Select * from imageslider_tbl";
				$result=mysql_query($sql1);

				while($row=mysql_fetch_assoc($result))
				{

					$ID=$row['ImageID'];
					$filename=$row['Image'];
					$title=$row['Title'];
					$Description=$row['Description'];
					$path="../Images/Home/".$filename;


				?>
        <form method = 'POST' enctype="multipart/form-data" action = 'BackendHome-Edit.php'>
  				<div class="form">
  					<div>
              <h2 class="form-header">Home package</h2>
  						<table class = ''>
  							<tr>
  								<td><img height="311px" width="70%" src="<?php echo $path;?>"></td>
                  <div class="form-body">
                  Title: <input type="text" name="STitle" class="textbox" value="<?php echo $title;?>" required><br>
                  Description:<br> <textarea name = 'Sdesc' class="text-area" rows="7" cols="30" required><?php echo $Description;?></textarea><br><br>
                  <button type="submit" name="submitbtn" class="btn btn-info">Update</button>
                    <input type='hidden' name="Sid" class="textbox" value='<?php echo $ID;?>'>

                </div>
                </tr>
  							<tr>
  								<td><input type="file" name="Picture"></td>
  							</tr>
  						</table>
  					</div>
  				</div>
  			</form>
<?php }?>
        <?php
        $sql2="Select * from logo_tbl";
        $result=mysql_query($sql2);

        while($row=mysql_fetch_assoc($result))
        {

          $ID=$row['LogID'];
          $filename=$row['Image'];
          $title=$row['Name'];
          $Description=$row['Description'];
          $path="../Images/Icons/".$filename;


        ?>
        <form method = 'POST' enctype="multipart/form-data" action = 'BackendEdit-2.php'>
          <div class="form">
            <div>
              <h2 class="form-header">Logo Section</h2>
              <table class = ''>
                <tr>
                  <td><img height="201px" width="70%" src="<?php echo $path;?>"></td>
                  <div class="form-body">
                  Title: <input type="text" name="STitle" class="textbox" value="<?php echo $title;?>" required><br>
                  Description:<br> <textarea name = 'Sdesc' class="text-area" rows="7" cols="30" required><?php echo $Description;?></textarea><br><br>
                  <button type="submit" name="submitbtn" class="btn btn-info">Update</button>
                    <input type='hidden' name="Sid" class="textbox" value='<?php echo $ID;?>'>

                </div>
                </tr>
                <tr>
                  <td><input type="file" name="Picture"></td>
                </tr>
              </table>
            </div>
          </div>
        </form>
<?php }?>

<?php
$sql2="Select * from amenities_tbl";
$result=mysql_query($sql2);

while($row=mysql_fetch_assoc($result))
{

  $ID=$row['ID'];
  $filename=$row['Image'];
  $title=$row['Title'];
  $Description=$row['Description'];
  $path="../Images/Home/".$filename;


?>
<form method = 'POST' enctype="multipart/form-data" action = 'BackendHomeEdit3.php'>
  <div class="form">
    <div>
      <h2 class="form-header">Facilities Section</h2>
      <table class = ''>
        <tr>
          <td><img height="201px" width="70%" src="<?php echo $path;?>"></td>
          <div class="form-body">
          Title: <input type="text" name="STitle" class="textbox" value="<?php echo $title;?>" required><br>
          Description:<br> <textarea name = 'Sdesc' class="text-area" rows="7" cols="30" required><?php echo $Description;?></textarea><br><br>
          <button type="submit" name="submitbtn" class="btn btn-info">Update</button>
            <input type='hidden' name="Sid" class="textbox" value='<?php echo $ID;?>'>

        </div>
        </tr>
        <tr>
          <td><input type="file" name="Picture"></td>
        </tr>
      </table>
    </div>
  </div>
</form>
<?php }?>
<?php
}else{
		echo"<script>alert('You are not allowed to access this page!');window.location.href='adminIndex.php'</script>";
	}
	}
}
?>
