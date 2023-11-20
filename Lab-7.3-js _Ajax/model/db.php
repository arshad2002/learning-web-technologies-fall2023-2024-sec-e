<?php
$dbhost = "localhost";
$dbname = "lab";
$dbuser = "root";
$dbpass = "";

function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbpass;
    global $dbuser;
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()){
        echo "Failed to connect in MySQL: " . mysqli_connect_error();
        exit();
    }
    return $con;
}
?>
