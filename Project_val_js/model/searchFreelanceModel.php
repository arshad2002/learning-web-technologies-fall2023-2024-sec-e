<?php
require_once('db.php');

function searchFreelancer($searchQuery) {
    $conn = getConnection();

    $query = "SELECT * FROM users WHERE user_type = 'freelancer' AND (username LIKE ? OR user_id = ?)";
    $stmt = $conn->prepare($query);
    $searchParameter = "%$searchQuery%";
    $stmt->bind_param("ss", $searchParameter, $searchQuery);
    $stmt->execute();
    $result = $stmt->get_result();
    $freelancers = [];
    while ($row = $result->fetch_assoc()) {
        $freelancers[] = $row;
    }

    return $freelancers;
}
?>
