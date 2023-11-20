document.addEventListener('DOMContentLoaded', function () {
    window.searchEmployer = function () {
        var searchInput = document.getElementById('searchInput').value;

        fetch('../controller/adminController.php', {
            method: 'POST',
            headers: {
                'Content-type': 'application/x-www-form-urlencoded',
            },
            body: 'action=search&searchTerm=' + encodeURIComponent(searchInput),
        })
        .then(response => response.json())
        .then(data => updateEmployerTable(data))
        .catch(error => {
            console.error('Error occurred during search:', error);
            alert('Error occurred during search');
        });
    };

    window.deleteEmployer = function (empId) {
        var confirmDelete = confirm('Are you sure you want to delete this employer?');
        if (confirmDelete) {
            fetch('../controller/adminController.php', {
                method: 'POST',
                headers: {
                    'Content-type': 'application/x-www-form-urlencoded',
                },
                body: 'action=delete&empId=' + empId,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Employer deleted successfully');
                    searchEmployer();
                } else {
                    alert('Error deleting employer');
                }
            })
            .catch(error => {
                console.error('Error occurred during delete:', error);
                alert('Error occurred during delete');
            });
        }
    };

    function updateEmployerTable(data) {
        var tableBody = document.getElementById('employerTableBody');
        tableBody.innerHTML = '';

        if (data && data.success && data.data && data.data.length > 0) {
            data.data.forEach(function (employer) {
                var row = '<tr>' +
                    '<td>' + employer.emp_name + '</td>' +
                    '<td>' + employer.company_name + '</td>' +
                    '<td>' + employer.contact_no + '</td>' +
                    '<td>' + employer.user_name + '</td>' +
                    '<td><button onclick="deleteEmployer(' + employer.emp_id + ')">Delete</button></td>' +
                    '</tr>';
                tableBody.innerHTML += row;
            });
        } else {
            var message = '<tr><td colspan="5">No results found</td></tr>';
            tableBody.innerHTML = message;
        }
    }
});
