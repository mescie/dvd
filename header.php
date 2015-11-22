<?
require_once 'db_config.php';
?>

<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>DVD Collectie</title>
    <link href="./css/owl.css" rel="stylesheet" type="text/css">
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="container">
    <div id="header_title" class="col-lg-12"><a href="./index.php"><h1 class="header">Kevin's DVD Collectie</h1></a>
    </div>
    <div id="header_pages" class="col-lg-12">
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