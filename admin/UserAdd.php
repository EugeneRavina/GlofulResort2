<?php

require("../Users/connection.php");
session_start();
?>

   <div class="main">
	 <form method='post' action="UserUpload.php" enctype="multipart/form-data">
    <table class='table full-width' >
        <div class="blue form-title center full-width"><h2>USER ADD</h2></div>
        <tr>
            <td class="label">First Name</td>
            <td ><input type="text" name="fname" class="textbox width90" value="" required></td>
        </tr>
				<tr>
					 <td class="label">Last Name</td>
					 <td><input type="text" name="lname" class="textbox width90" value="" required></td>
			 </tr>

        <tr>
            <td class="label">Email Add</td>
            <td class="center"><input type="email" class="textbox width90" name="email" value="" required=""></td>
        </tr>
         <tr>
            <td class="label">Username</td>
            <td><input type="text" name="user" class="textbox width90" value=""></td>
        </tr>
         <tr>
            <td class="label">Password</td>
            <td><input type="password" name="pass" class="textbox width90" value=""></td>
        </tr>
        <tr>
           <td class="label">Retype Password</td>
           <td><input type="password" name="rpass" class="textbox width90" value=""></td>
       </tr>
       <tr>
          <td class="label">Type of position</td>
          <td><select name="Type"><?php

					$sql="Select * from usertype_tbl";
					$result=mysql_query($sql);

					while($row=mysql_fetch_assoc($result))
					{

						$type=$row['Position'];
						$usertypeid=$row['UserTypeID'];

						echo "<option value='".$usertypeid."'> ".$type."</option>";

					}

					?>
					</select></td>
      </tr>
         <tr>
            <td class="label">Image</td>
            <td><input type='file' name='image' ></td>
        </tr>

					  </table>

            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
    		    <i class="fa fa-home"></i> Save User </button>

</form>
</div>
