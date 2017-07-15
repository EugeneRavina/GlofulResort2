<?php
include('connection.php');



		if(isset($_POST['submit']))
		{
			$RCode=$_POST['RCode'];
			$file_name=$_FILES['image']['name'];
		$file_type=$_FILES['image']['type'];
		$file_size=$_FILES['image']['size'];
		$file_tmp_name=$_FILES['image']['tmp_name'];
		$path="../Images/Receipt/".$file_name ;
		//$amount=$_POST['amount'];
		
		
		
		
			if($file_name)
			{
				move_uploaded_file($file_tmp_name,$path);
				$sql3="Update reservedcomplete_tbl SET ReceiptPicture='$file_name' Where RCode='$RCode'";
				$result3=mysql_query($sql3);	
				
				header('Location:Profile.php');
			}
			
		
			
			
			
		}
		
		
		
		?>