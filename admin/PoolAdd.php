

   <div class="main">
	 <form method='POST' action="Pool-Upload.php" enctype="multipart/form-data">
    <table class='table  full-width' >
        <div class="blue form-title center full-width"><h2>ADDING POOL</h2></div>
        <tr>
            <td class="lbl">Name</td>
            <td class="center"><input type='text' name='Type' class='textbox width90' placeholder='EX : Adult Pool' required /></td>
        </tr>
				<tr>
					 <td class="lbl">Description</td>
					 <td><textarea name='Desc' class='text-area width90' placeholder='EX : Write a Description' required></textarea> </td>
			 </tr>

         <tr>
            <td class="lbl">Image</td>
            <td><input type="FILE" name="image"/></td>
        </tr>

					  </table>

            <button type="submit" class="btn btn-info" name="submit">
    		    <i class="fa fa-home"></i> Save Pool </button>




</form>
</div>
