
<html>
    <head>
        <title>Bload Group</title>
    </head>
    <body>
        <form action="" method="post" enctype="" >
            <fieldset>
                <legend>BLOOD GROUP</legend>
                Blood Group 
                <select name="blood">
                    <option value="A+">A+</option>         
                    <option value="B+">B+</option>         
                    <option value="AB+">AB+</option>         
                    <option value="O+">O+</option>  
                    <option value="A-">A-</option>         
                    <option value="B-">B-</option>         
                    <option value="AB-">AB-</option>         
                    <option value="O-">O-</option>  
                         
                </select> <br>
                <hr width="10%" align="left">  
            <input type="submit" name="" value="Submit">
                   
                </legend>
            </fieldset>

        </form>
    </body>
</html>

<?php 
    if(isset($_POST['bod'])) {
        $bod = $_POST['bod'];
        echo  $bod ,"<br>";
    }
?>