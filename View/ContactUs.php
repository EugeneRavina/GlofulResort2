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
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
		</script>
</head><!--/head-->

<body>
    <header id="header">
      <?php include('Navbar.php');?>
      <?php include('Login.php');?>
    </header><!--/header-->

    <?php
   $sql="SELECT * from banner_tbl where ID='6'";
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
	<!--/#main-slider-->
	<!--/#get-in-touch-->


    <section id="contact" >
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:450px;width:720px;'><div id='gmap_canvas' style='height:450px;width:720px;'></div><div><small><a href="http://embedgooglemaps.com">Embed your Google Map here!</a></small></div><div><small><a href="https://top10geeks.com/top-10-best-running-shoes-men-2016/">With top10geeks.com, you can read everything about the best running shoes for men for the year 2016. We give insights in what is the best shoe to buy, by looking at it's qualities and value for money. However, it is important that you always try the shoe for yourself: you might have different preferences than what we are recommending. With our tips of the best running shoes for men, you cannot go wrong!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(14.689789025154697,121.02761605159004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.689789025154697,121.02761605159004)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>542 Quirino Highway, Talipapa, Novaliches Quezon City, Philippines<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        <div id="google-map" style="height:540px" data-latitude="52.365629" data-longitude="4.871331"></div>

		<div class="container-wrapper">

            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>
<?php
$sql="SELECT * from contact_tbl";
$result=mysql_query($sql);

while($row=mysql_fetch_assoc($result)){
	$address=$row['Address'];
	$number=$row['Number'];

}

?>
                            <address>
                              <strong>Address </strong><br>
                              <?php echo $address;?><br>

                              <abbr class="fa fa-phone-square"> Contact no/s : </abbr><?php echo $number;?>
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" >
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                            </form>

							<?php

							if(isset($_POST['submit'])){

								$Name=$_POST['name'];
								$Email=$_POST['email'];
								$Subject=$_POST['subject'];
								$Message=$_POST['message'];

								$sql="Insert into comment (Name,Email,Subject,Content) values ('$Name','$Email','$Subject','$Message')";
								$result=mysql_query($sql);
							}


							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php include('footer.php');?>
  <?php include('JSLinks.php');?>
</body>
</html>
