<?php
session_start();
require("../Users/connection.php");

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
    <?php include('CSSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

</head><!--/head-->

<body class="homepage">

    <header id="header">
      <?php include('Navbar.php');?>
      <?php include('Login.php');?>

    </header><!--/header-->

	<?php
$sql="SELECT * from banner_tbl where ID='5'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$image=$row['Image'];
$title=$row['Title'];
?>
    <section id="title" class="wow fadeInDown" style="background-image: url(../Images/Banner/<?php echo $image?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 animated slideInLeft" >
                    <h1><?php echo $title?></h1>

                </div>

            </div>
        </div>
    </section><!--/#title-->

	<?php

	$sql="Select * from room_tbl";
	$result=mysql_query($sql);

	while($row=mysql_fetch_assoc($result))
	{
		$id=$row['Rid'];
		$type=$row['RType'];
		$desc=$row['RDescription'];
		$capacity=$row['Capacity'];
		$quantity=$row['Quantity'];
		$pic=$row['RImage'];
		$features=$row['Features'];
		$price=$row['Price'];
		$path="../Images/Rooms/".$pic;

		if(($id%2)==0){

		echo '	<section class="greywrap">';
		echo '	<div class="container">';
		echo '		<div class="row">';
		echo '		<div class="col-lg-5 wow fadeInDown">';
		echo '				<h2>'.$type.'</h2>';
		echo '				<p>'.$desc.'<br>'.'</p>';
		echo '				<h2>Features.<br>.</h2>';
		echo $features.'<br>';
		echo '				<p><a class="btn btn-success">Reserve Now</a></p>';
		echo '			</div>';
		echo '			<div class="col-lg-7 wow fadeInDown">';
		echo '				<div class="container1">';
		echo '				<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="'.$path.'" width="600" height="500" align="">';
		echo '			     <div class="overlay">';
        echo '                    <div class="about-inner">';
        echo '                       <h3><a href="#">'.$type.'</a> </h3>';
        echo '                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>';
        echo '                        <a class="preview" href="'.$path.'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>';
        echo '                    </div> ';
        echo '                </div>';
		echo '			</div>';
		echo '			</div>	';
		echo '		</div>';
		echo '	</div>';
		echo '	<br>';
		echo '	<br>';
		echo '</section>';

		}else{

		echo '	<section class="greywarp">';
		echo '	<div class="container">';
		echo '		<div class="row">';
		echo '			<div class="col-lg-7">';
		echo '			     <div class="container1">';
		echo '				    <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="'.$path.'" width="600" height="500" align="">';
		echo '			     <div class="overlay">';
        echo '                    <div class="about-inner">';
        echo '<h3><a href="#">'.$type.'</a> </h3>';
        echo '<p>'.$desc.'</p>';
        echo ' <a class="preview" href="'.$path.'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>';
        echo '                    </div> ';
        echo '                </div>';
		echo '			</div>';
		echo '			</div>';
		echo '			<div class="col-lg-4 wow fadeInDown">';
		echo '				<h2>Family Superior Room </h2>';
		echo '				<p>'.$desc.'</p>';
		echo '				<h2>Features</h2>';
		echo $features.'<br>';
		echo '				<p>Price: '.$price.'<br></p>';
		echo '				<p>Capacity: '.$capacity.' Pax<br></p>';
		echo '				<p>Quantity: '.$quantity.'<br></p>';
		echo '				<p><a class="btn btn-success">Reserve Now</a></p>';
		echo '			</div>';
		echo '		</div>';
		echo '	</div>';
		echo '	<br>';
		echo '	<br>';
		echo '</section>';

		}

	}



	?>

    <!-- greywrap -->


  <a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up  fa-3x"></i></a>
      <?php include('footer.php');?>
       <?php include('JSLinks.php');?>
</body>
</html>
