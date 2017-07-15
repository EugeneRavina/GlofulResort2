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

    </header>

    <?php
  $sql="SELECT * from banner_tbl where ID='4'";
  $result=mysql_query($sql);
  $row=mysql_fetch_assoc($result);
  $image=$row['Image'];
  $title=$row['Title'];
  ?>
      <section id="title" class="wow fadeInDown" style="background-image: url(../Images/Banner/<?php echo $image?>)">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 animated slideInLeft">
                      <h1><?php echo $title?></h1>

                  </div>

              </div>
          </div>
      </section><!--/#title-->

    <section class="section">
			<div class="container">
				<div class="row">
					<?php

						$sql="Select * from catering_tbl";
						$result=mysql_query($sql);

						while($row=mysql_fetch_assoc($result))
						{
							$id=$row['id'];
							$Menu=$row['Package'];
							/*$Dishes=$row['Dishes'];*/
							$image=$row['FoodImage'];
							if(($id%2)==0)
							{/*
							echo '<div class="col-md-5 wow fadeInDown box right">';
							echo '<div class="box-header">'.$Menu.'</div>';
							echo "<div class='box-image'>";
              echo '<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/Foods/'.$image.'" >';
              echo '</div>';
              echo '<div class="box-content">';
              echo '<h5>'.$Dishes.'</h5>';
							echo '<a href="#"class="btn">Order Now </a>';
							echo '</div>';
							echo '</div>';*/

							}else{

							/*echo '<div class="col-md-5 wow fadeInDown box">';
							echo '<div class="box-header">'.$Menu.'</div>';
							echo "<div class='box-image'>";
              echo '<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/Foods/'.$image.'" >';
              echo '</div>';
              echo '<div class="box-content">';
              echo '<h5>'.$Dishes.'</h5>';
              echo '<a href="#"class="btn">Order Now </a>';
              echo '</div>';
              echo '</div>';*/
							}
						}
						?>
				</div><!-- row -->
			</div>
		</section><!-- greywrap -->

        <section class="section">
			<div class="container">
				<div class="row">

				<div class="col-md-5 wow fadeInDown box">
          <div class="box-header">Menu A</div>
          <div class="box-image">
          <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/Foods/f7.jpg" >
        </div>
        <div class="box-content">

						<h5> - Cream of Corn Soup</h5>
						<h5> - Roast Pork</h5>
						<h5> - Chicken Caldereda</h5>
						<h5> - Fish Fillet w/ Tofu</h5>
						<h5> - Chopsuey Guisado</h5>
						<h5> - Plain Rice</h5>
						<h5> - Buko Pandan Salad</h5>

						<a href="#"class="btn">Order Now </a>
					</div>
					</div>

				<div class="col-md-5 wow fadeInDown box right">
          <div class="box-header">Menu A1</div>
          <div class="box-image">
          <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/Foods/f8.jpg" >
        </div>
        <div class="box-content">

						<h5> - Cream of Chicken Mushroom</h5>
						<h5> - Roast Pork</h5>
						<h5> - Chicken Caldereda</h5>
						<h5> - Fish Fillet w/ Tofu</h5>
						<h5> - Chopsuey Guisado</h5>
						<h5> - Plain Rice</h5>
						<h5> - Buko Pandan Salad</h5>

						<a href="#"class="btn">Order Now </a>
					</div>
					</div>

				</div><!-- row -->
			</div>

		</section><!-- greywrap -->

  <a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up wow fadeInDown fa-3x"></i></a>
   <?php include('footer.php');?>
    <?php include('JSLinks.php');?>
</body>
</html>
