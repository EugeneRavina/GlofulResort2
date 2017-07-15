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

</head><!--/head-->

<body class="homepage">

    <header id="header">
    <?php include('NavTopBar.php');?>
    </header><!--/header-->

    <?php
   $sql="SELECT * from banner_tbl where ID='3'";
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

       $sql="Select * From functionhall_tbl";
       $result=mysql_query($sql);
       while($row=mysql_fetch_assoc($result))
     {
       $id=$row['ID'];
       $title=$row['FType'];
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
             <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Function Hall/<?php echo $image;?>" width="600" height="500">
             <div class="overlay">
                             <div class="about-inner">
                                 <h3><a href="#"><?php echo $title;?></a> </h3>
                                 <p><?php echo $desc;?></p>
                                 <a class="preview" href="../Images/Function Hall/<?php echo $image;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
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
             <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="../Images/Function Hall/<?php echo $image;?>" width="600" height="500" align="">
             <div class="overlay">
                             <div class="about-inner">
                                 <h3><a href="#"><?php echo $title;?></a> </h3>
                                 <p><?php echo $desc;?></p>
                                 <a class="preview" href="../Images/Function Hall/<?php echo $image;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
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
  <a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up fa-3x"></i></a>
      <?php include('footer.php');?>
</body>
</html>
<?php
}
?>
