<?php
require_once 'db_config.php';

$id = $_GET['id'];
	if (is_numeric($id)) {
		$order = "DELETE FROM dvds WHERE id='$id'";
		mysql_query($order);
	} else {
		echo "Geen geldig ID";
	}

header("location:index.php");

?>