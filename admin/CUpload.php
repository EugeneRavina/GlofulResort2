<?php
ini_set('mysql.connection_timeout',300);
ini_set('default_socket_timeout',300);

session_start();
require("../Users/connection.php");


 if(isset($_POST["submit"]))
		{
	$package=$_POST['Package'];
	$dishes=$_POST['Dishes'];


	$sql="insert into catering_tbl (Package,Dishes) values('$package','$dishes')";
	  $result=mysql_query($sql);

	echo "<center>";
	echo "<strong>Thank you!</strong> You successfully updated.</p>";
	echo "You'll be redirected to Home Page";
	echo "</center>";
	echo "<meta http-equiv=refresh content=3;url=Catering.php>" ;

}

?>
</body>
</html>
