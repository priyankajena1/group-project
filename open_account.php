<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$intialDeposit = $_POST['intialDeposit']; // Corrected variable name
$conn = new mysqli('localhost', 'root', '', 'bk_register'); if ($conn->connect_error) {
die('Connection Failed: ' . $conn->connect_error);
} else {
$stmt = $conn->prepare("INSERT INTO new_accounts (full_name, email, phone, intial_deposite) VALUES (?, ?, ?,
?)");
$stmt->bind_param("ssii", $fullName, $email, $phone,$intialDeposit );
if ($stmt->execute()) { echo "<script>";
echo "alert('Your Details Are Submitted');"; echo "window.location.href = 'card.html';";
echo "</script>";
} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
}
?>