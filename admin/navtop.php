<ul class="menu">
      <div class="left">
           <a href="#"><i class="fa fa-bars"></i></a>
          </div>
      <div class="right">
          <li><a href="#" class="info-number"><i class="fa fa-envelope-o"></i>
          <span class="badge notif">4</span>
        </a></li>
        <li class="dropdown"><a href="#">
          <?php
          $sql="Select * from user_tbl where UserTypeID='$usertype'";
          $result=mysql_query($sql);

        $row=mysql_fetch_assoc($result);
            $id=$row['UserID'];
            $Username=$row['Username'];
            $image=$row['UImage'];

              echo '<!--<img class="img-profile" src="../Images/Users/'.$image.'">-->'.$Username.'</a>';
              ?>
              <ul class="dropdown-menu">
              <li><a href="Usertype.php"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="Users.php"><i class="fa fa-gears"></i> Setting</a></li>
              <li><a href="../Users/log-out.php"><i class="icon fa fa-mail-reply"></i> Logout</a></li>
          </ul>
        </li>


      </div>
</ul>
