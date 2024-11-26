<?php
// $servername = "localhost";
// $username = "root";  // change this to your MySQL username
// $password = "";  // change this to your MySQL password
// $dbname = "sunshinecafe";  // your database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

include 'db.php'; 

// Capture form data
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (email, message)VALUES (?, ?)");
$stmt->bind_param("ss", $email, $message); 

if ($stmt->execute()) {
    echo "Feedback saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

