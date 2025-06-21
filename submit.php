<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$user = "root";
$password = "Daniel@123/";  // Your new password
$dbname = "formdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);

$sql = "INSERT INTO submissions (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank you for submitting your details!</h2>";
  echo "<p>Name: $name</p>";
  echo "<p>Email: $email</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
