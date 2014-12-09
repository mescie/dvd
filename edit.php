<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="23g.nl">
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

	<?php
	require_once 'db_config.php';

	if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
		$id = $_GET['id'];
		$result = mysql_query("SELECT * FROM dvds WHERE id=$id")
		or die (mysql_error());
		$row = mysql_fetch_array($result);

		if($row)
		{
		$name = $row['naam'];
		$borrowed = $row['uitgeleend'];
		$grade = $row['cijfer'];
		$borrowed_name = $row['uitgeleend_naam'];
		}
		else
	{
	echo "Geen resultaten!";
	exit();
	}
	}
	?>

	<div id="show-results">
	<h2 class="heading">Edit: <?php echo $name; ?></h2>
		<div id="form" class="grid_8">
			<form action="" method="post">
			 <input type="hidden" name="id" value="<?php echo $id; ?>"/>			
				<div class="form_row">
				  <label>Naam:</label> 
				  <div class="textholder">
				  <input type="text" name="name" value="<?php echo $name; ?>"><br/>
				</div>
				</div>
				
				<div class="form_row">
				  <label>Uitgeleend</label>
				<div class="textholder">
				<select name="borrowed">
				  <option <?php echo ($row['uitgeleend'] == '0')?"selected":"" ?> value="0">Nee</option>
				  <option <?php echo ($row['uitgeleend'] == '1')?"selected":"" ?> value="1">Ja</option>
				</select>
				</div>
				</div>
				
				<div class="form_row">
				  <label>Cijfer</label>
				<div class="textholder">
				<select name="grade">
				  <option <?php echo ($row['cijfer'] == '1')?"selected":"" ?>>1</option>
				  <option <?php echo ($row['cijfer'] == '2')?"selected":"" ?>>2</option>
				  <option <?php echo ($row['cijfer'] == '3')?"selected":"" ?>>3</option>
				  <option <?php echo ($row['cijfer'] == '4')?"selected":"" ?>>4</option>
				  <option <?php echo ($row['cijfer'] == '5')?"selected":"" ?>>5</option>
				  <option <?php echo ($row['cijfer'] == '6')?"selected":"" ?>>6</option>
				  <option <?php echo ($row['cijfer'] == '7')?"selected":"" ?>>7</option>
				  <option <?php echo ($row['cijfer'] == '8')?"selected":"" ?>>8</option>
				  <option <?php echo ($row['cijfer'] == '9')?"selected":"" ?>>9</option>
				  <option <?php echo ($row['cijfer'] == '10')?"selected":"" ?>>10</option>
				</select>
				</div>
				</div>
				
				<div class="form_row">
				  <label>Uitgeleend aan:</label> 
				  <div class="textholder">
					<input type="text" name="borrowed_name" value="<?php echo $borrowed_name; ?>"><br/>
				</div>
				</div>
				<input type="submit" value="submit" name="submit">
			</form>
		</div>
	</div>

	<?php
	if (isset($_POST['submit']))
	  {
		$name = mysql_real_escape_string($_POST['name']);
		$borrowed = mysql_real_escape_string($_POST['borrowed']);
		$grade = mysql_real_escape_string($_POST['grade']);
		$borrowed_name = mysql_real_escape_string($_POST['borrowed_name']);

	mysql_query ("UPDATE dvds SET naam='$name', uitgeleend='$borrowed', cijfer='$grade', uitgeleend_naam='$borrowed_name' WHERE id='$id'")

		or die(mysql_error());
		header('Location: index.php');
		}

	?>

</div>

</body>
</html>