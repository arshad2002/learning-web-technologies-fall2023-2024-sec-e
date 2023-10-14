<?php
    $allowedFormats = ['jpeg', 'jpg', 'png'];
    $maxFileSize = 4 * 1024 * 1024;

    $fileName = $_FILES["pic"]["name"] ?? '';
    $fileType = $_FILES["pic"]["type"] ?? '';
    $fileSize = $_FILES["pic"]["size"] ?? '';

    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedFormats)) {
        echo "Invalid file format. Only JPG, JPEG, and PNG files are allowed.";
    } 
    else if ($fileSize > $maxFileSize) {
        echo "File size is too large. It should be less than 4MB.";
    } else {
        echo "The file has been uploaded.";
    }
 ?>
