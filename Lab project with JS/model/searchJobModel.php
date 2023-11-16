<?php
require_once('db.php');

function searchJobs($searchQuery) {
    $conn = getConnection();

    $query = "SELECT * FROM jobs WHERE title LIKE ? OR description LIKE ?";
    $stmt = $conn->prepare($query);
    $searchParameter = "%$searchQuery%";
    $stmt->bind_param("ss", $searchParameter, $searchParameter);
    $stmt->execute();
    $result = $stmt->get_result();
    $jobs = [];
    while ($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }

    return $jobs;
}
?>
