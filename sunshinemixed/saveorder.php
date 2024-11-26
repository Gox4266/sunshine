<?php

include 'phpfiles/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$table_no = $_POST['table_no'];
$coffee_types = $_POST['coffee_types'];
$quantities = $_POST['quantities'];

for ($i = 0; $i < count($coffee_types); $i++) {
    if (!empty($quantities[$i])) {
        $coffee_name = $coffee_types[$i];
        $quantity = $quantities[$i];

        $sql = "INSERT INTO orders (tableno, coffeename, quantity) VALUES ('$table_no', '$coffee_name', '$quantity')";
        
        if ($conn->query($sql) === TRUE) {
            // echo "Order for $coffee_name placed successfully!<br>";
            echo '<script type="text/javascript">';
            echo 'alert("Order placed successfully!");';
            echo '</script>';
            header("Location: mainindex.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
}
?>
