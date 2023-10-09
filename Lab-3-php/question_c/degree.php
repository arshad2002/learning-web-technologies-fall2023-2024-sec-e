<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
    <form action="degree.php" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="ssc" <?php if(isset($_POST["degrees"]) && in_array("ssc", $_POST["degrees"])) echo "checked"; ?>/>SSC
            <input type="checkbox" name="degrees[]" value="hsc" <?php if(isset($_POST["degrees"]) && in_array("hsc", $_POST["degrees"])) echo "checked"; ?>/>HSC
            <input type="checkbox" name="degrees[]" value="bsc" <?php if(isset($_POST["degrees"]) && in_array("bsc", $_POST["degrees"])) echo "checked"; ?>/>BSC
            <hr align="left" width="11%">
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    </body>
</html>

<?php 
    if(isset($_REQUEST["submit"])) {
        if(isset($_REQUEST["degrees"])) {
            $selectedDegrees = $_REQUEST["degrees"];
            echo "Selected degrees: " . implode(", ", $selectedDegrees);
        } else {
            echo "No degrees selected.";
        }
    }
?>
