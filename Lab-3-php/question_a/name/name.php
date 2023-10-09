<html>
    <head>
        <title>Name</title>
    </head>
    <body>
        <?php 
        if(isset($_REQUEST["username"])) {
            $name = $_REQUEST["username"];
            echo "Username: " . $name;
        }
        ?>
    </body>
</html>

