<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Order Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function fetchOrders() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch_orders.php", true);
            xhr.onload = function() {
                if (this.status == 200) {
                    const orders = JSON.parse(this.responseText);
                    let output = '';
                    orders.forEach(function(order) {
                        output += `
                            <tr>
                                <td>${order.tableno}</td>
                                <td>${order.coffeename}</td>
                                <td>${order.quantity}</td>
                                <td>${order.order_date}</td>
                                <td><button onclick="closeOrder(${order.id})">Close</button></td>
                            </tr>
                        `;
                    });
                    document.getElementById("ordersTable").innerHTML = `
                        <tr>
                            <th>Table Number</th>
                            <th>Coffee Name</th>
                            <th>Quantity</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                    ` + output;
                }
            }
            xhr.send();
        }

        function closeOrder(orderId) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "close_order.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                console.log(this.responseText); // Debugging line
                if (this.status == 200) {
                    alert(this.responseText);
                    fetchOrders(); // Refresh orders after closing one
                }
            }
            xhr.send("order_id=" + orderId);
        }

        // Fetch orders every 5 seconds
        setInterval(fetchOrders, 5000);
        fetchOrders(); // Initial fetch
    </script>
</head>
<body>
    <h2>Order Management</h2>

    <table id="ordersTable">
        <tr>
            <th>Table Number</th>
            <th>Coffee Name</th>
            <th>Quantity</th>
            <th>Order Date</th>
            <th>Action</th>
        </tr>
    </table>
</body>
</html>
