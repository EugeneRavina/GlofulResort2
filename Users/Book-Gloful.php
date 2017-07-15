<?php
include("../Users/connection.php");
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
    <?php include('../View/CSSLinks.php');?>

    <?php include('../View/JSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
</head>



<body>
    <header id="header">
	    <?php include('NavTopBar.php');?>
    </header>
    <?php
   $sql="SELECT * from banner_tbl where ID='8'";
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


<div class="container">
  <div class="row">
  <div class="checkout-wrap">
    <ul class="checkout-bar">

        <a href="#"><li class="active first">Select Date</li></a>

      <li class=" ">Choose your Stay</li>

      <li class="next">Enhance your Stay</li>

      <li class="">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">
	<form method="POST" action="Book-Gloful-Step2.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">


	<h4 align="left">Select Dates</h4>
  Arrival Date<br>
    <div class=" demo">
  <input type="text" id="datepicker" name="DateFrom"  class="form-control width90" value="<?php  if(isset($_POST['submit'])){

$Date=$_POST['Date'];
echo $Date;
}
 ?>" required/>
 <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
 </div><br><br>

  Departure Date
  <div class=" demo">
  <input type="text" id="datepicker1" name="DateTo" class="form-control width90" value="<?php  if(isset($_POST['submit'])){

$Date=$_POST['Date'];
echo $Date;
}
 ?>" required/>
 <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
 </div><br><br>
<br>
          <i class="center" style="color:#DC3023;"> Note: The reservation day must be 2 weeks before!.</i><br><br>
  <script>
    $( "#datepicker" ).datepicker({
	    dateFormat: 'yy-mm-dd',
      minDate: 0 + 14
    });
  </script>
  <script>
    $( "#datepicker1" ).datepicker({
	    dateFormat: 'yy-mm-dd',
      minDate: 0 + 14
    });
  </script>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv center">
    <h2>Choose Your Reservation</h2><br>

    <div class="container">
  	<div class="row">
    <label id="RadioPic">
    <input type="radio" name="option" value="Resort" />
    <img src="../Images/Background/package.jpg" class=" " width="250" height="250">
  </label>

  <label id="RadioPic">
    <input type="radio" name="option" value="Catering"/>
    <img src="../Images/Restaurant/r1.jpg" class=" " width="250" height="250">
  </label>
  		</div>
      <br>
  		<input type="submit" name="submit" value="Next" class="btn btn-success pull-right">

  		</form>
  	</div>
  </div>

	</div><!-- CalendarViewwing-->
</form>
</div> <!--CONTATINER-->
<?php include('../View/footer.php');?>
</body>


 </html>
