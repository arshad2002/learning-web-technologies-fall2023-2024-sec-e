<?php
session_start();
require_once("../model/jobModel.php");
if (isset($_SESSION['user_id']) && $_SESSION['user_type'] === 'client') {
    $client_id = $_SESSION['user_id'];
    $jobs = getJobsByClientId($client_id);
    echo json_encode($jobs);
} else {
    header("Location: ../view/login.php");
    exit();
}
?>
