<?php include 'db_connection.php';
$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$sql = "INSERT INTO books (title, author, price, quantity) VALUES ('$title','$author', '$price', '$quantity')";
if ($conn->query($sql) === TRUE) {
    echo "New book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>