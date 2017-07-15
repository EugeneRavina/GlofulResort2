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
         <ul>
       <li class="dropdown"><a href="#"><i class="ion-ios-person size-18"></i><?php

	   $user="Select Concat(FName ,' ',LName) as FullName from user_tbl where UserID='$userid'";
	   $result=mysql_query($user);
	   $row=mysql_fetch_assoc($result);
	   $username=$row['FullName'];
	   echo " ". $username;

	   ?></a>
         <ul class="dropdown-menu">
             <li>
             <a href="Profile.php">Profile</a>
             </li>
             <li>
             <a href="log-out.php">Logout</a>
             </li>

         </ul>
       </li>
     </ul>
     </div>

                      <ul class="social-share">
                          <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#" class="twit"><i class="fa fa-twitter" ></i></a></li>
            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                          <li><a href="#" class="yahoo"><i class="fa fa-yahoo"></i></a></li>
          <li><a href="FAQS.php">FAQS</a></li>

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
                  <li class="active"><a href="Home.php"><i class="fa fa-home"></i> Home</a></li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Amenities <i class="fa fa-angle-double-down"></i></a>
                      <ul class="dropdown-menu">
                          <li>
                          <a href="Pools.php">Pools</a>
                          </li>
                          <li>
                          <a href="Cottages.php">Cottages</a>
                          </li>
                          <li>
                          <a href="FunctionHall.php">Function Hall</a>
                          </li>
                      </ul>
                  </li>
                  <li><a href="Resto.php"><i class="fa fa-cutlery"></i> Catering</a></li>
                  <li><a href="Rooms.php"><i class="fa fa-building-o"></i> Rooms</a></li>
                  <li><a href="Photos.php"><i class="fa fa-camera-retro"></i> Gallery</a></li>
                  <li><a href="ContactUs.php"><i class="fa fa-comments-o"></i> Contact Us</a></li>
                  <li><a href="Book-Gloful.php" class="BookNow">Book Now</a></li>

              </ul>
          </div>
      </div><!--/.container-->
  </nav><!--/nav-->
