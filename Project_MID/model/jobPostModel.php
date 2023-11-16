<?php
require_once('db.php');

function postJob($client_id, $title, $description, $job_type, $payment) {
    $conn = getConnection();
    $response = ['success' => false, 'message' => ''];

    if ($conn->connect_error) {
        $response['message'] = "Connection failed: " . $conn->connect_error;
        return $response;
    }

    $stmt = $conn->prepare("INSERT INTO jobs (client_id, title, description, job_type, payment) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isssd", $client_id, $title, $description, $job_type, $payment);

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = "New job posted successfully";
    } else {
        $response['message'] = "Error posting the job: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    return $response;
}
?>
