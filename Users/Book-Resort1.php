 <?php
require("../Users/connection.php");
session_start();

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
    <script src="../js/crud.js"></script>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">






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
<div class="div">
	<div class="containerprogressbar">
    <ul class="progressbar">
		<li class="active">Select Date</li>
		<li class="active">Packages</li>
		<li>Event</li>
		<li>Additional</li>
		<li>Payment</li>
	</div>

	<div class="div2">
	<?php
	if(isset($_POST['submit'])){

		$Date=$_POST['Date'];
		$Guest=$_POST['Guest'];
		$Schedule=$_POST['Schedule'];


		$_SESSION['Date']=$Date;
		$_SESSION['Guest']=$Guest;
		$_SESSION['Schedule']=$Schedule;


	}
	if(isset($_POST['submity']))
	{

			$Type=$_POST['Type'];
			$Price=$_POST['Price'];
			$Select=$_POST['select'];



			$Date=$_POST['Date'];
			$Guest=$_POST['Guest'];
			$Schedule=$_POST['Schedule'];



	}




	?>
	<form method="POST" action="Book-Gloful-Step4.php">
	&nbsp;<h3 style="color:WHITE">  Date:
	&nbsp; <input type="hidden" name="Date" value="<?php echo $Date; ?>"/>
	&nbsp; <input type="hidden" name="Guest" value="<?php echo $Guest; ?>"/>
	&nbsp; <input type="hidden" name="Schedule" value="<?php echo $Schedule; ?>"/>
	<?php

	if(isset($_POST['submit'])){

		$Date=$_POST['Date'];
		echo $Date."<br>";
		echo $_SESSION['RCode'];
		echo "Schedule: <br>".$Schedule."<br>";;
		echo "No. Guest<br>".$Guest;



	}
	if(isset($_POST['submity']))
	{

			$Type =$_POST['Type'];
			$Price=$_POST['Price'];
			$Select=$_POST['select'];



			$Date=$_POST['Date'];
			$Guest=$_POST['Guest'];
			$Schedule=$_POST['Schedule'];


		echo $Date;

		echo "Schedule: <br>".$Schedule."<br>";;
		echo "No. Guest<br>".$Guest;
		echo "Cottage: <br>".$Type."------ Php.".$Price*$Select ;

	}





?>
</h3>


	<br><br><br>
	<center>





	</center>
	</div><!--Customer INFORMATION-->
	<div class="divcalendar">
	<div class="content-loader">
	<table class="table table-hover">
	<thead class="thead">
	<tr>
	<th> </th>
	<th> Cottage</th>
	<th> Capacity</th>
	<th> Quantity</th>
	<th> Price</th>
	<?php
	$sql="Select * from cottage_tbl";
	$result=mysql_query($sql);
	$int= 1;

		while($row=mysql_fetch_assoc($result))
		{
		$Cid=$row['Cid'];
		$Type=$row['CType'];
		$Price=$row['CPrice'];

		$Max=$row['Max'];
		$Desc=$row['CDescription'];
		$Quantity=$row['Quantity'];
		$pic=$row['CImage'];
		$path="../Images/Cottage/".$pic;


		echo "<tr>";
		echo "<td>".'<img src="'.$path.'" width="80" height="80"/>'. "</td>";
		echo "<td>". $Type."</td>";
		echo "<input type='hidden' name='Type".$int."' value='".$Type."'>";
		echo "<input type='hidden' name='Cid".$int."' value='".$Cid."'>";
		echo "<input type='hidden' id='Quantity".$int."' value='".$Quantity."'>";
		echo "<td>". $Max."</td>";
		echo "<td>". $Quantity."</td>";
		echo "<td> <font color='Red'>Php: ". $Price ."</font></td>";


		/* echo "<td><select>";
		echo "<script>";

		echo "var x = document.getElementById('Quantity".$int."').value;";

		echo "for (var a=0; a<= x; a++ ){ ";


		echo  '$("select").append("<option >" + a + "</option>");';

		echo "}";

		echo "</script>";
		echo "</select>";
		 */









		echo "<input type='hidden' name='Price".$int."' value='".$Price."'>";
		echo "<td><a href='#'id=$Cid class='Book-link' title='Book'><i class='fa fa-pencil'></i></a></td>";

		echo "<td><input type='number' name='Quantity".$int."' value='0' min='0' max='".$Quantity."'  size='2' >".$int."<i class='fa fa-pencil'></i></a></td>";


		echo "<td><a href='#Quantity'><a href='#Quantity'?id=$Cid>Book</i></a></a></td>";
		echo "</tr>";



		$int++;
		}



	?>



	</thead>
	</table>

	<!--Quantity HHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->


	</div>
	</div>
	<input type="Submit" name="submit" value="NEXT"/>
	</form>

	<form method="POST" action="Book-Gloful-Step2Resort.php">

	<input type="hidden" name="Date" value="<?php   if(isset($_POST['submit'])){

		$Date=$_POST['Date'];
		echo $Date;

	} ?>"/>

	<input type="Submit" name="submit" value="Back"/>
	</form>

	<!-- CalendarViewwing-->





</div>	<!--CONTATINER-->




</body>


 </html>
