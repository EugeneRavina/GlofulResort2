
<?php
require("../Users/connection.php");
session_start();
$userid=$_SESSION['UserID'] ;
?>

<!DOCTYPE html>
<HTML lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Gloful Resto Grill & Resort</title>

     <!-- core CSS -->
       <?php include('../View/CSSLinks.php');?>

       <?php include('../View/JSLinks.php');?>

    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
</head>

<body>
    <header id="header">
	    <?php include('NavTopBar.php');?>
    </header>
    <?php
   $sql="SELECT * from banner_tbl where ID='8'";
   $result=mysql_query($sql);
   $row=mysql_fetch_assoc($result);
   $image=$row['Image'];
   $title=$row['Title'];
   ?>
       <section id="title" class="wow fadeInDown" style="background-image: url(../Images/Banner/<?php echo $image?>)">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6 animated slideInLeft" >
                       <h1><?php echo $title?></h1>

                   </div>

               </div>
           </div>
       </section><!--/#title-->
<div class="container">
<div class="row">
  <div class="checkout-wrap">
    <ul class="checkout-bar">

        <a href="#"><li class="visited first">Select Date</li></a>

      <li class="active">Choose your Stay</li>

      <li class="next">Enhance your Stay</li>

      <li class="">Additional</li>

      <li class="">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">
	<?php if(isset($_POST['submit'])){

		$DateFrom=$_POST['DateFrom'];
		$DateTo=$_POST['DateTo'];
	} ?>
	<form method="POST" action="Book-Gloful-Step3.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">

	<h3>&nbsp; Date :
	<input type="hidden" name="Date" value=""/>


	<?php

	echo $_SESSION['DateFrom'];
	echo ' to ';
	echo $_SESSION['DateTo'];
		echo '<br>';
	$Days=$_SESSION['Days'];
	echo 'Nights: '.$Days;
	// FOR THE DAY
		 $_SESSION['RCode'];
		?>

	</h3>
   <br>
	<br><br><br>
	<br><br><br>

</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Choose Your Stay</h2><br>
	<table class="table table-hover">
	<thead class="thead">
    <div class="container">
	<tr>
		<th> PACKAGES </th>

		<?php

		$sql="select * from packageresort_tbl";
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result))
		{
		$id=$row['ID'];
		$name=$row['Name'];
		$desc=$row['Description'];
		$price=$row['Price'];
		$pic=$row['Image'];
		$duration=$row['Duration'];
		$path="../Images/Background/".$pic;

		echo "<tr>";
		echo "<td>".'<img src="'.$path.'" width="80" height="80"/>'. "</td>";
		echo "<td>". $name."</td>";
		echo "<td>". $desc."</td>";
		echo "<td> Php: ". Number_format($price,2) ."</td>";
		if($Days>=1)
			{
			if($Days==1)
				{
				if($duration>=1)

					{
					echo "<td><center><a href=Book-Gloful-Step2Package.php?id=$id>Avail</a></center></td>";
					}

				else
					{
					echo "<td><center>Not Available</center></td>";
					}
				}
			else
				{
				if($duration>1)

					{
					echo "<td><center><a href=Book-Gloful-Step2Package.php?id=$id>Avail</a></center></td>";
					}

				else
					{
					echo "<td><center>Not Available</center></td>";
					}
				}


			echo "</tr>";
			}
		else
			{
			if($duration==0)
				{
				echo "<td><center><a href=Book-Gloful-Step2Package.php?id=$id>Avail</a></center></td>";
				}else
				{
				echo "<td><center>Not Available</center></td>";
				}
			echo "</tr>";
			}

		}
		?>


	</tr>
	</thead>

	</table>

	<?php
if($Days>0)
	{
		if($Days==1)
		{
			echo '<table class="table table-hover">
			<thead class="thead">
			<th>SWIMMING </th>';
			$sql="select * from stime where Types='Overnight Swimming'";
			$result=mysql_query($sql);

			while($row=mysql_fetch_assoc($result))
			{
			$ID=$row['STID'];
			$Type=$row['Types'];
			$Time=$row['Time'];
			$Price=$row['Price'];


			echo '<tr>';

			echo '<td><input type="radio" name="Schedule" value="'.$Type.'" required>'.$Type.'</td>';
			echo '<td>'.$Time.'</td>';
			echo '<td> Php '.$Price.'/Per Head</td>';
			echo '</tr>';
			}
			echo '</thead>';
			echo '</table>';

			echo 'No. Guest';
			echo '<input type="number" name="Guest" min="1"  required/>';

		}
	}
else
	{
	echo '<table class="table table-hover center">
	<thead class="thead">
	<th>SWIMMING </th>';
	$sql="select * from stime where Types!='Overnight Swimming'";
	$result=mysql_query($sql);

	while($row=mysql_fetch_assoc($result))
		{
			$ID=$row['STID'];
			$Type=$row['Types'];
			$Time=$row['Time'];
			$Price=$row['Price'];


		echo '<tr>';

		echo '<td><input type="radio" name="Schedule" value="'.$Type.'" required>'.$Type.'</td>';
		echo '<td>'.$Time.'</td>';
		echo '<td> Php '.$Price.'/Per Head</td>';
		echo '</tr>';
		}

		echo '</thead>';
		echo '</table>';

		echo 'No. Guest';
		echo '<input type="number" name="Guest" min="1"  required/>';

	}
	?><br>
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
  <br>
	</form >
</div>
	</div><!-- CalendarViewwing-->
</div>	<!--CONTATINER-->


<?php include('../View/footer.php');?>

</body>


 </html>
