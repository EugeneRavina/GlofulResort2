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
		</header>

    <?php
   $sql="SELECT * from banner_tbl where ID='2'";
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

		$sql="Select * from Cottage_tbl";
		$result=mysql_query($sql);

		while($row=mysql_fetch_assoc($result))
		{
		$Cid=$row['Cid'];
		$Type=$row['CType'];
		$Price=$row['CPrice'];
		$Max=$row['Pax'];
		$Desc=$row['CDescription'];
		$Quantity=$row['Quantity'];
		$pic=$row['CImage'];

		echo '<section class="greywarp">';
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<div class="col-lg-7 centered">';
		echo '<div class="container1">';
		echo '<img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="800ms" src="../Images/Cottage/'.$pic.'" width="600" height="500" align="">';
		echo '<div class="overlay">';
        echo '<div class="about-inner">';
        echo '<h3>'.$Type.'</a> </h3>';
        echo '<p>'.$Desc.'</p><br>';

        echo '<a class="preview" href="../Images/Cottage/'.$pic.'" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>';
        echo '</div> ';
        echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">';
		echo '<h2>'.$Type.'</h2>';
		echo '<p>'.$Desc.'.</p>';
		echo '<p>Price : '.$Price.' Php</p>';
		echo '<p>Capacity : '. $Max.' person</p>';
		echo '<p>Quantity : '.$Quantity.'</p>';
		echo '<p><a class="btn btn-success">Learn More</a></p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<br>';
		echo '<br>';
		echo '</section>';
		}
		?>

  <a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up fa-3x"></i></a>
    <?php include('footer.php');?>
</body>
</html>
<?php
}
?>
