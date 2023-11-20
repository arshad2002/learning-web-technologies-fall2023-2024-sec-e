<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <script src="../asset/js/adminPanel.js"></script>
</head>
<body>

    <header>
        <h1>Admin Panel</h1>
    </header>

    <section>
        <form id="registerForm" action="../controller/adminController.php" method="post">
            <fieldset>
                <legend><h2>Register New Employer</h2></legend>
                <label for="empName">Employer Name:</label>
                <input type="text" id="empName" name="empName" required><br>

                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" required><br>

                <label for="contactNo">Contact No:</label>
                <input type="tel" id="contactNo" name="contactNo" required><br>

                <label for="userName">User Name:</label>
                <input type="text" id="userName" name="userName" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <input type="hidden" name="action" value="register">
                <input type="submit" value="Register">
            </fieldset>
        </form><br>

        <fieldset>
            <legend>
                <h2>Search Employer</h2>
            </legend>
                <label for="searchInput">Search:</label>
                <input type="text" id="searchInput" oninput="searchEmployer()">
                <input type="hidden" name="action" value="search">
            
                <h2>Employer Information</h2>
                <table>
                    <thead>
                        <tr>
                            <th>EmpName</th>
                            <th>Company Name</th>
                            <th>Contact No</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="employerTableBody">

                    </tbody>
                </table>
            </section>
        </fieldset>


</body>
</html>
