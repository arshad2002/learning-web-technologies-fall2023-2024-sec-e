<?php
require_once 'db.php';

function registerEmployer($empName,  $contactNo, $userName, $password) {
    $connection = getConnection();

    $query = "INSERT INTO employee (emp_name, contact_no, user_name, password) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, 'ssss', $empName,  $contactNo, $userName, $password);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $result;
}

function searchEmployer($searchTerm) {
    $connection = getConnection();

    $query = "SELECT * FROM employee WHERE emp_name LIKE ?";

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        return false;
    }

    $searchTerm = '%' . $searchTerm . '%';
    mysqli_stmt_bind_param($stmt, 's', $searchTerm);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $data;
}


function updateEmployer($empId, $empName, $contactNo, $userName, $password) {
    $connection = getConnection();

    $query = "UPDATE employee SET emp_name=?, contact_no=?, user_name=?, password=? WHERE emp_id=?";

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        return false; 
    }

    mysqli_stmt_bind_param($stmt, 'ssssi', $empName, $contactNo, $userName, $password, $empId);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $result;
}

function getEmployeeIdByUsername($username) {
    $connection = getConnection();

    $query = "SELECT emp_id FROM employee WHERE user_name = ?";

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        return false; 
    }

    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_assoc($result);
    $empId = $row['emp_id'];

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $empId;
}

function deleteEmployer($empId) {
    $connection = getConnection();

    $query = "DELETE FROM employee WHERE emp_id = ?";

    $stmt = mysqli_prepare($connection, $query);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, 'i', $empId);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    return $result;
}
?>
