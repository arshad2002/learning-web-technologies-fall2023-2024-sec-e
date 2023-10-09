<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <form action="" method="post" enctype="" >
            <fieldset >
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male" /> Male
                <input type="radio" name="gender" value="female" /> Female
                <input type="radio" name="gender" value="others" /> Other <br>
                <hr align="left" width="13%">
                <input type="submit" name="" value="Submit">
            </fieldset>
           

        </form>
        

    </body>
<<?php 
    if(isset($_POST["submit"])) {
        $gender = $_POST["gender"];
        echo "Selected gender: " . $gender;
    }
    ?>