<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        a {
            text-decoration: none;
            padding: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #007BFF;
            color: white;
        }

        a.delete:hover {
            background-color: #DC3545;
        }

        @media (max-width: 600px) {
            table {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <main class="container">
        <h2>List of Employees</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Aadhar</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Manager</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hrm");
                    $sql = "SELECT `id`, `fname`, `mname`, `sname`, `address`, `adhar_no`, `desig`, `salary`, `dob`, `gender`, `mgr_id`, `deptt_id` FROM `employee` ";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $eid = $row['id'];
                        $eidFullName = strtoupper($row['fname'] ." " . $row['mname'] ." ". $row['sname']);
                        $eidAddress = $row['address'];
                        $eidAadharNo = $row['adhar_no'];
                        $eidDesig = $row['desig'];
                        $eidSalary = $row['salary'];
                        $eidDob = $row['dob'];
                        $eidGender = $row['gender'];
                        $eidMgr_id = $row['mgr_id'];
                        $eidDeptt_id = $row['deptt_id'];
                        echo ("
                            <tr>                                      
                                <td> $eid </td>
                                <td> $eidFullName </td>
                                <td> $eidAddress </td>
                                <td> $eidAadharNo </td>
                                <td> $eidDesig </td>
                                <td> $eidSalary </td>
                                <td> $eidDob </td>
                                <td> $eidGender </td>
                                <td> $eidMgr_id </td>
                                <td> $eidDeptt_id </td>
                                <td>
        <a href='javascript:void(0);' class='edit-button'>Edit</a>
        <a href='delete_employee.php?id=$eid' class='text-danger delete'>Delete</a>
    </td>
</tr>
<tr class='edit-form' style='display: none;'>
    <td colspan='11'>
        <form method='post' action='edit_employee.php'>
            <input type='text' name='id' value='<?php echo $eid; ?>' hidden>
            <input type='text' name='fname' value='<?php echo $eidFullName; ?>'>
            <input type='text' name='address' value='<?php echo $eidAddress; ?>'>
            <!-- Add input fields for other employee attributes -->
            <input type='submit' value='Save'>
        </form>
    </td>
</tr>
                            </tr>
                        ");
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script>
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const row = button.parentElement.parentElement;
            const editForm = row.nextElementSibling;

            if (editForm) {
                editForm.style.display = (editForm.style.display === 'none') ? 'table-row' : 'none';
            }
        });
    });
</script>


</body>
</html>
