
<html>
    <head>
        <title>Bload Group</title>
    </head>
    <body>
        <form action="blood.php" method="post" enctype="" >
            <fieldset>
                <legend>BLOOD GROUP</legend>
                Blood Group 
                <select name="blood">
                    <option value="A+" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "A+") echo "selected"; ?>>A+</option>         
                    <option value="B+" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "B+") echo "selected"; ?>>B+</option>         
                    <option value="AB+" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "AB+") echo "selected"; ?>>AB+</option>         
                    <option value="O+" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "O+") echo "selected"; ?>>O+</option>  
                    <option value="A-" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "A-") echo "selected"; ?>>A-</option>         
                    <option value="B-" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "B-") echo "selected"; ?>>B-</option>         
                    <option value="AB-" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "AB-") echo "selected"; ?>>AB-</option>         
                    <option value="O-" <?php if(isset($_POST["blood"]) && $_POST["blood"] == "O-") echo "selected"; ?>>O-</option>   
                         
                </select> <br>
                <hr width="10%" align="left">  
            <input type="submit" name="" value="Submit">
                   
                </legend>
            </fieldset>

        </form>
    </body>
</html>

<?php 
    if(isset($_REQUEST["blood"])) {
        $blood = $_REQUEST["blood"];
        echo "Selected blood group: " . $blood;
    }
?>
