<?php
header('Content-Type: application/json');

// Database credentials
$host = 'localhost';
$db   = 'portfolio';
$user = 'root'; // Change if needed
$pass = '';     // Change if needed

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit();
}

// Get POST data
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate
if (!$name || !$email || !$subject || !$message) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit();
}

// Prepare and insert
$stmt = $conn->prepare('INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $name, $email, $subject, $message);
if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Thank you for contacting me!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to save your message.']);
}
$stmt->close();
$conn->close(); 