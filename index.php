<?php
include './header.php';
?>

<div id="slider" class="owl-carousel owl-theme">

    <div class="item"><img src="images/fullimage1.jpg" alt="Her"></div>
    <div class="item"><img src="images/fullimage2.jpg" alt="Band of Brothers"></div>
    <div class="item"><img src="images/fullimage3.jpg" alt="Interstellar"></div>

</div>

<div id="show-results" class="col-lg-12">
    <?php
    include './show.php';
    ?>
</div>

<div id="button-dvd" class="button dvd add" onclick="showDiv()"><a href="#form" class="button">+Add DVD</a>
</div>

<div class="col-lg-6">
    <div id="form" style="display: none;">
        <h2 class="heading">Add DVD</h2>

        <form action="write.php" method="post">
            <table class="table table-striped">
                <tr>
                    <td><label>Naam:</label></td>
                    <td>
                        <input type="text" name="name" value="<?php if (!empty ( $_GET[ "invalidName" ] )) {
                            echo 'Vul een geldige naam in!';
                        } ?>">
                    </td>
                </tr>
                <tr>
                    <td><label>Uitgeleend</label></td>
                    <td>
                        <select name="borrowed">
                            <option value="0">Nee</option>
                            <option value="1">Ja</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Uitgeleend aan</label></td>
                    <td>
                        <input type="text" name="borrowed_name" value="">
                    </td>
                </tr>
                <tr>
                    <td><label>Cijfer</label></td>
                    <td>
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
                    </td>
                </tr>
            </table>
            <div><input type="submit" value="submit" name="submit"></div>
        </form>
    </div>
</div>

<div id="error">
</div>

</div>

<?php
include './footer.php';
?>
