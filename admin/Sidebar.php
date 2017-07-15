
<div class="sidebar">
<ul class="menu">
      <li><center><img src="../Images/Icons/Gloful2.png" width="110" height="100" alt="logo"></center></li>

      <li <?php if($active == 'Dashboard'){ ?> class="current" <?php }?>><a href="adminIndex.php"><i class="icon fa fa-home"></i> Dashboard</a></li>

      <li <?php if($active == 'UserMaintenance'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-user"></i>User Maintenance <i class=" icon-right fa fa-angle-down"></i></a>
          <ul>
              <li><a href="Usertype.php"><i class="fa fa-circle-o"></i> User Level</a></li>
              <li><a href="Users.php"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
      </li>

      <li <?php if($active == 'Website'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-cloud"></i> Web Maintenance<i class=" icon-right fa fa-angle-down"></i></a>
          <ul>
              <li><a href="BackEndHome.php"><i class="fa fa-circle-o"></i> Home</a></li>
              <li><a href="Cottages.php"><i class="fa fa-circle-o"></i> Cottages</a></li>
              <li><a href="Pools.php"><i class="fa fa-circle-o"></i> Pools</a></li>
              <li ><a href="FunctionHall.php"><i class="fa fa-circle-o"></i> Function Hall</a></li>
              <li><a href="Catering.php"><i class="fa fa-circle-o"></i> Catering</a></li>
              <li><a href="Room.php"><i class="fa fa-circle-o"></i> Room</a></li>
              <li><a href="Room.php"><i class="fa fa-circle-o"></i> Gallery</a></li>
              <li><a href="Contact.php"><i class="fa fa-circle-o"></i> Contact US</a></li>

          </ul>
      </li>


      <li <?php if($active == 'UserMonitoring'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-television"></i> Users Monitoring <i class=" icon-right fa fa-angle-down"></i></a>
          <ul>
              <li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
              <li><a href="RegisteredUsers.php"><i class="fa fa-circle-o"></i> Registered Users</a></li>
			  <li><a href="PendingReservation.php"><i class="fa fa-circle-o"></i> Pending Reservation</a></li>
			   <li><a href="ConfirmedReservation.php"><i class="fa fa-circle-o"></i> Approved Reservation</a></li>
              <li><a href="ReschedReservation.php"><i class="fa fa-circle-o"></i> Reschedule Reservation</a></li>
              <li><a href="CanceledReservation.php"><i class="fa fa-circle-o"></i> Canceled Reservation</a></li>
          </ul>
      </li>
      <li <?php if($active == 'Availability'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-television"></i> Availability <i class=" icon-right fa fa-angle-down"></i></a>
          <ul>


              <li><a href="CottageAvailability.php"><i class="fa fa-circle-o"></i> Cottage Availability</a></li>
              <li><a href="FHallAvailability.php"><i class="fa fa-circle-o"></i> Function Hall Availability</a></li>
              <li><a href="RoomsAvailability.php"><i class="fa fa-circle-o"></i> Room Availability</a></li>
          </ul>
      </li>

        <li <?php if($active == 'Transaction'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-money"></i>Transactions</a>

		<ul>

              <li><a href="PendingReservationTransaction.php"><i class="fa fa-circle-o"></i> Pending Reservation</a></li>
              <li><a href="CanceledReservation.php"><i class="fa fa-circle-o"></i> Cancel Reservation</a></li>
              <li><a href="PendingReschedTransaction.php"><i class="fa fa-circle-o"></i> Resched Reservation</a></li>
          </ul>


		</li>




      <li <?php if($active == 'Reports'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-paperclip"></i> Reports <i class=" icon-right fa fa-angle-down"></i></a>
          <ul>
              <li><a href="ReportPending.php"><i class="fa fa-circle-o"></i> Pending Reservation</a></li>
              <li><a href="ReportConfirm.php"><i class="fa fa-circle-o"></i> Approved Reservation</a></li>
              
              <li><a href="ReportCancel.php"><i class="fa fa-circle-o"></i> Canceled Reservation</a></li>
              <li><a href="ReportReschedule.php"><i class="fa fa-circle-o"></i> Reschedule Reservation</a></li>
          </ul>
      </li>


      <li <?php if($active == 'Utilities'){ ?> class="current" <?php }?>><a href="#"><i class="icon fa fa-gears"></i>Utilities <i class=" icon-right fa fa-angle-down"></i></a>
          <ul>
            <li><a href="ReportPending.php"><i class="fa fa-circle-o"></i> Pending Reservation</a></li>
            <li><a href="ReportConfirm.php"><i class="fa fa-circle-o"></i> Confirmed Reservation</a></li>

            <li><a href="ReportCancel.php"><i class="fa fa-circle-o"></i> Canceled Reservation</a></li>
          </ul>
      </li>

 </ul>
</div> <!--End of Menu -->
