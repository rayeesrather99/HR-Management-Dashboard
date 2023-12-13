<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Department</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
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
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        .delete-link {
            color: red;
        }

        .delete-link:hover {
            color: darkred;
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
        <h2>List Of Departments</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Budget</th>
                        <th>Date of Establishment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hrm");
                    $sql = "SELECT `id`, `name`, `budget`, `date_of_estb` FROM `department` ORDER BY name";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $did = $row['id'];
                        $dname = strtoupper($row['name']);
                        $dbudget = $row['budget'];
                        $ddoe = $row['date_of_estb'];
                        echo ("
                            <tr>                                      
                                <td> $did </td>
                                <td> $dname </td>
                                <td> $dbudget </td>
                                <td> $ddoe </td>
                                <td>
                                    <a href='viewEmployees.php?e_did=$did'>View Employees</a>
                                    |
                                    <a class='delete-link' href='deleteDeptt.php?d_id=$did'>Delete</a>
                                </td>
                            </tr>
                        ");
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
