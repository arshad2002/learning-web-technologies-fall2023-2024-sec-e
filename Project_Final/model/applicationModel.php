<?php
require_once("db.php");

function fetchFreelancerApplications($jobId) {
    $conn = getConnection();

    $query = "SELECT applications.application_id, applications.job_id, applications.freelancer_id, 
              applications.application_text, applications.application_date, applications.status,
              users.username, users.email
              FROM applications
              JOIN users ON applications.freelancer_id = users.user_id
              WHERE applications.job_id = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $jobId);
    $stmt->execute();
    $result = $stmt->get_result();

    $applications = [];

    while ($row = $result->fetch_assoc()) {
        $applications[] = $row;
    }

    $stmt->close();
    $conn->close();

    return $applications;
}

function updateApplicationStatus($applicationId, $status) {
    try {
        $conn = getConnection();
        $validStatusValues = ["accepted", "rejected", "pending"]; 
        if (!in_array($status, $validStatusValues)) {
            throw new Exception("Invalid status value.");
        }

        $query = "UPDATE applications SET status = ? WHERE application_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $status, $applicationId);
        $stmt->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}






?>