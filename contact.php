<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$panCard = $_POST['panCard']; // Adding PAN Card field
$dob = $_POST['dob']; // Adding Date of Birth field
$occupation = $_POST['occupation']; // Adding Occupation field
$annualIncome = $_POST['annualIncome'];
$creditLimit = $_POST['creditLimit'];
$conn = new mysqli('localhost', 'root', '', 'bk_register'); if ($conn->connect_error) {
die('Connection Failed: ' . $conn->connect_error);
} else {
$stmt = $conn->prepare("INSERT INTO credit_card_applications (full_name, email, phone, pan_card, dob, occupation, annual_income, credit_limit) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssid", $fullName, $email, $phone, $panCard, $dob, $occupation, $annualIncome,
$creditLimit);
if ($stmt->execute()) { echo "<script>";
echo "alert('Successfully Applied');";
echo "window.location.href = 'card.html';"; echo "</script>";
} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>

