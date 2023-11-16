<?php
    session_start();
    require_once("../controller/authCheck.php");
    checkLoggedIn();
    require("../model/jobFetchModel.php");
    $client_id = $_SESSION['user_id'];
    $jobs = getJobsByClientId($client_id);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>

    <nav align="right">
            <a href="clientDashboard.php">Home</a>|
            <a href="project.php">Projects</a>|
            <a href="profile.php">Profile</a>|
            <a href="jobpost.php">JobPost</a>|
            <a href="settings.php">Settings</a>|
            <a href="../controller/logoutCheck.php">Logout</a>
    </nav>
      
    <section>
    <h2>Posted Jobs</h2>

    <?php if (empty($jobs)) : ?>
        <p>No jobs posted yet. <a href="jobpost.php">Post Job</a></p>
    <?php else : ?>
        <ul>
            <?php foreach ($jobs as $job) : ?>
                <li>
                    <strong>Title:</strong> <?php echo $job['title']; ?><br>
                    <strong>Description:</strong> <?php echo $job['description']; ?><br>
                    <strong>Job Type:</strong> <?php echo $job['job_type']; ?><br>
                    <strong>Payment:</strong> <?php echo $job['payment']; ?><br>

                    <strong>Freelancer:</strong> 
                    <?php if (!empty($job['freelancer_id'])) : ?>
                        <?php echo $job['freelancer_username']; ?>
                    <?php else : ?>
                        No one has applied yet.
                    <?php endif; ?><br>

                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="clientDashboard.php">Back to Dashboard</a>
    
        
    </section>

</body>
</html>
