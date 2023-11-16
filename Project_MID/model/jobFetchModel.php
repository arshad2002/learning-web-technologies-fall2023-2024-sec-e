<?php
require_once("db.php");

function getJobsByClientId($client_id) {
    $conn = getConnection();

    $query = "SELECT j.*, a.freelancer_id, u.username AS freelancer_username 
              FROM jobs j
              LEFT JOIN applications a ON j.job_id = a.job_id
              LEFT JOIN users u ON a.freelancer_id = u.user_id
              WHERE j.client_id = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $client_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $jobs = [];
    while ($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }
    return $jobs;
}


?>
