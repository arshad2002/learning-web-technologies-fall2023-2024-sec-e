<?php
if(isset($_POST['Id']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['usertype'])){
    $folder = '../model/userData/';
    $userFileName = $folder . $_POST['Id'] . '.txt';
    $data = "Id: ".$_POST['Id']."\nPassword: ".$_POST['password']."\nName: ".$_POST['name']."\nUser Type: ".$_POST['usertype']."\n\n";
    file_put_contents($userFileName, $data, FILE_APPEND | LOCK_EX);
    header("Location: ../view/login.php");
    exit;
}
?>
