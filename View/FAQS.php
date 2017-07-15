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
        <<?php include('Navbar.php');?>
        <?php include('Login.php');?>
        </header>
		
		

<section id="faqs" class="container">
        <ul class="faq unstyled">
           <?php
		   $sql = "Select * from faq_tbl";
		   $result = mysql_query($sql);
		   
		   while ($rows = mysql_fetch_assoc($result))
		   {
			$question=$rows['question'];
			$answer=$rows['answer'];	

			echo "<li>";
            echo    "<div>";
            echo    "<h4>".$question."</h4>";
            echo    "<p>".$answer."</p>";
            echo"</div>";
            echo "</li>";
		   }
		   
		   
		  
		   ?>
           
        </ul>
    </section><!--#faqs-->

         <a onclick="$('body').animatescroll();"  class="gototop" ><i class="fa fa-angle-up fa-3x"></i></a>
    <?php include('footer.php');?>
    <?php include('JSLinks.php');?>
</body>
</html>
