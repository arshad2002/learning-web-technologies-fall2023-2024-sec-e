<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
    <form action="gender.php" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "male") echo "checked"; ?>/> Male
            <input type="radio" name="gender" value="female" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "female") echo "checked"; ?>/> Female
            <input type="radio" name="gender" value="others" <?php if(isset($_POST["gender"]) && $_POST["gender"] == "others") echo "checked"; ?>/> Other <br>
            <hr align="left" width="13%">
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

        

    </body>
</html>

<?php 
    if(isset($_POST["submit"])) {
        $gender = $_POST["gender"];
        echo "Selected gender: " . $gender;
    }
    ?>