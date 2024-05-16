<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>College Admission Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>College Admission Form</h2>
        <form action="submit.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br><br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea><br><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="course">Course Applied for:</label>
            <select name="course">
                <option value="BA">BA</option>
                <option value="Bcom">Bcom</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
            </select><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>