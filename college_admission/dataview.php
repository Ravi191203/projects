<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>college Admission Form</title>
</head>

<body>
    <h1>college Admission Form</h1>
    <a href="index.php">New Admission Student Details</a>
    <table border="1">
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PHONENO</th>
            <th>ADDRESS</th>
            <th>DOB</th>
            <th>course</th>
        </tr>
        <?php
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["address"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["course"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>