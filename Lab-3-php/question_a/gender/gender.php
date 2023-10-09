<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <?php 
        if(isset($_POST["submit"])) {
            $gender = $_POST["gender"];
            echo "Selected gender: " . $gender;
        }
        ?>
    </body>
</html>

