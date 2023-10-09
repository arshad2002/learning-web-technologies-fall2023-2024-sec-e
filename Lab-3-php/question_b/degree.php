<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
        <form action="" method="post" enctype="" >
            <fieldset >
                <legend>Degree</legend>
                <input type="checkbox" name="degree" value="ssc" />SSC
                <input type="checkbox" name="degree" value="hsc" />HSC
                <input type="checkbox" name="degree" value="bsc" />BSC
                <hr align="left" width="11%">
                <input type="submit" name="" value="Submit">
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