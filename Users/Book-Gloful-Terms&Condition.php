
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

      <li class="visited">Choose your Stay</li>

      <li class="visited">Enhance your Stay</li>

      <li class="visited">Additional</li>

      <li class="active">Review & Billing</li>

    </ul>
  </div>

	<div class="Cart">

	<form method="POST" action="Book-Gloful-Step5TnC.php">
    <h2 class="center">Your Selection</h2>
    <div class="container">
	<h3>&nbsp; Select Date <br>
	<?php echo $_SESSION['DateFrom'];
	echo " to ";
	echo $_SESSION['DateTo'];
		 $Days=$_SESSION['Days'];
		 $RCode=$_SESSION['RCode'];
		 $DateFrom=$_SESSION['DateFrom'];
		 $DateTo=$_SESSION['DateTo'];
		if(isset($_POST['submit']))
		{

		$PackageName=$_POST['PckgName'];
		$Desc=$_POST['Desc'];
		$Price=$_POST['Price'];

			if($_POST['Type']=='Other')
			{
			$Type=$_POST['OtherType'];
			}else
			{
			$Type=$_POST['Type'];
			}
		$CelebName=$_POST['CelebName'];
		$Theme=$_POST['Theme'];
		$Motif=$_POST['Motif'];
		$Guest=$_POST['Guest'];
		echo "<br>";
		echo "Package:". $PackageName. "<br>";
		echo "Desc:". $Desc. "<br>";
		if($Type!=NULL){
		echo "Event:". $Type. "<br>";
		//$_SESSION['Type']=$Type;
		}
		if($CelebName!=NULL){
		echo "Name:".$CelebName. "<br>";
		//$_SESSION['CelebName']=$CelebName;
		}
		if($Theme!=NULL){
		echo "Theme:".$Theme. "<br>";
		//$_SESSION['Theme']=$Theme;
		}
		if($Motif!=NULL){
		echo "Motif:".$Motif. "<br>";
		//$_SESSION['Motif']=$Motif;
		}
		echo "Guest:".$Guest. "<br>";
		echo "Price:".number_format($Price,2). "<br>";
		if($Days>=1){
		$DayPrice=$Price*$Days;
		}else {
			$DayPrice=$Price;
		}
		$query="INSERT INTO resortreserved_tbl (Package,Description,EventName,CName,Theme,Motif,Guest,RCode,Price,DateFrom,DateTo) values('$PackageName','$Desc','$Type','$CelebName','$Theme','$Motif','$Guest','$RCode','$DayPrice','$DateFrom','$DateTo')";
		$resulta=mysql_query($query);

		$more1=TRUE;
		$i=1;
		$ii=1;
			while($more1){

			if(isset($_POST['RQuantity'.$i]))
			{

				if($_POST['RQuantity'.$i]!=0)
				{
					echo "<br>";
					/* echo $_POST['Type'.$i];  */
					$Type= $_POST['RType'.$i];
					$Rid= $_POST['Rid'.$i];
					echo $Type;
					echo "<br>";
					$Quantity=$_POST['RQuantity'.$i];
					echo "No. of Rooms: ";
					echo $Quantity;
					echo "<br>";
					$Price=$_POST['RPrice'.$i];
					echo "Price: Php-";
					echo $Price;
					$Max=$_POST['Max'.$i];

					echo "<input type='hidden' name='Type".$ii."' value='".$_POST['RType'.$i]."'>";
					echo "<input type='hidden' name='Rid".$ii."' value='".$_POST['Rid'.$i]."'>";
					echo "<input type='hidden' name='Max".$ii."' value='".$_POST['Max'.$i]."'>";
					echo "<input type='hidden' name='CQuantity".$ii."' value='".$_POST['RQuantity'.$i]."'>";

					$RCode=$_SESSION['RCode'];
					if($Days>1){

					$Total1=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$Total2=$Total1*2;
					$Total=$Total2*$Days;
					}else{
					$Total=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];

					}
					$_SESSION['Total'.$i]=$_POST['RPrice'.$i] * $_POST['RQuantity'.$i];
					$sql="Insert Into reserved_tbl (UserID,Type,Quantity,Price,Capacity,Total,RCode,DateFrom,DateTo)values ('$userid','$Type','$Quantity','$Price','$Max','$Total','$RCode','$DateFrom','$DateTo')";
					$result=mysql_query($sql);
					$_SESSION['RPrice'.$i] = $_POST['RPrice'.$i];
					echo "<input type='hidden' name='RPrice".$i."' value='".$_SESSION['RPrice'.$i]."'>";
					echo "<input type='hidden' name='Total".$i."' value='".$_SESSION['Total'.$i]."'>";
				}
		/* FOR COMPARING GUEST*/

			}
			else
			{
		$more1=FALSE;

			}
			$ii ++;
			$i++;
		}

		}

		?>
		<input type="hidden" name="Type" value="<?php echo $Type;?>">
		<input type="hidden" name="CelebName" value="<?php echo $CelebName;?>">
		<input type="hidden" name="Theme" value="<?php echo $Theme;?>">
		<input type="hidden" name="Motif" value="<?php echo $Motif;?>">
		<input type="hidden" name="Guest" value="<?php echo $Guest;?>">
	</h3>
   <br>

	<br><br><br>
	<br><br><br>
</div>
	</div><!--Customer INFORMATION-->
	<div class="MainDiv">
    <h2 class="center">Terms & Condition</h2><br>
    <div class="container">
	<table class="table table-hover">
	<thead class="thead">

	<tr>
<?php

$select="Select * from terms_tbl";
$result=mysql_query($select);
while($row=mysql_fetch_assoc($result))
{
$Terms=$row['terms'];

echo "<tr>".$Terms ."<br></tr>";

}
	?>



	</tr>
	</thead>

	</table>
  <input type='checkbox' required> Do you Agree ?
		<br>

 <br>
	<input type="Submit" name="submit" class="btn btn-success pull-right" value="NEXT"/>
	</form >
</div>
</div>
</div>
	</div><!-- CalendarViewwing-->
</div>	<!--CONTATINER-->


<?php include('../View/footer.php');?>

</body>


 </html>
