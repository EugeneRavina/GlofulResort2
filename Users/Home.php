<?php
session_start();

require("../Users/connection.php");
include('../View/CSSLinks.php');
include('../View/JSLinks.php');

$usertypeid=$_SESSION['UserTypeID'];
$userid=$_SESSION['UserID'] ;
$id= $_SESSION['CustID'];
      echo $id;

  $status= $_SESSION['Active'];

if($status==0){

	echo "<script>alert('Your email is not yet verified');window.location.href='NotConfirm.php'</script>";

}else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gloful Resto Grill & Resort</title>

  <!--CSS -->
    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
    <script type='text/javascript'>
          function generate(type, text) {

              var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'bottomRight',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated slideInRight',
                    close : 'animated slideOutRight',
                    easing: 'swing',
                    speed : 500
                  }
              });
              console.log('html: ' + n.options.id);
          }

          function generateSuccess() {
              generate('success', notification_html[3]);
          }

          $(document).ready(function () {

              setTimeout(function() {
                  generateSuccess();
              }, 500);

          });

      </script>
</head><!--/head-->

<body>
    <header id="header">
      <?php include('NavTopBar.php');?>

    </header><!--/header-->

    <section id="main-slider" class="no-margin">
      <div class="carousel slide">

			<div class="carousel-inner">
			<?php

			$sql="SELECT * From imageslider_tbl";
			$result=mysql_query($sql);
			while($row=mysql_fetch_assoc($result)){
			$id=$row['ImageID'];
			$image=$row['Image'];
			$title=$row['Title'];
			$desc=$row['Description'];

			if(($id%2)==0)
				{ ?>
				<div class="item" style="background-image: url(../Images/Home/<?php echo $image; ?>)">
            <div class="container">
              <div class="row slide-margin">
                <div class="col-sm-6">
                  <div class="carousel-content">
				            <h1 class="animation animated-item-1"><?php echo $title; ?></h1>
                    <h2 class="animation animated-item-2"><?php echo $desc; ?></h2>
                  </div>
                </div>
			       </div>
             </div>
        </div><!--/.item-->

       <?php
				}else
				{?>

				<div class="item active" style="background-image: url(../Images/Home/<?php echo $image; ?>)">
             <div class="container">
               <div class="row slide-margin">
                 <div class="col-sm-12">
                   <div class="carousel-content center centered">
                      <h1 class="animation animated-item-1"><?php echo $title; ?></h1>
                       <h2 class="animation animated-item-2"><?php echo $desc ?></h2>
				       					  <a href="#feature" class="btn btn-circle page-scroll">
                             <i class="fa fa-angle-double-down animated"></i>
                          </a>
                    </div>
                  </div>
               </div>
              </div>
        </div> <!--/.item-->
      <?php
				}
			}
			?>
            </div> <!--/.carousel-inner-->

			<ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
        </div> <!--/.carousel-->

        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>

	<!--/#main-slider-->
	<section class="greywrap">
			<div class="container">
			<div class="center wow fadeInDown">
                <h2>The Ideal Alternative</h2>
                <p class="lead">NAKS! SARAP! - EAT ALL YOU CAN and GLOFUL RESORT</p>
            </div>
				<div class="row">
					<div class="col-lg-7 centered">
						<img class="img-responsive wow fadeInDown preview" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/Ideal.jpg" width="600" height="500" rel="prettyPhoto">
					</div>
					<div class="col-lg-4 wow fadeInDown">
						<h2>Gloful Resto & Grill Resort </h2>
						<p>All in one place is strategically located in huge business and commercial hubs in NOVALICHES. It is along Quirino Highway, Mindanao Avenue
						which links to North Expressway. The two functional dining restaurant have distinctive services, which doubly the fur for an experiental
						festive choice: EAT ALL YOU CAN Restaurant, SWIMMING PARTY place . The Ideal alternative for both business and social gatherings</p>
						<p><a class="btn btn-success">See More</a></p>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</section><!-- greywrap -->
	<!--#feature-->
	 <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>A TRIPLE DELIGHT PARTY EXPERIENCE</h2>
                <p class="lead">The Best All in One Place </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="../Images/Icons/Naks.png" width="120" height="120" alt="logo">
                            <h2>Naks Sarap</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                        <div class="feature-wrap">
                             <img src="../Images/Icons/Gloful2.png" width="120" height="120" alt="logo">
                            <h2>Gloful Resort</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <div class="feature-wrap">
                             <img src="../Images/Icons/Naks.png" width="120" height="120" alt="logo">
                            <h2>Gloful Apartelle</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#feature-->

    <section class="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 centered">
					<div class="container1">
						<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Pool/p1.jpg" width="600" height="500" align="">
						<div class="overlay">
                            <div class="about-inner">
                                <h3><a href="#">Gloful Resto & Grill Resort</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="../Images/Pool/p1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
					</div>
					</div>
					<div class="col-lg-4 wow fadeInDown">
						<h2>Gloful Resto & Grill Resort </h2>
						<p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
						<p><a class="btn btn-success">See More</a></p>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</section><!-- greywrap -->

        <section class="greywrap">
			<div class="container">
				<div class="row">
				<div class="col-lg-6 wow fadeInDown">
						<h2>Naks Sarap!<br>Eat All-You-Can Restaurant </h2>
						<p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
						<p><a class="btn btn-success">See More</a></p>
					</div>
					<div class="col-lg-6">
					     <div class="container1">
						<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Restaurant/r1.jpg" width="600" height="500" align="">
						<div class="overlay">
                            <div class="about-inner">
                                <h3><a href="#">Naks Sarap!<br>Eat All-You-Can Restaurant </a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="../Images/Restaurant/r1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
						</div>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</section><!-- greywrap -->

		<section class="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 centered">
					    <div class="container1">
						<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Background/h1.jpg" width="600" height="500" align="">
					    <div class="overlay">
                            <div class="about-inner">
                                <h3><a href="#">Gloful Apartelle</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="../Images/Background/h1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div>
                        </div>
					 </div>
					</div>
					<div class="col-lg-4 wow fadeInDown">
						<h2>Gloful Apartelle</h2>
						<p>Do you want to be one of use? Sure you want, because we are an awesome team!. Here we work hard every day to craft pixel perfect sites.</p>
						<p><a class="btn btn-success">See More</a></p>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</section><!-- greywrap -->

    <footer class="footer">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6">
                       &copy; 2016 <a target="_blank" href="http://GlofulRestoGrill&Resort/">Gloful Resto Grill & Resort</a>.  All Rights Reserved.
                   </div>
                   <div class="col-sm-6">
                       <ul class="pull-right">
                           <li><a href="#">Home</a></li>
                           <li><a href="#">Terms & Condition</a></li>
                           <li><a href="View/FAQS.php">Faq</a></li>
                           <li><a href="View/ContactUs.php">Contact Us</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </footer><!--/#footer-->
            <a onclick="$('body').animatescroll();"  class="gototop" ><i class="fa fa-angle-up fa-3x"></i></a>
</body>
</html>

<?php

}
?>
