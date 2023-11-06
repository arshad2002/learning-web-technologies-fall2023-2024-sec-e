<?php
 require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $job_type = $_POST['job_type'];
  $payment = $_POST['payment'];
  $client_id = 11;
  $conn = getConnection();
  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO j (client_id, title, description, job_type, payment) VALUES ($client_id, '$title', '$description', '$job_type', $payment)";

  if ($conn->query($sql) === TRUE) {
      echo "New job posted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("Location: ../view/jobpost.html");
  }
?>