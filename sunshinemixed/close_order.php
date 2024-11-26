<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; // Ensure the correct path is used

if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $sql = "UPDATE orders SET status='closed' WHERE id='$order_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Order closed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
