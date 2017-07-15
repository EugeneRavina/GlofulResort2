
   <div class="main">
	<form method='post' action="RoomUpload.php" enctype="multipart/form-data">
    <table class='table full-width' >
        <div class="blue form-title center full-width"><h2>ADDING ROOM</h2></div>
        <tr>
            <td class="label">Room Type</td>
            <td class="center"><input type='text' name='Type' class='textbox width90' placeholder='EX : Family Deluxe Room' required /></td>
        </tr>
		<tr>
			<td class="label">Description</td>
			<td><textarea name='Desc' class='text-area width90' placeholder='EX : Write a Description' required></textarea> </td>
		</tr>
		<tr>
			<td class="label">Features</td>
			<td><textarea name='Features' class='text-area width90' placeholder='EX : Write a Features' required></textarea> </td>
		</tr>
        <tr>
            <td class="label">Price</td>
            <td class="center"><input type='text' name='Price' class='textbox width90' placeholder='EX : 5000.00 ' required></td>
        </tr>
        <tr>
            <td class="label">Capacity</td>
            <td><input type='text' name='Max' class='textbox width90' placeholder='EX : 20' required></td>
        </tr>
         <tr>
            <td class="label">Quantity</td>
            <td><input type='text' name='Quantity' class='textbox width90' placeholder='EX : 99' required></td>
        </tr>
        <tr>
            <td class="label">Image</td>
            <td><input type='file' name='image' ></td>
        </tr>

	<table>
            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
    		    <i class="fa fa-home"></i> Save New Room </button>

</form>
</div>