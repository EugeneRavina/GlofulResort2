  <?php
session_start();
require("../Users/connection.php");
$userid=$_SESSION['UserID'];
$active = 'UserMaintenance';
$usertype=$_SESSION['UserTypeID'];

			if($userid==NULL)
			{
				echo "<script>alert('Hackers not allowed!!! Thank you');window.location.href='AdminIndex.php'</script>";
			}else{
			$query="SELECT UserLevel from usertype_tbl where UserTypeID='$usertype'";
			$result=mysql_query($query);
			while($rows=mysql_fetch_assoc($result))
			{
				$UserLevel=$rows['UserLevel'];

				if($UserLevel=='TRUE'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gloful Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <?php include('links.php');?>

  </head>
  <body>
  <div class="container">
    <div class="topbar">
   			<?php include('navtop.php');?>
   		</div>
        <?php include('Sidebar.php'); ?>

            <div class="main">
               <form method="POST">

					<br>

					Check the pages that the user can access <br>
					<br>
					 Position : <input type="text" name="Utype" > <br><br>
					 <table color="">
					<p><h2>


				Maintenance

					</h2><br>
					<input type="hidden" name="Ulevel" value="FALSE" >
					<input type="checkbox" name="Ulevel" value="TRUE" > User Level
					<br><br>
					<input type="hidden" name="user" value="FALSE" >
					<input type="checkbox" name="user" value="TRUE"> User
					<br><br>
					<input type="hidden" name="home" value="FALSE" >
					<input type="checkbox" name="home" value="TRUE"> Home
					<br><br>
					<input type="hidden" name="pools" value="FALSE" >
					<input type="checkbox" name="pools" value="TRUE"> Pools
					<br><br>
					<input type="hidden" name="cottages" value="FALSE" >
					<input type="checkbox" name="cottages" value="TRUE"> Cottages
					<br><br>
					<input type="hidden" name="function" value="FALSE" >
					<input type="checkbox" name="function" value="TRUE"> Function Hall
					<br><br>
					<input type="hidden" name="catering" value="FALSE" >
					<input type="checkbox" name="catering" value="TRUE"> Catering
					<br><br>
					<input type="hidden" name="rooms" value="FALSE" >
					<input type="checkbox" name="rooms" value="TRUE"> Rooms
					<br><br>
					<input type="hidden" name="gallery" value="FALSE" >
					<input type="checkbox" name="gallery" value="TRUE"> Gallery
					<br><br>
					<input type="hidden" name="contact" value="FALSE" >
					<input type="checkbox" name="contact" value="TRUE"> Contact Us
					<br><br>
					<input type="hidden" name="faq" value="FALSE" >
					<input type="checkbox" name="faq" value="TRUE"> FAQs
					<br><br>
					<input type="hidden" name="tac" value="FALSE" >
					<input type="checkbox" name="tac" value="TRUE"> Terms and Conditions
					<br><br>


						<p><h2>


					Transaction

					</h2><br>
					<input type="hidden" name="reservation" value="FALSE" >
					<input type="checkbox" name="reservation" value="TRUE"> Reservation
					<br><br>
					<input type="hidden" name="cancellation" value="FALSE" >
					<input type="checkbox" name="cancellation" value="TRUE"> Cancellation
					<br><br>
					<input type="hidden" name="resched" value="FALSE" >
					<input type="checkbox" name="resched" value="TRUE"> Rescheduling
					<br><br>
					<p><h2>

					Monitoring
					</h2><br>
					<input type="hidden" name="pending" value="FALSE" >
					<input type="checkbox" name="pending" value="TRUE"> Pending Request
					<br> <br>
					<input type="hidden" name="register" value="FALSE" >
					<input type="checkbox" name="register" value="TRUE"> Registered Customers
					<br> <br>
					<input type="hidden" name="cottageAvail" value="FALSE" >
					<input type="checkbox" name="cottageAvail" value="TRUE"> Cottage Availability
					<br> <br>
					<input type="hidden" name="roomAvail" value="FALSE" >
					<input type="checkbox" name="roomAvail" value="TRUE"> Room Availability
					<br> <br>
					<input type="hidden" name="FHAvail" value="FALSE" >
					<input type="checkbox" name="FHAvail" value="TRUE"> Function Hall Availability
					<br> <br>

					<p><h2>

					Reports
					</h2><br>


					<input type="hidden" name="reportreservation" value="FALSE" >
					<input type="checkbox" name="reportreservation" value="TRUE"> List of Reservation
					<br><br>
					<input type="hidden" name="reportcancellation" value="FALSE" >
					<input type="checkbox" name="reportcancellation" value="TRUE"> List of Canceled Reservation
					<br><br>
					<input type="hidden" name="reportresched" value="FALSE" >
					<input type="checkbox" name="reportresched" value="TRUE"> List of Rescheduled Reservation
					<br><br>




					<p><h2>

					Utilities
					</h2><br>


					<input type="hidden" name="Auditlog" value="FALSE" >
					<input type="checkbox" name="Auditlog" value="TRUE"> Audit Log
					<br><br>
					<input type="hidden" name="BackAndRec" value="FALSE" >
					<input type="checkbox" name="BackAndRec" value="TRUE"> Backup And Recovery
					<br><br>






					</table>







					<center><input type="submit" name="submit" value="Add User Level"></center>

		</form>
			<?php

			if(isset($_POST['submit'])){
				$UserType=$_POST['Utype'];
				$UserLevel=$_POST['Ulevel'];
				$user=$_POST['user'];
				$home=$_POST['home'];
				$pools=$_POST['pools'];
				$cottages=$_POST['cottages'];
				$function=$_POST['function'];
				$catering=$_POST['catering'];
				$rooms=$_POST['rooms'];
				$gallery=$_POST['gallery'];
				$contact=$_POST['contact'];
				$faq=$_POST['faq'];
				$tac=$_POST['tac'];

				$pending=$_POST['pending'];
				$register=$_POST['register'];
				$cottageAvail=$_POST['cottageAvail'];
				$roomAvail=$_POST['roomAvail'];
				$FHAvail=$_POST['FHAvail'];

				$reportreservation=$_POST['reportreservation'];
				$reportcancellation=$_POST['reportcancellation'];
				$reportresched=$_POST['reportresched'];

				$Auditlog=$_POST['Auditlog'];
				$BackAndRec=$_POST['BackAndRec'];
				$sql="Insert into usertype_tbl (Position, UserLevel, User , Home , Pools , Cottage , FunctionHall , Catering , Rooms  , Gallery , Contact , FAQs , TermAndCondition , PendingReq, Register, CottageAvailability,, RoomAvailability, FHAvailability, Reports,Auditlog,BackupAndRecovery)
						values ('$UserType','$UserType','$user','$home','$pools','$home','$cottages','$function','$catering','$rooms','$gallery','$contact','$faq','$tac','$pending','$register','$cottageAvail','$roomAvail','$FHAvail','$reportresched','$Auditlog','$BackAndRec')";
				$result=mysql_query($sql);



				$Action="Added a user";
				$date=date("Y-m-d");
				$hour=date("H:i");
				$sql1="Insert into auditlog_tbl (UserTypeID,Action,Date,Time,TimeOut) values('$userid','$Action','$date','$hour','----')";
				$result1=mysql_query($sql1);

				echo"<script>alert('You successfully added a user level');</script>";

			}
			?>
 </div>

</div>

</body>

</html>
<?php

	}else{


		echo"<script>alert('You are not allowed to access this page!');window.location.href='adminIndex.php'</script>";
	}
	}
}
?>
