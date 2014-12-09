<?php
require_once 'db_config.php';

//haal huidig paginanummer op
$pagenr=(isset($_GET['page']))?$_GET['page']:1;;

//max aantal resultaten
if (isset($_GET['nr_results'])) {
	$resmax=$_GET['nr_results'];}
	else
	{
	$resmax = 25;}

?>

<table>
<tr class="top">
<th><a href="<?php echo $_SERVER['PHP_SELF'] . "?sort=0&page=" . $pagenr . "&nr_results=" . $resmax;?>">^</a></th>
<th><a href="<?php echo $_SERVER['PHP_SELF'] . "?sort=2&page=" . $pagenr . "&nr_results=" . $resmax;?>">^</a></th>
<th><a href="<?php echo $_SERVER['PHP_SELF'] . "?sort=1&page=" . $pagenr . "&nr_results=" . $resmax;?>">Naam</a></th>
<th class="cijfer"><a href="<?php echo $_SERVER['PHP_SELF'] . "?sort=3&page=" . $pagenr . "&nr_results=" . $resmax;?>">Cijfer</a></th>
<th class='uitgeleend'><a href="<?php echo $_SERVER['PHP_SELF'] . "?sort=4&page=" . $pagenr . "&nr_results=" . $resmax;?>">Uitgeleend aan</a></th>
<th></th>
<th></th>
</tr>

<?php

//haal aantal resultaten op
$sql = "SELECT COUNT(*) AS num FROM dvds";
$ros=mysql_query($sql) or die(mysql_error());
$row=mysql_fetch_array($ros);
$counterRes = $row['num'];



//eerste getal results voor database
$curpage = ($pagenr-1)*$resmax;

$resmaxx = " LIMIT $curpage,$resmax";

//aantal paginas
$total_pages = ceil($counterRes/$resmax);

//sorteren van de data
        $sort = "";
        if(isset($_GET['sort'])) {
            switch ($_GET['sort'] ) {
            case 0: 
                        $sort = " ORDER BY id ASC"; 
                        break;
            case 1: 
                        $sort = " ORDER BY naam ASC"; 
                        break;
            case 2: 
                        $sort = " ORDER BY uitgeleend DESC"; 
                        break;
            case 3: 
                        $sort = " ORDER BY cijfer DESC"; 
                        break;
            case 4: 
                        $sort = " ORDER BY uitgeleend_naam ASC"; 
                        break;
            }
        }

//weergeven van de data
$sql = "SELECT * FROM dvds";

if(!$res = mysql_query($sql . $sort . $resmaxx))
{
    trigger_error(mysql_error().'<br />In query: '.$sql);
}
else
{
    while($row = mysql_fetch_assoc($res))
    {
		echo "<tr>";
		echo "<td style='background-color:#fff;'><div id='dvd-id'>" . $row['id'] . "</div></td>";
		if( $row['uitgeleend'] == 1) 
		{ 
		echo '<td class="aanwezig"><center><div class="red"></div></center></td>';
		} else { 
		echo '<td class="aanwezig"><center><div class="green"></div></center></td>';
		}
		echo "<td>";
		echo '<a href="imdb.php?title='.$row['naam'].'&grade='.$row['cijfer'].'">'.$row['naam'].'</a>';
		echo "</td>";
		echo "<td class='cijfer'><span class='cijfer'>" . $row['cijfer'] . "</span></td>";
		echo "<td class='uitgeleend'>" . $row['uitgeleend_naam'] . "</td>";
		echo '<td class="edit">';
		echo '<div class="button edit"><a href="edit.php?id='.$row['id'].'" class="button edit"><span class="edit">edit</span></a></div>';
		echo "</td>";
		echo '<td class="delete">';
		echo '<div class="button delete"><a href="delete.php?id='.$row['id'].'" class="button delete"><span class="delete">delete</span></a></div>';
		echo "</td>";
    }
} 

echo "</table>";

echo "<div id='pagination' class='grid_12'>";

	$sortid="";
        if(isset($_GET['sort'])) {
            switch ($_GET['sort'] ) {
            case 0: 
                        $sortid = 0; 
                        break;
            case 1: 
                        $sortid = 1; 
                        break;
            case 2: 
                        $sortid = 2; 
                        break;
            case 3: 
                        $sortid = 3; 
                        break;
            case 4: 
                        $sortid = 4; 
                        break;
            }
        }
	

if (isset($_GET['page'])&&($pagenr > 1)&& !isset($_GET['sort']))
	{
		echo '<span class="pageblock"><a href="index.php?page='.($pagenr-1).'&nr_results='. $resmax .'" class="page">Vorige</a></span>';
	}elseif (isset($_GET['page'])&&($pagenr > 1) && isset($_GET['sort']))
	{
		echo '<span class="pageblock"><a href="index.php?page='.($pagenr-1).'&sort='. $sortid .'&nr_results='. $resmax .'" class="page">Vorige</a></span>';
	}else
	{
		echo "<span class='pageblock-current'>Vorige</span>";
	}
	
	for($i=1;$i<=$total_pages;$i++)
	{
		if($pagenr==$i)
		{
			echo '<span class="pageblock-current">'.$i.'</span>';
		}elseif (isset($_GET['sort'])){
		echo '<span class="pageblock"><a href="index.php?page='.$i.'&sort=' . $sortid .'&nr_results='. $resmax .'" class="page">'.$i.'</a></span>';
		}elseif (!isset($_GET['sort'])){
			echo '<span class="pageblock"><a href="index.php?page='.$i.'&nr_results='. $resmax .'" class="page">'.$i.'</a></span>';
		}
	}
	
	if($pagenr<$total_pages && !isset($_GET['sort']))
		{
			echo '<span class="pageblock"><a href="index.php?page='.($pagenr+1).'&nr_results='. $resmax .'" class="page">Volgende</a></span>';
		}
		elseif ($pagenr<$total_pages && isset($_GET['sort']))
		{
			echo '<span class="pageblock"><a href="index.php?page='.($pagenr+1).'&sort=' . $sortid .'&nr_results='. $resmax .'" class="page">Volgende</a></span>';
		}else
		{
			echo "<span class='pageblock-current'>Volgende</span>";
		}

echo "</div>";
?>