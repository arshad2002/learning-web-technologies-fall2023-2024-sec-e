<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <?php 
        if(isset($_REQUEST["email"])) {
            $mail = $_REQUEST["email"];
            echo "Selected email: " . $mail;
        }
        ?>
    </body>
</html>

