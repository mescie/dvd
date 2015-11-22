<?php
require_once 'db_config.php';

include './header.php';

if (isset( $_GET[ 'id' ] ) && is_numeric( $_GET[ 'id' ] ) && $_GET[ 'id' ] > 0) {
    $id = $_GET[ 'id' ];
    $result = mysql_query( "SELECT * FROM dvds WHERE id=$id" )
    or die ( mysql_error() );
    $row = mysql_fetch_array( $result );

    if ($row) {
        $name = $row[ 'naam' ];
        $borrowed = $row[ 'uitgeleend' ];
        $grade = $row[ 'cijfer' ];
        $borrowed_name = $row[ 'uitgeleend_naam' ];
    } else {
        echo "Geen resultaten!";
        exit();
    }
}
?>

    <div id="show-results">
        <h2 class="heading">Edit: <?php echo $name; ?></h2>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>

            <table class="table table-striped">
                <tr>
                    <td><label>Naam:</label></td>
                    <td>
                        <input type="text" name="name" value="<?php echo $name; ?>"><br/>
                    </td>
                </tr>
                <tr>
                    <td><label>Uitgeleend</label></td>
                    <td>
                        <select name="borrowed">
                            <option <?php echo ( $row[ 'uitgeleend' ] == '0' ) ? "selected" : "" ?> value="0">Nee
                            </option>
                            <option <?php echo ( $row[ 'uitgeleend' ] == '1' ) ? "selected" : "" ?> value="1">Ja
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Cijfer</label></td>
                    <td>
                        <select name="grade">
                            <option <?php echo ( $row[ 'cijfer' ] == '1' ) ? "selected" : "" ?>>1</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '2' ) ? "selected" : "" ?>>2</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '3' ) ? "selected" : "" ?>>3</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '4' ) ? "selected" : "" ?>>4</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '5' ) ? "selected" : "" ?>>5</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '6' ) ? "selected" : "" ?>>6</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '7' ) ? "selected" : "" ?>>7</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '8' ) ? "selected" : "" ?>>8</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '9' ) ? "selected" : "" ?>>9</option>
                            <option <?php echo ( $row[ 'cijfer' ] == '10' ) ? "selected" : "" ?>>10</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Uitgeleend aan:</label></td>
                    <td>
                        <input type="text" name="borrowed_name" value="<?php echo $borrowed_name; ?>">
                    </td>
                </tr>
            </table>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>

<?php
if (isset( $_POST[ 'submit' ] )) {
    $name = mysql_real_escape_string( $_POST[ 'name' ] );
    $borrowed = mysql_real_escape_string( $_POST[ 'borrowed' ] );
    $grade = mysql_real_escape_string( $_POST[ 'grade' ] );
    $borrowed_name = mysql_real_escape_string( $_POST[ 'borrowed_name' ] );

    mysql_query( "UPDATE dvds SET naam='$name', uitgeleend='$borrowed', cijfer='$grade', uitgeleend_naam='$borrowed_name' WHERE id='$id'" )

    or die( mysql_error() );
    header( 'Location: index.php' );
}

include( './footer.php' )
?>