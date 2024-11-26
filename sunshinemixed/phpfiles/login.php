<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sunshinecafe";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

include 'db.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){  
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Server-side validation
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($errors)) {
        // Sanitize user inputs
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);

        // Check if user exists in the database
        $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Redirect to dashboard
            header("Location: ../mainindex.php");
            exit;
        } else {           
            echo '<script type="text/javascript">';
            echo 'alert("Wrong email or password! Check again.");';
            echo 'window.location.href = "../index.html";';
            echo '</script>';
            exit; // Ensure the script stops execution after the alert
        }
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}

$conn->close();
?>
