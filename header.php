<?
require_once 'db_config.php';
require_once 'show.php';
?>

	<div id="header_title" class="grid_6"><a href="./index.php"><h1 class="header">Kevin's DVD Collectie</h1></a></div>
	<div id="header_pages" class="grid_6">
	<form action="index.php" method="get">
	<span class="sort">Aantal resultaten</span>
		<select class="pages" name="nr_results" onchange="this.form.submit()">
		  <option value="10">10</option>
		  <option value="15">15</option>
		  <option value="20">20</option>
		  <option value="25">25</option>
		  <option value="50">50</option>
		</select>
	</form>
	</div>