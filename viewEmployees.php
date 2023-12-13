<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border-radius: 6px 6px 0 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
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

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <main class="container">
        <h2>List of Employees Working With [ <?php echo($_GET["e_did"])?> ]</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost","root","","hrm");
                    $edid  = $_GET["e_did"];
                    $sql = "SELECT `id`, `fname`, `mname`, `sname`, `address`, `adhar_no`, `desig`, `salary`, `dob`, `gender`, `mgr_id`, `deptt_id` FROM `employee` WHERE deptt_id IN ('". $edid . "') ORDER BY fname;";
                    $result = mysqli_query($con,$sql);
                    $nor = mysqli_affected_rows( $con);
                    while($row = mysqli_fetch_assoc($result)){
                        $eid = $row['id'];
                        $fullName = strtoupper($row['fname'] ." " . $row['mname'] ." ". $row['sname']);
                        $address = $row['address'];
                        $gender = $row['gender'];
                        $salary = $row['salary'];
                        echo("
                            <tr>
                                #<td> $eid </td>
                                <a href='#'><td><?php echo $eid; ?></td></a>
                                <td> $fullName </td>
                                <td> $address </td>
                                <td> $gender </td>
                                <td> $salary  </td>
                            </tr>
                        ");
                    }
                    if($nor < 1){
                        echo('<div class="alert alert-primary">No Record Found</div>');
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
