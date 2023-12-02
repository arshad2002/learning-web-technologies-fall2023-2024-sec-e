<?php
require_once '../model/db.php';
require_once '../model/adminModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'register') {
            $empName = $_POST['empName'];
            $contactNo = $_POST['contactNo'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            $result = registerEmployer($empName, $contactNo, $userName, $password);

            if ($result) {
                echo json_encode(['success' => true]);
                exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Registration failed']);
                exit;
            }
        }

        elseif ($_POST['action'] === 'search') {
            $searchTerm = $_POST['searchTerm'];

            $searchResult = searchEmployer($searchTerm);

            echo json_encode(['success' => true, 'data' => $searchResult]);
            exit;
        }

        elseif ($_POST['action'] === 'update') {
            $empName = $_POST['empName'];
            $contactNo = $_POST['contactNo'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            $empId = getEmployeeIdByUsername($userName);

            if ($empId !== false) {
                $updateResult = updateEmployer($empId, $empName, $contactNo, $userName, $password);

                if ($updateResult) {
                    echo json_encode(['success' => true]);
                    exit;
                } else {
                    echo json_encode(['success' => false, 'message' => 'Update failed']);
                    exit;
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid username']);
                exit;
            }
        }

        elseif ($_POST['action'] === 'delete') {
            $empId = $_POST['empId'];
            $deleteResult = deleteEmployer($empId);

            if ($deleteResult) {
                echo json_encode(['success' => true]);
                exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Error deleting employer']);
                exit;
            }
        }
    }
}
?>
