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

<?php
$title = $_GET["title"];

$grade = $_GET["grade"];

$title = urlencode($title);

$json=file_get_contents("http://www.omdbapi.com/?t=$title");

$details=json_decode($json);
?>

<div id="container" class="container_12">
 <div id="inside" class="grid_12">

<?php
	include './header.php';
	?>

<?php

if($details->Response=='True')
{   
    //Print the movie information
	echo "<div id='title'>$details->Title <span class='score'>($grade)</span></div>";
	echo "<table class='results'>";
	echo "<tr>";
    echo "<td rowspan='9'><img src=\"$details->Poster\"></td>";
    echo "<td class='dvd-info'>IMDB-ID:</td> <td>".$details->imdbID.'</td>';
    echo "<td class='dvd-info'>IMDB rating:</td> <td>".$details->imdbRating.'</td>';
	echo "</tr><tr>";	
    echo "<td class='dvd-info'>Year:</td> <td>".$details->Year.'</td>';
    echo "<td class='dvd-info'>Rated:</td> <td>".$details->Rated.'</td>';
	echo "</tr><tr>";	
    echo "<td class='dvd-info'>Released Date:</td> <td>".$details->Released.'</td>';
    echo "<td class='dvd-info'>Runtime:</td> <td>".$details->Runtime.'</td>';
	echo "</tr><tr>";
    echo "<td class='dvd-info'>Director:</td> <td>".$details->Director.'</td>';
    echo "<td class='dvd-info'>Genre:</td> <td>".$details->Genre.'</td>';
	echo "</tr><tr>";	
	echo "<td class='dvd-info'>Actors:</td> <td colspan='3'>".$details->Actors.'</td>';
	echo "</tr><tr>";
    echo "<td class='dvd-info'>Plot:</td> <td colspan='3'>".$details->Plot.'</td>';
	echo "</tr><tr>";	
    echo "<td class='dvd-info'>Awards:</td> <td colspan='3'>".$details->Awards.'</td>';
	echo "</tr><tr>";
    echo "<td class='dvd-info'>IMDB Votes:</td> <td colspan='3'>".$details->imdbVotes.'</td>';
	echo "</table>";
}
else 
{
     echo "Movie information not available. Please confirm title";
}
?>

<button class="back" onClick="javascript: history.go(-1)">Back</button>

 </div>
</div>
</body>
</html>