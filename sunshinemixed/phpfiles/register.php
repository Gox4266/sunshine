<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sunshinecafe";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $number = trim($_POST['mobile']);

    // Server-side validation
    $errors = [];

    if (empty($fullname)) {
        $errors[] = "Full name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    if (empty($number)) {
        $errors[] = "You must enter phone number!.";
    }

    if (empty($errors)) {
        // Sanitize user inputs
        $fullname = $conn->real_escape_string($fullname);
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);
        $number = $conn->real_escape_string($option);

        // Check if the email already exists
        $checkEmailSql = "SELECT * FROM registration WHERE email = '$email'";
        $result = $conn->query($checkEmailSql);

        if ($result->num_rows > 0) {
            echo '<script type="text/javascript">';
            echo 'alert("Email already exists! Please use a different email.");';
            echo 'window.location.href = "../index.html";';
            echo '</script>';
            exit;
        } else {
            // Insert data into the database
            $sql = "INSERT INTO registration VALUES ('$fullname', '$email', '$password','$number')";
            
            if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">';
                echo 'alert("Registration Successful!");';
                echo 'window.location.href = "../mainindex.php";';
                echo '</script>';
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
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
