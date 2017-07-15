
<!DOCTYPE html>
<HTML lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

	<!-- core CSS -->
    <?php include('../View/CSSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	  <script src="../js/animatescroll.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/moment.min.js"></script>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
		</script>
</head>



<body>
    <header id="header">
	    <?php include('NavTopBar.php');?>
    </header>

<div class="container">
<div class="row">

	<div class="containerprogressbar">
    <ul class="progressbar">
		<li >Select Date</li>
		<li >Packages</li>
		<li>Event</li>
		<li>Additional</li>
		<li>Payment</li>
	</ul>
	</div><!-- PROGRESS BAR-->

	<div class="Cart">
	<center>
	<form method="POST" action="BookResort.php">
	<h2>Select Date</h2>
    <input type="text" id="datepicker" name="Date" value="<?php  if(isset($_POST['submit'])){

	$Date=$_POST['Date'];
	echo $Date;
	}
	 ?>" required/>
	<br>

	<h2>Book Option</h2>
	<h4></h4>
  <div data-toggle="buttons">
          <label class="btn btn-info btn-circle active"><input type="radio" name="option" value="Resort"><i class="glyphicon glyphicon-home" checked></i></label><label>Resort</label>
          <label class="btn btn-success btn-circle "> <input type="radio" name="option" value="Catering"><i class="fa fa-cutlery"></i></label>Catering
  </div>

	<br><br><br>
	<br><br><br>
	<input type="Submit" class="btn btn-success width90" name="submit" value="CHECK AVAILABILITY"/>
	</center>
	</form>

	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
	</div><!-- CalendarViewwing-->
  </div>
</div> <!--CONTAINER-->
<script>
  $( "#datepicker" ).datepicker({
    showOn: "both",
    buttonImage: "../Images/calendar.gif",
    buttonImageOnly: true,
    minDate: 0
  });
</script>
</body>
 </html>
