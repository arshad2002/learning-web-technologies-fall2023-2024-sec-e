<html>
    <head>
        <title>Name</title>
    </head>
    <body>
        <form action="name.php" method="post" enctype="">
            <fieldset>
                <legend>NAME</legend>
                    Name <br>
                    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"> <br>
                    <hr align="left" width="12%">
                    <input type="submit" name="" value="Submit">
                </legend>
            </fieldset>
        </form>
        

    </body>
</html>

<?php 
    if(isset($_REQUEST["username"])) {
        $name = $_REQUEST["username"];
        echo "Username: " . $name;
    }
?>
