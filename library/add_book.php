<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Add New Book</title>
</head>

<body>
    <h1>Add New Book</h1>
    <form action="process_book.php" method="POST">
        <label>Title:</label><br>
        <input type="text" name="title"><br>
        <label>Author:</label><br>
        <input type="text" name="author"><br>
        <label>price:</label><br>
        <input type="text" name="price"><br>
        <label>Quantity:</label><br>
        <input type="number" name="quantity" value="1"><br>
        <input type="submit" value="Add Book">
    </form>
</body>

</html>