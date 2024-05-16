<?php include 'db_connection.php';
// Process form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$course = $_POST['course'];
// Insert data into database
$sql = "INSERT INTO students (first_name, last_name, email, phone, address,dob, course)
VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$dob', '$course')";
if ($conn->query($sql) === TRUE) {
    echo "Admission application submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>