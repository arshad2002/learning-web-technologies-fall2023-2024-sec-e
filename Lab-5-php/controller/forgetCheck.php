<?php

    $currentPassword = $_REQUEST['current_password'];
    $newPassword = $_REQUEST['new_password'];
    $retypedPassword = $_REQUEST['retyped_password'];

    if ($newPassword == $currentPassword) {
        echo "New password cannot be the same as the current password.";
    } else {
    
        if ($newPassword == $retypedPassword) {
        
            echo "Password updated successfully!";
        } else {
            echo "New password and retyped password do not match.";
           
        }
    }
?>
