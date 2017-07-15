
   <div class="main">
  <form method='POST' action="CUpload.php" enctype="multipart/form-data">
    <table class='table full-width' >
        <div class="blue form-title center full-width"><h2>MENU ADD</h2></div>
        <tr>
            <td class="label">Menu Name</td>
            <td class="center"><input type="text" class='textbox width90' name="Package" placeholder='EX : Name' value=""/></td>
        </tr>
    <tr>
      <td class="label">Dishes</td>
      <td><textarea name='Dishes' class='text-area width90' placeholder='EX : Write a Description' required></textarea> </td>
    </tr>

  <table>
            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
            <i class="fa fa-home"></i> Save Menu </button>

</form>
</div>



		 <?php



 if(isset($_POST["submit"]))
		{


	$package=$_POST['Package'];
	$dishes=$_POST['Dishes'];



	$sql="insert into catering_tbl (Package,Dishes) values('$package','$Dishes')";
	  $result=mysql_query($sql);


	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Catering.php>";




 }













 ?>




			</div>


</body>

</html>
