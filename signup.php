<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli('localhost', 'root', '', 'bk_register'); if ($conn->connect_error) {
die('Connection Failed: ' . $conn->connect_error);
} else {
$stmt = $conn->prepare("INSERT INTO sign_up (full_name, email, mobile, username, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $fullName, $email, $mobile, $username, $password);
if ($stmt->execute()) {
echo "Signup Successful!!";
} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
}
?>