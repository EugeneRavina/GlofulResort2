

<?php
session_start();
 $userid=$_SESSION['UserID'] ;

?>
<!DOCTYPE html>
<HTML lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/jquery-ui.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.theme.min.css" rel="stylesheet">

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
	    <div class="top-bar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i> 454-8823 / 294-9860
						<!--<i class="fa fa-envelope-o"></i> naks_sarap@yahoo.com--> </p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
					       <ul class="social-share">
                                <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twit"><i class="fa fa-twitter" ></i></a></li>
							    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                <li><a href="#" class="yahoo"><i class="fa fa-yahoo"></i></a></li>

                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="../Images/Icons/Gloful2.png" width="90" height="80" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

					    <li class="hidden">
                           <a href="#page-top"></a>
                        </li>

                        <li ><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Amenities <i class="fa fa-angle-double-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                <a href="Pools.php">Pools</a>
                                </li>
                                <li>
                                <a href="Cottages.php">Cottages</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="Resto.php"><i class="fa fa-cutlery"></i> Catering</a></li>
                        <li><a href="Rooms.php"><i class="fa fa-building-o"></i> Rooms</a></li>
                        <li><a href="portfolio.html"><i class="fa fa-camera-retro"></i> Photos</a></li>
                        <li><a href="#contact" class="page-scroll"><i class="fa fa-comments-o"></i> 	Contact</a></li>
                        <li class="active"><a href="Book-Types.php" class="BookNow">Book Now</a></li>

                    </ul>
                </div>


            </div><!--/.container-->
        </nav><!--/nav-->

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
    <input type="text" id="datepicker" name="Date"  value="<?php  if(isset($_POST['submit'])){

	$Date=$_POST['Date'];
	echo $Date;
	}
	 ?>" required/>
	<br>

	<h2>Book Option</h2>
	<h4><input type="radio" name="option" value="Resort"> Resort
	<input type="radio" name="option" value="Catering"> Catering</h4>

	<br><br><br>
	<br><br><br>

	<input type="Submit" name="submit" value="NEXT"/>

	</center>
	</form>


  <script>
    $( "#datepicker" ).datepicker({
      showOn: "both",
      buttonImage: "../Images/calendar.gif",
      buttonImageOnly: true,
      minDate: 0 + 14
    });
  </script>

	</div><!--Customer INFORMATION-->

  	<div class="MainDiv">


  	</div><!-- CalendarViewwing-->
	</div>





</div> <!--CONTATINER-->




</body>


 </html>
