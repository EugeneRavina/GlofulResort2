<?php
session_start();
require("../Users/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gloful Resto Grill & Resort</title>

	<!-- core CSS -->
      <?php include('CSSLinks.php');?>
    <link rel="shortcut icon" href="../Images/Icons/Gloful2.png">
	<script type="text/javascript" src="./jquery-2.1.3.js.download"></script>
<style type="text/css">
hr {
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #fff;
	margin: 25px 0;
	clear: both;
}
ul.grid-nav {
	list-style: none;
	font-size: .85em;
	font-weight: 200;
	text-align: center;
}
ul.grid-nav li {
	display: inline-block;
}

ul.grid-nav li span {
	display: inline-block;
	background: #999;
	color: #fff;
	padding: 10px 20px;
	text-decoration: none;
	border-radius: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
}
ul.grid-nav li span:hover {
	background: orange;
}
ul.grid-nav li span.active {
	background: #333;
}
.grid-container {
	width: 1000px;
	position:relative;
	min-height:1px;

}
/* ----- Image grids ----- */
ul.rig {
	margin-left: -50px;
}
ul.rig li {
	display: inline-block;
	padding: 10px;
	margin: 0 0 2.5% 0;
	background: #fff;
	border: 1px solid #ddd;
	font-size: 16px;
	font-size: 1.3rem;
	vertical-align: top;
	box-shadow: 0 0 5px #ddd;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
ul.rig li img {
	margin: 0 0 10px;
}
ul.rig li h3 {
	text-align: center;
	margin-top:2px;
}
ul.rig li p {
	font-size: .9em;
	line-height: 1.5em;
	color: #999;
	text-align: center;
	margin-top:2px;
}

/* class for 4 columns */
ul.rig.columns-4 li {
	width: 103.83%; /* this value + 2.5 should = 25% */
}
</style>
<script>
$(window).load(function(){
$(document).ready(function() {
  $('.buttonA').click(function() {
    if ($('#packageA').is(':visible')) { //left
      $('#packageA').hide();
    } else {
      $('#packageB').hide();
	  $('#packageC').hide();
	  $('#packageD').hide();
	  $('#packageE').hide();
	  $('#packageF').hide();
	  $('#packageG').hide();
      $('#packageA').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonB').click(function() { //down
    if ($('#packageB').is(':visible')) {
      $('#packageB').hide();
    } else {
      $('#packageA').hide();
      $('#packageC').hide();
	  $('#packageD').hide();
	  $('#packageE').hide();
	  $('#packageF').hide();
	  $('#packageG').hide();
      $('#packageB').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonC').click(function() { //down
    if ($('#packageC').is(':visible')) {
      $('#packageC').hide();
    } else {
      $('#packageA').hide();
      $('#packageB').hide();
	  $('#packageD').hide();
	  $('#packageE').hide();
	  $('#packageF').hide();
	  $('#packageG').hide();
      $('#packageC').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonE').click(function() { //down
    if ($('#packageE').is(':visible')) {
      $('#packageE').hide();
    } else {
      $('#packageA').hide();
      $('#packageB').hide();
	  $('#packageC').hide();
	  $('#packageD').hide();
	  $('#packageF').hide();
	  $('#packageG').hide();
      $('#packageE').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonF').click(function() { //down
    if ($('#packageF').is(':visible')) {
      $('#packageF').hide();
    } else {
      $('#packageA').hide();
      $('#packageB').hide();
	  $('#packageC').hide();
	  $('#packageD').hide();
	  $('#packageE').hide();
	  $('#packageG').hide();
      $('#packageF').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonG').click(function() { //down
    if ($('#packageG').is(':visible')) {
      $('#packageG').hide();
    } else {
      $('#packageA').hide();
      $('#packageB').hide();
	  $('#packageC').hide();
	  $('#packageD').hide();
	  $('#packageE').hide();
	  $('#packageF').hide();
      $('#packageG').fadeIn();
    }
  });
});

$(document).ready(function() {
  $('.buttonD').click(function() { //right
    if ($('#packageD').is(':visible')) {
      $('#packageD').fadeOut();
      if ($("#packageD").data('lastClicked') !== this) {
        $('#packageD').fadeIn();
      }
    } else {
      $('#packageA').hide();
      $('#packageB').hide();
	  $('#packageC').hide();
	  $('#packageE').hide();
	  $('#packageF').hide();
	  $('#packageG').hide();
      $('#packageD').fadeIn();
    }
    $("#packageD").data('lastClicked', this);
  });
});

$(document).ready(function() {
  $('.button').click(function() {
    $('.button').not(this).removeClass('buttonactive');
    $(this).toggleClass('buttonactive');
  });
});

});
</script>
</head><!--/head-->

<body class="homepage">

    <header id="header">
      <?php include('Navbar.php');?>
      <?php include('Login.php');?>
	</header>

    <?php
   $sql="SELECT * from banner_tbl where ID=7";
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

    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="space"></div>
            <div class="categories">
                <ul class="cat">
                <!---    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <ul class="grid-nav">
								<li><span class = "button buttonA" >All</span></li>
								<li><span class = "button buttonB" >Pools</span></li>
								<li><span class = "button buttonC" >Cottage</span></li>
								<li><span class = "button buttonD" >Rooms</span></li>
								<li><span class = "button buttonE" >Function Hall</span></li>
								<li><span class = "button buttonF" >Catering</span></li>
								<li><span class = "button buttonG" >Events</span></li>
							</ul>
                        </ol>
                    </li>-->
                </ul>
			</div>
			<hr />
		<div id="packageA">
			<?php
					$sql="Select * from images_tbl";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{
							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
		</div>
		<div id="packageB">
			<?php
					$sql="Select * from images_tbl where Gid=1";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{
							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
		<div id="packageC">
			<?php
					$sql="Select * from images_tbl where Gid=2";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{

							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
		<div id="packageD">
			<?php
					$sql="Select * from images_tbl where Gid=3";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{

							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
		<div id="packageE">
			<?php
					$sql="Select * from images_tbl where Gid=4";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{

							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
		<div id="packageF">
			<?php
					$sql="Select * from images_tbl where Gid=5";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{
							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
		<div id="packageG">
			<?php
					$sql="Select * from images_tbl where Gid=6";
					$result=mysql_query($sql);
					while($row=mysql_fetch_assoc($result))
						{
							$id=$row['Id'];
							$Name=$row['Name'];
							$Desc=$row['Description'];
							$image=$row['Image'];
							if(($id%2)==0)
							{
							echo '<div id="All" class="col-md-3 right" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}else{
							echo '<div id="All" class="col-md-3" >';
							echo '<ul class="rig columns-4">';
							echo '<li>';
							echo '<img width="250px" height="200" src="../Images/gallery/'.$image.'" />';
							echo '<h3>'.$Name.'</h3>';
							echo '<p>'.$Desc.'</p>';
							echo '</li>';
							echo '</ul>';
							echo '</div>';
							}
						}
			?>
        </div>
    </div>
	</div>
  <a onclick="$('body').animatescroll();" class="gototop" ><i class="fa fa-angle-up wow fadeInDown fa-3x"></i></a>
  <?php include('footer.php');?>
  <?php include('JSLinks.php');?>
</body>
</html>
