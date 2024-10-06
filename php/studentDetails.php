<?php
$username = 'root';
$password = '';
$database = 'info';
$servername = 'localhost';
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Student Details</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
<section>
    <h1>CSE Department Student Information</h1>
    <table>
        <tr>
            <th scope="col">Reg_No</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Gender</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone_No</th>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
        <?php
        // SQL query to select data from database
        $sql = "SELECT * FROM student where dept='CSE'";
        
        // Execute the query and check for errors
        if ($result = $mysqli->query($sql)) {
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
                ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                    <td><?php echo htmlspecialchars($rows['Reg_No']); ?></td>
                    <td><?php echo htmlspecialchars($rows['FirstName']); ?></td>
                    <td><?php echo htmlspecialchars($rows['LastName']); ?></td>
                    <td><?php echo htmlspecialchars($rows['Gender']); ?></td>
                    <td><?php echo htmlspecialchars($rows['Email']); ?></td>
                    <td><?php echo htmlspecialchars($rows['Address']); ?></td>
                    <td><?php echo htmlspecialchars($rows['Phone_No']); ?></td>
                </tr>
                <?php
            }
            $result->free(); // Free the result set
        } else {
            echo "Error executing query: " . $mysqli->error; // Display error if query fails
        }
        ?>
    </table>
</section>
</body>
</html>