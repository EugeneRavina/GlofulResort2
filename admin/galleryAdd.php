<?php
require("../Users/connection.php");
session_start();
?>

<div class="main">
	<form method='post' action="galleryUpload.php" enctype="multipart/form-data">
		<table class='table full-width' >
			<div class="blue form-title center full-width"><h2>GALLERY ADD</h2></div>
			<tr>
				<td class="label">Name</td>
				<td class="center"><input type='text' name='Name' class='textbox width90' placeholder='EX : Executive' required /></td>
			</tr>
			<tr>
				<td class="label">Description</td>
				<td><textarea name='Desc' class='text-area width90' placeholder='EX : Write a Description' required></textarea> </td>
			</tr>
			<tr>
				<td class="label">Image</td>
				<td><input type='file' name='image' ></td>
			</tr>
			<tr>
				<td class="label">Folder Name</td>
				<td>
					<select name="Type">
					<?php
					$sql="Select * from gallerytype_tbl";
					$result=mysql_query($sql);

					while($row=mysql_fetch_assoc($result)){

						$folderName=$row['FolderName'];
						$Gid=$row['Gid'];
						echo "<option value='".$Gid."'> ".$folderName."</option>";

					}
					?>
						
					</select>
				</td>
			</tr>

		</table>

            <button type="submit" class="btn btn-info" name="submit" id="btn-save">
    		    <i class="fa fa-home"></i> Save Gallery</button>

	</form>
</div>
