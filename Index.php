<?php
session_start();
require("Users/connection.php");

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

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/ionicons/css/ionicons.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/buttons.css" rel="stylesheet">

    <link rel="shortcut icon" href="Images/Icons/Gloful2.png">
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
		</script>
</head><!--/head-->

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
             <div class="account">
             <a href="#Login"><i class="ion-ios-person size-18"></i> Login</a>
             <a href="#SignUp"><i class="fa fa-sign-in"></i> Register</a> </div>
                            <ul class="social-share">
                                <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twit"><i class="fa fa-twitter" ></i></a></li>
                  <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                <li><a href="#" class="yahoo"><i class="fa fa-yahoo"></i></a></li>
                <li><a href="View/FAQS.php">FAQS</a></li>

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
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="Images/Icons/Gloful2.png" width="90" height="80" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

              <li class="hidden">
                           <a href="#page-top"></a>
                        </li>

                        <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Amenities <i class="fa fa-angle-double-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                <a href="View/Pools.php">Pools</a>
                                </li>
                                <li>
                                <a href="View/Cottages.php">Cottages</a>
                                </li>
                                <li>
                                <a href="View/FunctionHall.php">Function Hall</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="View/Resto.php"><i class="fa fa-cutlery"></i> Catering</a></li>
                        <li><a href="View/Rooms.php"><i class="fa fa-building-o"></i> Rooms</a></li>
                        <li><a href="View/Photos.php"><i class="fa fa-camera-retro"></i> Gallery</a></li>
                        <li><a href="View/ContactUs.php"><i class="fa fa-comments-o"></i> Contact Us</a></li>
                        <li><a href="View/Book.php" class="BookNow">Book Now</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

        <!--Modal Login-->
            <div id="Login" class="modalLogin">
                  <div>
            <form method="post" action="Users/checklogin.php">
                   <a href="#close" title="Close" class="close">X</a>
                   <div class="login"> Login </div>
               <div class="logincon">
               <div class="Logo"><i class="ion-ios-person size-96"></i></div>
                       <p class="fieldset">
                     <label class="label"><i class="ion-ios-person-outline size-32"></i></label>
             <input type="text" name="username" maxlength="30" class="textbox full-width"  required placeholder="Username">
                     </p>
                     <p class="fieldset">
                     <label class="label"><i class="ion-ios-locked-outline size-32"></i></label>
             <input type="password" name="password" maxlength="30"  class="textbox full-width"  required placeholder="Password"><br>
                     </p>
                   <input type="submit" name="submit" value="Log In" class="button"><br>
               <a href="#" id="label">Forgot your password?</a>      <a href="#SignUp" id="label">Register Now</a>

                </div>
              </form>
                  </div>
                </div>
        <!--/Modal Login-->

        <!--Modal SignUp-->
            <div id="SignUp" class="modalLogin">
                  <div class="SignUp">
                    <form method="post" action="Users/Confirm.php">
                   <a href="#close" title="Close" class="close">X</a>
                   <div class="login"> Sign Up </div>
               <div class="logincon">
              <p class="fieldset">
                     <input type="text" name="firstname" maxlength="30" class="textbox half-width" tabindex="1" required placeholder="First Name">
                     <input type="text" name="lastname" maxlength="30"  class="textbox half-width right" tabindex="2" required placeholder="Last Name">
                     </p>
                     <p class="fieldset">

                     <input type="text" name="email" maxlength="30"  class="textbox full-width" tabindex="3" required placeholder="Email">
                     </p>
                     <p class="fieldset">
                     <input type="text" name="username" maxlength="30"  class="textbox full-width" tabindex="4" required placeholder="UserName">
                     </p>
                     <p class="fieldset">
                     <input type="password" name="password" maxlength="30"  class="textbox full-width" tabindex="5" required placeholder="Password">
                     </p>
                      <p class="fieldset">
                     <input type="password" name="password2" maxlength="30"  class="textbox full-width" tabindex="6" required placeholder="Re-type password">
                     </p>
                   <input type="submit" name="Register" value="Create account" class="button" tabindex="7">

                  </div>
                        </form>
                  </div>
                </div>
        <!--/Modal SignUp-->
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
				<div class="item" style="background-image: url(Images/Home/<?php echo $image; ?>)">
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

				<div class="item active" style="background-image: url(Images/Home/<?php echo $image; ?>)">
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

    <?php
    $sql="SELECT * from flyers";
    $result=mysql_query($sql);
    $row=mysql_fetch_assoc($result);
    $title=$row['FTitle'];
    $Sub=$row['FSubTitle'];
    $Header=$row['FHeader'];
    $Desc=$row['FDesc'];
    $image=$row['FPic'];

    ?>

	<!--/#main-slider-->
	<section class="greywrap">
			<div class="container">
			<div class="center wow fadeInDown">
                <h2><?php echo $title; ?></h2>
                <p class="lead"><?php echo $Sub; ?></p>
            </div>
				<div class="row">
					<div class="col-lg-7 centered">
						<img class="img-responsive wow fadeInDown preview" data-wow-duration="1000ms" data-wow-delay="600ms" src="Images/Restaurant/<?php echo $image; ?>" width="600" height="500" rel="prettyPhoto">
					</div>
					<div class="col-lg-4 wow fadeInDown">
						<h2><?php echo $Header; ?></h2>
						<p><?php echo $Desc; ?></p>

					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</section><!-- greywrap -->

    <!--#feature-->
  	 <section id="feature">
          <div class="container">
             <div class="center wow fadeInDown">
                  <h2>A TRIPLE DELIGHT PARTY EXPERIENCE</h2>
                  <p class="lead">The Best All in One Place </p>
              </div>
  			<div class="row">

  			<?php

  			$sql="Select * From logo_tbl";
  			$result=mysql_query($sql);
  			while($row=mysql_fetch_assoc($result)){
  			$id=$row['LogID'];
  			$title=$row['Name'];
  			$desc=$row['Description'];
  			$image=$row['Image'];
  			?>

                  <div class="features">
                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                          <div class="feature-wrap">
                              <img src="Images/Icons/<?php echo $image; ?>" width="120" height="120" alt="logo">
                              <h2><?php echo $title; ?></h2>
                              <h3><?php echo $desc; ?></h3>
                          </div>
                      </div><!--/.col-md-4-->
  				<?php
  			}
  				?>
                      <!--/.col-md-4-->
                  </div><!--/.col-md-4-->
              </div><!--/.services-->
  			</div><!--/.row-->
          </div><!--/.container-->
      </section><!--/#feature-->



  			<?php

  			$sql="Select * From amenities_tbl";
  			$result=mysql_query($sql);
  			while($row=mysql_fetch_assoc($result))
  		{
  			$id=$row['ID'];
  			$title=$row['Title'];
  			$desc=$row['Description'];
  			$image=$row['Image'];

  			if(($id%2)==0){

  			?>

          <section class="greywrap">
  			<div class="container">
  				<div class="row">
  				<div class="col-lg-6 wow fadeInDown">
  						<h2><?php echo $title;?></h2>
  						<p><?php echo $desc;?></p>
  						<p><a class="btn btn-success">Reserve Now</a></p>
  					</div>
  					<div class="col-lg-6">
  					     <div class="container1">
  						<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="Images/Home/<?php echo $image;?>" width="600" height="500" align="">
  						<div class="overlay">
                              <div class="about-inner">
                                  <h3><a href="#"><?php echo $title;?></a> </h3>
                                  <p><?php echo $desc;?></p>
                                  <a class="preview" href="Images/Home/<?php echo $image;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                              </div>
                          </div>
  						</div>
  					</div>

  				</div><!-- row -->
  			</div>
  			<br>
  			<br>
  		</section><!-- greywrap -->

  		<?php
  			}else{

  		?>
  	<section class="greywarp">

  			<div class="container">
  				<div class="row">
  					<div class="col-lg-7 centered">
  					<div class="container1">
  						<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="Images/Home/<?php echo $image;?>" width="600" height="500" align="">
  						<div class="overlay">
                              <div class="about-inner">
                                  <h3><a href="#"><?php echo $title;?></a> </h3>
                                  <p><?php echo $desc;?></p>
                                  <a class="preview" href="Images/Home/<?php echo $image;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                              </div>
                          </div>
  					</div>
  					</div>
  					<div class="col-lg-4 wow fadeInDown">
  						<h2><?php echo $title;?> </h2>
  						<p><?php echo $desc;?></p>
  						<p><a class="btn btn-success">Reserve Now</a></p>
  					</div>
  				</div><!-- row -->
  			</div>
  			<br>
  			<br>
  		</section><!-- greywrap -->

  		<?php
  			}
  		}
  		?>
      <div class="container">

       <div id="customContainer"></div>

   </div>
      <script type="text/javascript">


             function generate(type, text) {

                 var n = noty({
                     text        : text,
                     type        : type,
                     dismissQueue: true,
                     layout      : 'topLeft',
                     closeWith   : ['click'],
                     theme       : 'relax',
                     maxVisible  : 10,
                     animation   : {
                         open  : 'animated bounceInLeft',
                         close : 'animated bounceOutLeft',
                         easing: 'swing',
                         speed : 500
                     }
                 });
                 console.log('html: ' + n.options.id);
             }

             function generateAll() {
                 generate('warning', notification_html[0]);
                 generate('error', notification_html[1]);
                 generate('information', notification_html[2]);
                 generate('success', notification_html[3]);
     //            generate('notification');
     //            generate('success');
             }

             $(document).ready(function () {

                 setTimeout(function() {
                     generateAll();
                 }, 500);

             });

         </script>
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

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/animatescroll.js"></script>
            <!--<script type="text/javascript" src="js/SmoothScroll.js"></script>-->
            <script src="js/jquery.prettyPhoto.js"></script>
            <script src="js/jquery.isotope.min.js"></script>
            <script src="js/main.js"></script>
            <script src="js/wow.min.js"></script>
            <script type="text/javascript" src="js/jquery.noty.packaged.js"></script>
            <script type="text/javascript" src="js/notification_html.js"></script>

</body>
</html>
