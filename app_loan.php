<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$panCard = $_POST['panCard'];
$dob = $_POST['dob'];
$occupation = $_POST['occupation'];
$loanAmount = $_POST['loanAmount'];
$loanPurpose = $_POST['loanPurpose'];
$conn = new mysqli('localhost', 'root', '', 'bk_register'); if ($conn->connect_error) {
die('Connection Failed: ' . $conn->connect_error);
} else {
$stmt = $conn->prepare("INSERT INTO loan_applications (full_name, email, phone, pan_card, dob, occupation, loan_amount, loan_purpose) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssis", $fullName, $email, $phone, $panCard, $dob, $occupation, $loanAmount,
$loanPurpose);
if ($stmt->execute()) { echo "<script>";
echo "alert('Successfully Applied');";
echo "window.location.href = 'apply.html';"; echo "</script>";
} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
}
?>
