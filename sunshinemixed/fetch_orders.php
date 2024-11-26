<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; // Ensure the correct path is used

$sql = "SELECT id, tableno, coffeename, quantity, order_date FROM orders WHERE status='open' ORDER BY order_date DESC";
$result = $conn->query($sql);

$orders = array();
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

echo json_encode($orders);

$conn->close();
?>
