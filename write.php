<?php
require_once 'db_config.php';

if (isset($_POST['name']) && !empty($_POST['name'])) {

	$name = mysql_real_escape_string($_POST['name']);
	$borrowed = mysql_real_escape_string($_POST['borrowed']);
	$grade = mysql_real_escape_string($_POST['grade']);
	$borrowed_name = mysql_real_escape_string($_POST['borrowed_name']);

	$sql = "
		INSERT INTO dvds
			(id, naam, uitgeleend, cijfer, uitgeleend_naam)
			VALUES('','$name', '$borrowed', '$grade', '$borrowed_name')
	";

	if(!$res = mysql_query($sql))
	{
		trigger_error(mysql_error().'<br />In query: '.$sql);
	}
	else
	{
		$id = mysql_insert_id();
		echo "DVD added!";
	}

header("Location: index.php");
die();

} else {

header("Location: index.php?invalidName=True");
exit();
}
?>
