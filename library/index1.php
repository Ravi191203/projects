<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Library Management System</title>
</head>

<body>
    <h1>Library Management System</h1>
    <a href="add_book.php">Add New Book</a>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                "<tr><td>" . $row["title"] . "</td><td>" . $row["author"] . "</td><td>" . $row["price"] ."</td><td>" . $row["quantity"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</body>

</html>