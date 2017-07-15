<?php
session_start();


require("connection.php");

		$userid=$_SESSION['UserID'] ;


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
 <?php include('../View/CSSLinks.php');?>


    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
	<script>
   $('#main-slider.carousel').carousel({
			interval: 5000
		});
		</script>
</head><!--/head-->

<body>
    <header id="header">
      <?php include('NavTopBar.php');?>
    </header><!--/header-->

 <div class="container">
	 <div class="row">
		 <div class="Cart">
			 <center><img src="../Images/default.png" class="ProfilePic"></center>
			 <?php
			 $sql="Select * From user_tbl WHERE UserID='$userid'";
			 $result=mysql_query($sql);
			 while($row=mysql_fetch_assoc($result)){

			$FName=$row['FName'];
			$LName=$row['LName'];
			$Email=$row['Email'];
			 echo '<div class="Cart-Content">';
			 echo '<p><b>Name: </b>'.$FName.' '.$LName.'</p>';
			 echo '<p><b>Email: </b> '.$Email.'</p>';
			 }
			?>
			<i><h4>Steps for payment</h4></i>
			<b>1.</b> Upload your receipt.<br>
			<b>2.</b> Enter Amount.<br>
			<b>3.</b> Wait for confirmation.
			
 </div>
 </div>
 <div class="MainDiv">
 <table  class="table  table-hover">
  <thead class="thead">
						<tr>
						
						<i><H4>Note: BDO Bank Account No. 00-23456-78901</H4></i>
						
						</tr>
                        <tr>


						   <th> Event </th>
			        	   <th> Date </th>
						   <th> Total Price</th>
						   <th> Downpayment</th>
						   <th> Remaining balance</th>
						   
			        	   <th> Status </th>
			        	   <th>  </th>

						</tr>
 <?php

			$sql1="SELECT * FROM reservedcomplete_tbl where UserID='$userid'";
			$results1=mysql_query($sql1);
			date_default_timezone_set('asia/kuala_lumpur');
						$DatesNow=date("Y-m-d H:i:s");
			
			while($rows=mysql_fetch_assoc($results1)){



						$Tid=$rows['TransactionID'];
						$Dates=$rows['Dates'];
						$Total=$rows['Total'];
						$UserID=$rows['UserID'];
						$Event=$rows['EventName'];
						$Stats=$rows['Status'];
						$RCode=$rows['RCode'];
						$Downpayment=$Total *.20;
						$Balance=$Total-$Downpayment;
						

						echo "<tbody>" ;
						echo "<tr>" ;
						echo "<td> ". $Event ."</td>";
						
						echo "<td> ". $Dates ."</td>";
						echo "<td> ". number_format($Total,2) ."</td>";
						echo "<td> ".number_format($Downpayment,2)."</td>";
						echo "<td> ". number_format($Balance,2)."</td>";

						if($Stats=='Pending'){
							echo "<form method='POST' action='Payment.php' >";
							echo "<input type='hidden' name='Payment' value='".$RCode."'>";
							echo "<td> ". $Stats."</td>";
							echo "<td> <input type='submit' name='submit' value='Payment'></td>";
							echo "</form>";
							echo "<form method='POST' action='Cancel.php' >";
							echo "<input type='hidden' name='Canceled' value='".$RCode."'>";
							echo "<td><input type='submit' name='submit' value='Cancel'></td>";
							echo "</form>";

						}else if($Stats=='Approved'){

							$Dates1=strtotime($Dates);
							$Dates2=strtotime($DatesNow);
							$secs=$Dates1-$Dates2;
							$days =floor($secs)/ (24* 60* 60);
							echo $days;

							if($days<3){
							echo "<td> ". $Stats."</td>";
							echo "<td> <input type='submit' name='submit' value='Reschedule' disabled></td>";

							}else{
							echo "<form method='POST' action='Reschedule.php' >";
							echo "<input type='hidden' name='Resched' value='".$RCode."'>";
							echo "<td> ". $Stats."</td>";
							echo "<td> <input type='submit' name='submit' value='Reschedule'></td>";
							echo "</form>";

								if($days<10)
								{
							
								echo "<td><input type='submit' name='submit' value='Cancel' disabled></td>";
							
								}else 
								{
								echo "<form method='POST' action='Cancel.php'>";
								echo "<input type='hidden' name='Canceled' value='".$RCode."'>";
								echo "<td><input type='submit' name='submit' value='Cancel'></td>";
								echo "</form>";
								}
							}
						}else if($Stats=='Canceled'){


							echo "<td> ". $Stats."</td>";

						}else if($Stats=='PendingResched'){

							echo "<td> ". $Stats."</td>";
							echo "<form method='POST' action='Cancel.php'>";
							echo "<input type='hidden' name='Canceled' value='".$RCode."'>";

							echo "<td><input type='submit' name='submit' value='Cancel'></td>";
							echo "</form>";
						}





			}
			/* $delete="Delete from reservedcomplete_tbl Where DATE(Dates '$Dates') and RCode='$RCode'";
			$resultdelete=mysql_query($delete); */



 ?>
 </thead>
					<br>




					</table>
 </div>
 </div>
 </div>

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
                           <li><a href="FAQS.php">Faq</a></li>
                           <li><a href="ContactUs.php">Contact Us</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </footer><!--/#footer-->


            <a onclick="$('body').animatescroll();"  class="gototop" ><i class="fa fa-angle-up fa-3x"></i></a>

            <?php include('../View/JSLinks.php');?>
</body>
</html>
