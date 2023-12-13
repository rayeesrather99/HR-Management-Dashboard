<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }

        .content {
            text-align: center;
            margin-top: 50px;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .box {
            flex: 1 1 300px;
            max-width: 300px;
            padding: 20px;
            text-align: center;
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s;
            margin: 10px;
            cursor: pointer;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box a {
            text-decoration: none;
            color: white;
        }

        .box.department {
            background-image: url('images/department.jpg');
        }

        .box.employee {
            background-image: url('images/employee.png');
        }

        .box.add-department {
            background-image: url('images/department.png');
        }

        .box.add-employee {
            background-image: url('images/employees.jpg');
        }

        .box h3 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .box p {
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <div class="content">
        <h2>Welcome to HRM System</h2>
        <p>Explore the features of our Human Resource Management system for efficient management of departments and employees.</p>

        <div class="box-container">
            <div class="box department">
                <a href="depTable.php">
                    <h3>View Department</h3>
                    <p>Explore details about different departments.</p>
                </a>
            </div>

            <div class="box employee">
                <a href="empTable.php">
                    <h3>View Employee</h3>
                    <p>Get information about all employees in the system.</p>
                </a>
            </div>

            <div class="box add-department">
                <a href="addDepartment.html">
                    <h3>Add Department</h3>
                    <p>Add a new department to the system.</p>
                </a>
            </div>

            <div class="box add-employee">
                <a href="addEmployee.html">
                    <h3>Add Employee</h3>
                    <p>Add a new employee to the system.</p>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
