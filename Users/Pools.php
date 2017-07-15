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

	<!-- core CSS -->
    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">

</head><!--/head-->

<body class="homepage">

    <header id="header">
      <?php include('NavTopBar.php');?>
    </header><!--/header-->

    <?php
   $sql="SELECT * from banner_tbl where ID='1'";
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

       <center>
   		<?php

   		$sql="Select * from stime";
   		$result=mysql_query($sql);

   		while($row=mysql_fetch_assoc($result)){
   			$Type=$row['Types'];
   			$Time=$row['Time'];
   			$Price=$row['Price'];

   			echo '<h2>'.$Type.'</h2>';
   			echo '<p>'.$Time .' - '.$Price.' / person</p>';
   		}
   		?>
   		</center>

    <?php

    $sql="select * from pool_tbl";
    $result=mysql_query($sql);
    while($row=mysql_fetch_assoc($result))
    {
      $id=$row['Pid'];
      $name=$row['PName'];
      $desc=$row['PDescription'];

      $pic=$row['PImage'];
      $path="../Images/Pool/".$pic ;


      if(($id%2)==0)

      {
      echo '<section class="greywrap">';
      echo '<div class="container">';
      echo '	<div class="row">';
      echo '	<div class="col-lg-4 wow fadeInDown">';
      echo '			<h2>'.$name.'</h2>';
      echo '			<p>'.$desc.'</p>';
      echo '			<p><a class="btn btn-success">See More</a></p>';
      echo '		</div>	';
      echo '		<div class="col-lg-8 wow fadeInDown">';
      echo '			<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="'.$path.'" width="600" height="500" align="right">';
      echo '		</div>';

      echo '	</div>';
      echo '</div>';
      echo '<br>';
      echo '<br>';
      echo '</section>';

      }else
      {
      echo '<section class="greywarp">';
      echo '<div class="container">';
      echo '	<div class="row">';
      echo '		<div class="col-lg-7 centered">';
      echo '			<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms" src="'.$path.'" width="540" height="500" align="">';
      echo '		</div>';
      echo '		<div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">';
      echo '			<h2>'.$name.'</h2>';
      echo '			<p>'.$desc.'</p>';
      echo '			<p><a class="btn btn-success">See More</a></p>';
      echo '		</div>			';
      echo '	</div>';
      echo '</div>';
      echo '<br>';
      echo '<br>';
      echo '</section>';
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
