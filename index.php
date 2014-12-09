<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>DVD Collectie</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<link href="./css/960_12_col.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="container" class="container_12">

<?php
	include './header.php';
	?>
	
   <div id="slider" class="owl-carousel owl-theme">
     
    <div class="item"><img src="images/fullimage1.jpg" alt="Her"></div>
    <div class="item"><img src="images/fullimage2.jpg" alt="Band of Brothers"></div>
    <div class="item"><img src="images/fullimage3.jpg" alt="Interstellar"></div>
     
   </div>

<div id="show-results" class="grid_12">
	 <?php
	 include './show.php';
	 ?>
</div>

<div id="button-dvd" class="button dvd" onclick="showDiv()" class="add"><a href="#form" class="button">+Add DVD</a></div>
	<div id="form" class="grid_8" style="display: none;">
	<h2 class="heading">Add DVD</h2>
		<form action="write.php" method="post">
			
			<div class="form_row grid_6">
			  <label>Naam:</label> 
			  <div class="textholder">
			   <input type="text" name="name" value="<?php if (!empty ($_GET["invalidName"])) echo 'Vul een geldige naam in!'; ?>"><br/>
			  </div>
			</div>
			
			<div class="form_row grid_6">
			  <label>Uitgeleend</label>
			  <div class="textholder">
			  <select name="borrowed">
			    <option value="0">Nee</option>
			    <option value="1">Ja</option>
			  </select>
			  </div>
			</div>
			
			<div class="form_row grid_6">
			 <label>Uitgeleend aan</label>
			 <div id="textholder" class="textholder">
			   <input type="text" name="borrowed_name" value="">
			  </div>
			</div>
			
			<div class="form_row grid_6">
			  <label>Cijfer</label>
			  <div class="textholder">
			  <select name="grade">
			   <option value="1">1</option>
			   <option value="2">2</option>
			   <option value="3">3</option>
			   <option value="4">4</option>
			   <option value="5">5</option>
			   <option value="6">6</option>
			   <option value="7">7</option>
			   <option value="8">8</option>
			   <option value="9">9</option>
			   <option value="10">10</option>
			  </select>
			  </div>
			
			</div>
			<div class="grid_6"><input type="submit" value="submit" name="submit"></div>
		</form>
	</div>

<div id="error" class="grid_12">
</div>

 </div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="./js/general.js"></script>
</body>
</html> 