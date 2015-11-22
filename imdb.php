<?php
$title = $_GET[ "title" ];

$grade = $_GET[ "grade" ];

$title = urlencode( $title );

$json = file_get_contents( "http://www.omdbapi.com/?t=$title" );

$details = json_decode( $json );

include './header.php';
?>
<?php

if ($details->Response == 'True') {
    //Print the movie information
    ?>
    <div id='title' class="col-lg-12">
        <?php echo $details->Title ?> <span class='score'>(<?php echo $grade; ?>)</span>
    </div>

    <div class="col-lg-6">
        <img src="<?php echo $details->Poster ?>"/>
    </div>

    <div class="col-lg-6">
        <table class='table table-striped'>
            <tr>
                <td class='dvd-info'>IMDB-ID:</td>
                <td><?php echo $details->imdbID ?></td>
                <td class='dvd-info'>IMDB rating:</td>
                <td><?php echo $details->imdbRating ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>Year:</td>
                <td><?php echo $details->Year ?></td>
                <td class='dvd-info'>Rated:</td>
                <td><?php echo $details->Rated ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>Released Date:</td>
                <td><?php echo $details->Released ?></td>
                <td class='dvd-info'>Runtime:</td>
                <td><?php echo $details->Runtime ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>Director:</td>
                <td><?php echo $details->Director ?></td>
                <td class='dvd-info'>Genre:</td>
                <td><?php echo $details->Genre ?></td>
            </tr>
        </table>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped">
            <tr>
                <td class='dvd-info'>Actors:</td>
                <td colspan='3'><?php echo $details->Actors ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>Plot:</td>
                <td colspan='3'> <?php echo $details->Plot ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>Awards:</td>
                <td colspan='3'><?php echo $details->Awards ?></td>
            </tr>
            <tr>
                <td class='dvd-info'>IMDB Votes:</td>
                <td colspan='3'><?php echo $details->imdbVotes ?></td>
        </table>
    </div>
<?php
} else {
    echo "Movie information not available. Please confirm title";
}
?>

        <button class="back" onClick="history.go(-1)">Back</button>

    </div>

<?php
include './footer.php';
?>