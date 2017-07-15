<?php
ini_set('mysql.connection_timeout',300);
 ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");


$sql1="Select * from terms_tbl where id='$_GET[id]'";
$result1=mysql_query($sql1);
$row=mysql_fetch_assoc($result1);
$id = $row ['id'];
$terms=$row['terms'];

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


    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">

	<link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

	<script src="../js/jquery.js"></script>
    <script src="../js/custom.js"></script>

</head>
<body>

    <div class="main">
    <form method='POST'  action='termsupdate.php' enctype="multipart/form-data">
    <table class='table full-width'>
    <div class="blue form-title center full-width"><h2>EDIT TERMS AND CONDITIONS</h2></div>
 		<input type ="hidden" name="id" value="<?php echo $id; ?>">


        <tr>
            <td class="lbl">Update</td>
            <td><textarea name="terms" class="text-area width90"  ><?php  echo $terms;  ?></textarea></td>
        </tr>
	

    
        </table>

              <button type="submit" class="btn btn-info" name="submit" id="btn-update">
        		<i class="fa fa-pencil"></i> Save Update</button>

</form>
</div>

</body>
</html>
