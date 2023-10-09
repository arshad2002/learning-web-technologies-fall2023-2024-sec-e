<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <form action="" method="post" enctype="">
            <fieldset>
                <legend>EMAIL</legend>
                Email <br>
                <input type="email" name="email" value=""> <br>
                <hr align="left" width="12%">
                <input type="submit" name="" value="Submit">    
                   
                </legend>
            </fieldset>
           

        </form>

    </body>
</html>
<?php 
    if(isset($_REQUEST["email"])) {
        $mail = $_REQUEST["email"];
        echo "Selected email: " . $mail;
    }
?>