<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
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
    </body>
</html>

