<html>
    <head>
        <title>Date Of Birthday</title>
    </head>
    <body>
        <form action="" method="post" enctype="" >
            <fieldset >
                <legend><b>Date Of Birthday</b></legend>
                <input type="date" name="bod" value="" /> <br>
                <hr align="left" width="8%">
                <input type="submit" name="" value="Submit">
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

