 <?php
 
require("../Users/connection.php");
 
 session_start();
 $ConfirmationCode=$_GET['code'];
 
 $sql1="UPDATE customer_tbl SET Active='1' where HashCode='$ConfirmationCode'";
 $result1=mysql_query($sql1);
 
 
 
 
		if($result1==TRUE){
			
			$sql="Select * from customer_tbl where HashCode='$ConfirmationCode'";
			$result=mysql_query($sql);
			while($rows=mysql_fetch_assoc($result)){
			$username=$rows['Username'];
			$pass=$rows['Password'];
			$status=$rows['Active'];
			$_SESSION['Active']=$status;
				$query="Select UserID from user_tbl where Username='$username' && Password='$pass'";
				$resulta=mysql_query($query);
				
					while($row=mysql_fetch_assoc($resulta)){
						$userid=$row["UserID"];
						
						$_SESSION['UserID']=$userid;
						
						
						
						
					
						
						header("location:Home.php");
					}
					 // SA LOGIN TO PAUL !!!!! MAKINIG KA !!!! //
				
			}
		}
		
 ?>