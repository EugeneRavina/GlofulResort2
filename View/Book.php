<?php
session_start();
require("../Users/connection.php");

$id=$_SESSION['CustID'];
if($id==NULL){

	echo '<script>alert("You must Login first");window.location.href="../index.php#Login"</script>';

}else{

	header("Location:../Users/Book.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

	<!-- core CSS -->
  <?php include('View/CSSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

</head><!--/head-->

<body class="homepage">
  <?php include('View/Navbar.php');?>
  <?php include('View/Login.php');?>


	<br>
	<div class="container">

    <input type="text" id="datepicker">

	</div>

  <script>
    $( "#datepicker" ).datepicker({
      showOn: "both",
      buttonImage: "../images/calendar.gif",
      buttonImageOnly: true,
      minDate: 0
    });
  </script>
	<script>
	$('#demo').daterangepicker({
    "autoApply": true,
    "startDate": "09/13/2016",
    "endDate": "09/19/2016"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
</script>
	<a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up wow fadeInDown fa-3x"></i></a>
<?php include('footer.php');?>
<?php include('View/JSLinks.php');?>

</body>
</html>
<?php
}
?>
