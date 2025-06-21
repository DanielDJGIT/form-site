<?php
$conn = new mysqli("localhost", "root", "password", "formdb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$conn->query("INSERT INTO submissions (name, email) VALUES ('$name', '$email')");
echo "Submitted!";
?>
