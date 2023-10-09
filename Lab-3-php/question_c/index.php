<!DOCTYPE html>
<html>
    <head>
        <title>Name</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <legend>NAME</legend>
                    Name <br>
                    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"> <br>
                    <hr align="left" width="12%">
                    <input type="submit" value="Submit">
                </fieldset>
            </form>

        </body>
</html>
<?php
            if(isset($_POST['username'])) {
                $username = $_POST['username'];
                echo  $username ,"<br>";
            }
            ?>
