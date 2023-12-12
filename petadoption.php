<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['inputPassword4'];
$phone = $_POST['phone_no'];
$address = $_POST['inputAddress'];

// Insert data into the 'pet' table
$sql = "INSERT INTO user (name, email, password, phone_no, address) VALUES ('$name', '$email', '$password', '$phone', '$address')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
